<?php

class Veep_Request
{

    /* (array) FacetWP-related GET variables */
    public $url_vars = [];

    /* (mixed) The main query vars */
    public $query_vars = null;

    /* (boolean) VEEP template shortcode? */
    public $is_shortcode = false;

    /* (boolean) Is a FacetWP refresh? */
    public $is_refresh = false;

    /* (boolean) Initial load? */
    public $is_preload = false;


    function __construct() {
        $this->intercept_request();
    }


    /**
     * If AJAX and the template is "wp", return the buffered HTML
     * Otherwise, store the GET variables for later use
     */
    function intercept_request() {
        $action = isset( $_POST['action'] ) ? sanitize_key( $_POST['action'] ) : '';

        $valid_actions = [
            'veep_generate',
        ];

        $this->is_refresh = ( 'veep_refresh' == $action );
        $this->is_preload = ! in_array( $action, $valid_actions );
        $prefix = VEEP()->helper->get_setting( 'prefix' );
        $is_css_tpl = isset( $_POST['data']['template'] ) && 'wp' == $_POST['data']['template'];

        // Pageload
        if ( $this->is_preload ) {
            $features = [ 'paged', 'per_page', 'sort' ];
            $valid_names = wp_list_pluck( VEEP()->helper->get_facets(), 'name' );
            $valid_names = array_merge( $valid_names, $features );

            // Store GET variables
            foreach ( $valid_names as $name ) {
                if ( isset( $_GET[ $prefix . $name ] ) && '' !== $_GET[ $prefix . $name ] ) {
                    $new_val = stripslashes_deep( $_GET[ $prefix . $name ] );
                    $new_val = in_array( $name, $features ) ? $new_val : explode( ',', $new_val );
                    $this->url_vars[ $name ] = $new_val;
                }
            }

            $this->url_vars = apply_filters( 'facetwp_preload_url_vars', $this->url_vars );
        }
        // Populate $_GET
        else {
            $data = stripslashes_deep( $_POST['data'] );

            if ( ! empty( $data['http_params']['get'] ) ) {
                foreach ( $data['http_params']['get'] as $key => $val ) {
                    if ( ! isset( $_GET[ $key ] ) ) {
                        $_GET[ $key ] = $val;
                    }
                }
            }
        }

        if ( $this->is_preload || $is_css_tpl ) {
            add_action( 'pre_get_posts', [ $this, 'sacrificial_lamb' ], 998 );
            add_action( 'pre_get_posts', [ $this, 'update_query_vars' ], 999 );
        }

        if ( ! $this->is_preload && $is_css_tpl && 'facetwp_autocomplete_load' != $action ) {
            add_action( 'shutdown', [ $this, 'inject_template' ], 0 );
            ob_start();
        }
    }


    function sacrificial_lamb( $query ) {
        // Fix for WP core issue #40393
    }


    /**
     * Force FacetWP to use the default WP query
     */
    function update_query_vars( $query ) {

        // Only run once
        if ( isset( $this->query_vars ) ) {
            return;
        }

        // Skip shortcode template
        if ( $this->is_shortcode ) {
            return;
        }

        // Skip admin
        if ( is_admin() && ! wp_doing_ajax() ) {
            return;
        }

        $is_main_query = ( $query->is_archive || $query->is_search || ( $query->is_main_query() && ! $query->is_singular ) );
        $is_main_query = ( true === $query->get( 'suppress_filters', false ) ) ? false : $is_main_query; // skip get_posts()
        $is_main_query = ( wp_doing_ajax() && ! $this->is_refresh ) ? false : $is_main_query; // skip other ajax
        $is_main_query = ( $query->is_feed ) ? false : $is_main_query; // skip feeds
        $is_main_query = ( '' !== $query->get( 'facetwp' ) ) ? (bool) $query->get( 'facetwp' ) : $is_main_query; // flag
        $is_main_query = apply_filters( 'facetwp_is_main_query', $is_main_query, $query );

        if ( $is_main_query ) {

            // Set the flag
            $query->set( 'facetwp', true );

            // Store the default WP query vars
            $this->query_vars = $query->query_vars;

            // Notify
            do_action( 'facetwp_found_main_query' );

            // No URL variables
            if ( $this->is_preload && empty( $this->url_vars ) ) {
                return;
            }

            // Generate the VEEP output
            $data = ( $this->is_preload ) ? $this->process_preload_data() : $this->process_post_data();
            $this->output = VEEP()->facet->render( $data );

            // Set up the updated query_vars
            $query->query_vars = VEEP()->facet->query_args;
        }
    }
}