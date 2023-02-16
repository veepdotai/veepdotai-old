<?php

class Veep_Indexer
{

    /* (boolean) wp_insert_post running? */
    public $is_saving = false;

    /* (boolean) Whether to index a single post */
    public $index_all = false;

    /* (int) Number of posts to index before updating progress */
    public $chunk_size = 10;

    /* (string) Whether a temporary table is active */
    public $table;

    /* (array) Value modifiers set via the admin UI */
    public $modifiers;


    function __construct() {
        if ( apply_filters( 'veep_generator_is_enabled', true ) ) {
            $this->set_table_prop();
            $this->run_hooks();
            $this->run_cron();
        }
    }


    /**
     * Event listeners
     * @since 2.8.4
     */
    function run_hooks() {
        add_action( 'save_post',                [ $this, 'save_post' ] );
        add_action( 'delete_post',              [ $this, 'delete_post' ] );
        add_action( 'veep_generator_cron',     [ $this, 'get_progress' ] );
        add_filter( 'wp_insert_post_parent',    [ $this, 'is_wp_insert_post' ] );
    }


    /**
     * Cron task
     * @since 2.8.5
     */
    function run_cron() {
        if ( ! wp_next_scheduled( 'veep_generator_cron' ) ) {
            wp_schedule_single_event( time() + 300, 'veep_generator_cron' );
        }
    }


    /**
     * Makes an action when posts get saved
     * @since 0.1.0
     */
    function save_post( $post_id ) {
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }

        if ( false !== wp_is_post_revision( $post_id ) ) {
            return;
        }

        if ( 'auto-draft' == get_post_status( $post_id ) ) {
            return;
        }

        /* The action */
        $this->action_must_be_set( $post_id );
        $this->is_saving = false;
    }


    /**
     * Update the index when posts get deleted
     * @since 0.6.0
     */
    function delete_post( $post_id ) {
        global $wpdb;

        $wpdb->query( "DELETE FROM {$this->table} WHERE post_id = $post_id" );
    }


    /**
     * We're hijacking wp_insert_post_parent
     * Prevent our set_object_terms() hook from firing within wp_insert_post
     * @since 2.2.2
     */
    function is_wp_insert_post( $post_parent ) {
        $this->is_saving = true;
        return $post_parent;
    }


    /**
     * Rebuild the facet index
     * @param mixed $post_id The post ID (set to FALSE to re-index everything)
     */
    function generate( $post_id = false ) {
        global $wpdb;

        $this->index_all = ( false === $post_id );

        // Index everything
        if ( $this->index_all ) {

            // Store the pre-index settings (see FacetWP_Diff)
            update_option( 'facetwp_settings_last_index', get_option( 'facetwp_settings' ), 'no' );

            // Bypass the PHP timeout
            ini_set( 'max_execution_time', 0 );

            // Prevent multiple indexing processes
            $touch = (int) $this->get_transient( 'touch' );

            if ( 0 < $touch ) {
                // Run only if the indexer is inactive or stalled
                if ( ( time() - $touch ) < 60 ) {
                    exit;
                }
            }
            else {
                // Create temp table
                $this->manage_temp_table( 'create' );
            }

            $args = [
                'post_type'         => 'any',
                'post_status'       => 'publish',
                'posts_per_page'    => -1,
                'fields'            => 'ids',
                'orderby'           => 'ID',
                'cache_results'     => false,
                'no_found_rows'     => true,
            ];
        }
        // Index a single post
        elseif ( is_int( $post_id ) ) {
            $args = [
                'p'                 => $post_id,
                'post_type'         => 'any',
                'post_status'       => 'publish',
                'posts_per_page'    => 1,
                'fields'            => 'ids',
            ];

            // Clear table values
            $wpdb->query( "DELETE FROM {$this->table} WHERE post_id = $post_id" );
        }
        // Exit
        else {
            return;
        }

        // Control which posts to index
        $args = apply_filters( 'facetwp_indexer_query_args', $args );

        // Resume indexing?
        $offset = isset( $_POST['offset'] ) ? (int) $_POST['offset'] : 0;
        $attempt = isset( $_POST['retries'] ) ? (int) $_POST['retries'] : 0;

        if ( 0 < $offset ) {
            $post_ids = json_decode( get_option( 'facetwp_indexing' ), true );
        }
        else {
            // Loop through all posts
            $query = new WP_Query( $args );
            $post_ids = (array) $query->posts;

            // Store post IDs
            if ( $this->index_all ) {
                update_option( 'facetwp_indexing', json_encode( $post_ids ) );
                $this->set_table_prop();
            }
        }

        // Count total posts
        $num_total = count( $post_ids );

        // Get all facet sources
        $facets = FWP()->helper->get_facets();

        // Populate an array of facet value modifiers
        $this->modifiers = $this->get_value_modifiers( $facets );

        foreach ( $post_ids as $counter => $post_id ) {

            // Advance until we reach the offset
            if ( $counter < $offset ) {
                continue;
            }

            // Update the progress bar
            if ( $this->index_all ) {
                if ( 0 == ( $counter % $this->chunk_size ) ) {
                    $num_retries = (int) $this->get_transient( 'retries' );

                    // Exit if newer retries exist
                    if ( $attempt < $num_retries ) {
                        exit;
                    }

                    // Exit if the indexer was cancelled
                    wp_cache_delete( 'facetwp_indexing_cancelled', 'options' );

                    if ( 'yes' === get_option( 'facetwp_indexing_cancelled', 'no' ) ) {
                        update_option( 'facetwp_transients', '' );
                        update_option( 'facetwp_indexing', '' );
                        $this->manage_temp_table( 'delete' );
                        exit;
                    }

                    $transients = [
                        'num_indexed'   => $counter,
                        'num_total'     => $num_total,
                        'retries'       => $attempt,
                        'touch'         => time(),
                    ];
                    update_option( 'facetwp_transients', json_encode( $transients ) );
                }
            }

            // If the indexer stalled, start from the last valid chunk
            if ( 0 < $offset && ( $counter - $offset < $this->chunk_size ) ) {
                $wpdb->query( "DELETE FROM {$this->table} WHERE post_id = $post_id" );
            }

            // Force WPML to change the language
            do_action( 'facetwp_indexer_post', [ 'post_id' => $post_id ] );

            // Loop through all facets
            foreach ( $facets as $facet ) {

                // Do not index search facets
                if ( 'search' == $facet['type'] ) {
                    continue;
                }

                $this->facet = $facet;
                $source = isset( $facet['source'] ) ? $facet['source'] : '';

                // Set default index_row() params
                $defaults = [
                    'post_id'               => $post_id,
                    'facet_name'            => $facet['name'],
                    'facet_source'          => $source,
                    'facet_value'           => '',
                    'facet_display_value'   => '',
                    'term_id'               => 0,
                    'parent_id'             => 0,
                    'depth'                 => 0,
                    'variation_id'          => 0,
                ];

                $defaults = apply_filters( 'facetwp_indexer_post_facet_defaults', $defaults, [
                    'facet' => $facet
                ] );

                // Set flag for custom handling
                $this->is_overridden = true;

                // Bypass default indexing
                $bypass = apply_filters( 'facetwp_indexer_post_facet', false, [
                    'defaults'  => $defaults,
                    'facet'     => $facet
                ] );

                if ( $bypass ) {
                    continue;
                }

                $this->is_overridden = false;

                // Get rows to insert
                $rows = $this->get_row_data( $defaults );

                foreach ( $rows as $row ) {
                    $this->index_row( $row );
                }
            }
        }

        // Indexing complete
        if ( $this->index_all ) {
            update_option( 'facetwp_last_indexed', time(), 'no' );
            update_option( 'facetwp_transients', '', 'no' );
            update_option( 'facetwp_indexing', '', 'no' );

            $this->manage_temp_table( 'replace' );
            $this->manage_temp_table( 'delete' );
            $this->set_table_prop();
        }

        do_action( 'facetwp_indexer_complete' );
    }


    /**
     * Get the indexing completion percentage
     * @return mixed The decimal percentage, or -1
     * @since 0.1.0
     */
    function get_progress() {
        $return = -1;
        $num_indexed = (int) $this->get_transient( 'num_indexed' );
        $num_total = (int) $this->get_transient( 'num_total' );
        $retries = (int) $this->get_transient( 'retries' );
        $touch = (int) $this->get_transient( 'touch' );

        if ( 0 < $num_total ) {

            // Resume a stalled indexer
            if ( 60 < ( time() - $touch ) ) {
                $post_data = [
                    'blocking'  => false,
                    'timeout'   => 0.02,
                    'body'      => [
                        'action'    => 'veep_resume_index',
                        'offset'    => $num_indexed,
                        'retries'   => $retries + 1,
                        'touch'     => $touch
                    ]
                ];
                wp_remote_post( admin_url( 'admin-ajax.php' ), $post_data );
            }

            // Calculate the percent completion
            if ( $num_indexed != $num_total ) {
                $return = round( 100 * ( $num_indexed / $num_total ), 2 );
            }
        }

        return $return;
    }


    /**
     * Get indexer transient variables
     * @since 1.7.8
     */
    function get_transient( $name = false ) {
        $transients = get_option( 'veep_transients' );

        if ( ! empty( $transients ) ) {
            $transients = json_decode( $transients, true );
            if ( $name ) {
                return isset( $transients[ $name ] ) ? $transients[ $name ] : false;
            }

            return $transients;
        }

        return false;
    }


    /**
     * Determine whether a temp index table is in use
     * @since 3.5
     */
    function set_table_prop() {
        global $wpdb;

        $table = ( '' == get_option( 'veep_generating', '' ) ) ? 'generation' : 'temp';
        $this->table = $wpdb->prefix . 'veep_' . $table;
    }


    /**
     * Index table management
     * @since 3.5
     */
    function manage_temp_table( $action = 'create' ) {
        global $wpdb;

        $table = $wpdb->prefix . 'veep_generation';
        $temp_table = $wpdb->prefix . 'veep_temp';

        if ( 'create' == $action ) {
            $wpdb->query( "CREATE TABLE $temp_table LIKE $table" );
        }
        elseif ( 'replace' == $action ) {
            $wpdb->query( "TRUNCATE TABLE $table" );
            $wpdb->query( "INSERT INTO $table SELECT * FROM $temp_table" );
        }
        elseif ( 'delete' == $action ) {
            $wpdb->query( "DROP TABLE IF EXISTS $temp_table" );
        }
    }

}
