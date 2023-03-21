<?php

class Veep_Updater
{

    function __construct() {
        add_filter( 'plugins_api', [ $this, 'plugins_api' ], 10, 3 );
        add_filter( 'pre_set_site_transient_update_plugins', [ $this, 'check_update' ] );
        add_action( 'in_plugin_update_message-' . VEEP_BASENAME, [ $this, 'in_plugin_update_message' ], 10, 2 );
        add_filter( 'extra_plugin_headers', [ $this, 'extra_plugin_headers' ] );
    }


    /**
     * Get info for Veep and its add-ons
     */
    function get_plugins_to_check() {
        $output = [];

        // bust the cache to make sure the "GitHub URI" header is included
        wp_cache_delete( 'plugins', 'plugins' );

        $plugins = get_plugins();
        $active_plugins = get_option( 'active_plugins', [] );

        foreach ( $active_plugins as $plugin_path ) {
            $info = $plugins[ $plugin_path ];
            $github = isset( $info['GitHub URI'] ) ? $info['GitHub URI'] : '';
            $slug = trim( dirname( $plugin_path ), '/' );

            // only intercept Veep and its add-ons
            $is_valid = in_array( $slug, [ 'veep', 'user-post-type' ] );
            $is_valid = ( 0 === strpos( $github, 'veep/' ) ) ? true : $is_valid;

            if ( $is_valid ) {
                $output[ $slug ] = [
                    'name' => $info['Name'],
                    'version' => $info['Version'],
                    'description' => $info['Description'],
                    'plugin_path' => $plugin_path,
                ];
            }
        }

        return $output;
    }


    /**
     * Handle the "View Details" popup
     *
     * $args->slug = "veep"
     * plugin_path = "veep/veep.php"
     */
    function plugins_api( $result = false, $action, $args ) {
        if ( 'plugin_information' == $action ) {
            $slug = $args->slug;
            $to_check = $this->get_plugins_to_check();

            $response = get_option( 'veep_updater_response', '' );
            $response = json_decode( $response, true );

            if ( isset( $to_check[ $slug ] ) && isset( $response[ $slug ] ) ) {
                $local_data = $to_check[ $slug ];
                $remote_data = $response[ $slug ];

                return (object) [
                    'name'          => $local_data['name'],
                    'slug'          => $local_data['plugin_path'],
                    'version'       => $remote_data['version'],
                    'last_updated'  => $remote_data['last_updated'],
                    'download_link' => $remote_data['package'],
                    'sections'      => [
                        'description'   => $local_data['description'],
                        'changelog'     => $remote_data['sections']['changelog']
                    ],
                    'homepage' => 'https://veep.ai/',
                    'rating' => 100,
                    'num_ratings' => 1
                ];
            }
        }

        return $result;
    }


    /**
     * Grab (and cache) plugin update data
     */
    function check_update( $transient ) {
        if ( empty( $transient->checked ) ) {
            return $transient;
        }

        $now = strtotime( 'now' );
        $response = get_option( 'veep_updater_response', '' );
        $ts = (int) get_option( 'veep_updater_last_checked' );
        $plugins = $this->get_plugins_to_check();

        if ( empty( $response ) || $ts + 14400 < $now ) {

            $request = wp_remote_post( 'http://api.veep.com', [
                'body' => [
                    'action'    => 'check_plugins',
                    'slugs'     => array_keys( $plugins ),
                    'license'   => VEEP()->helper->get_license_key(),
                    'host'      => VEEP()->helper->get_http_host(),
                    'wp_v'      => get_bloginfo( 'version' ),
                    'fwp_v'     => VEEP_VERSION,
                    'php_v'     => phpversion(),
                ]
            ] );

            if ( ! is_wp_error( $request ) || 200 == wp_remote_retrieve_response_code( $request ) ) {
                $body = json_decode( $request['body'], true );
                $activation = json_encode( $body['activation'] );
                $response = json_encode( $body['slugs'] );
            }

            update_option( 'veep_activation', $activation );
            update_option( 'veep_updater_response', $response, 'no' );
            update_option( 'veep_updater_last_checked', $now, 'no' );
        }

        if ( ! empty( $response ) ) {
            $response = json_decode( $response, true );

            foreach ( $response as $slug => $info ) {
                if ( isset( $plugins[ $slug ] ) && version_compare( $plugins[ $slug ]['version'], $info['version'], '<' ) ) {
                    $transient->response[ $plugins[ $slug ]['plugin_path'] ] = (object) [
                        'slug'          => $slug,
                        'plugin'        => $plugins[ $slug ]['plugin_path'],
                        'new_version'   => $info['version'],
                        'package'       => $info['package'],
                    ];
                }
            }
        }

        return $transient;
    }


    /**
     * Display a license reminder on the plugin list screen
     */
    function in_plugin_update_message( $plugin_data, $response ) {
        if ( ! VEEP()->helper->is_license_active() ) {
            $price_id = (int) VEEP()->helper->get_license_meta( 'price_id' );
            $license = VEEP()->helper->get_license_key();

            if ( 0 < $price_id ) {
                echo '<br />' . sprintf(
                    __( 'Please <a href="%s" target="_blank">renew your license</a> for automatic updates.', 'fwp' ),
                    esc_url( "https://veep.com/checkout/?edd_action=add_to_cart&download_id=24&edd_options[price_id]=$price_id&discount=$license" )
                );
            }
            else {
                echo '<br />' . __( 'Please activate your Veep license for automatic updates.', 'fwp' );
            }
        }
    }


    function extra_plugin_headers( $headers ) {
        $headers[] = 'GitHub URI';
        return $headers;
    }
}

new Veep_Updater();
