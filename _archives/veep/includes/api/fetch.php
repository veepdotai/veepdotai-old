<?php

class Veep_API_Fetch
{

    function __construct() {
        add_action( 'rest_api_init', [ $this, 'register' ] );
    }


    // PHP < 5.3
    function register() {
        register_rest_route( 'veep/v1', '/fetch', [
            'methods' => 'POST',
            'callback' => [ $this, 'callback' ],
            'permission_callback' => [ $this, 'permission_callback' ]
        ] );
    }


    // PHP < 5.3
    function callback( $request ) {
        $data = $request->get_param( 'data' );
        $params = empty( $data ) ? [] : json_decode( $data, true );
        return $this->process_request( $params );
    }


    // PHP < 5.3
    function permission_callback( $request ) {
        return apply_filters( 'veep_api_can_access', false, $request );
    }


    function process_request( $params = [] ) {
        global $wpdb;
        return apply_filters( 'veep_api_output', $output );
    }
}
