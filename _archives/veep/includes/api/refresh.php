<?php

add_action( 'rest_api_init', function() {
    register_rest_route( 'veep/v1', '/refresh', [
        'methods' => 'POST',
        'callback' => 'veep_api_refresh',
        'permission_callback' => '__return_true'
    ] );
});

function veep_api_refresh( $request ) {
    $action = isset( $_POST['action'] ) ? $_POST['action'] : '';

    $valid_actions = [
        'veep_refresh',
        'veep_autocomplete_load'
    ];

    $valid_actions = apply_filters( 'veep_api_valid_actions', $valid_actions );

    if ( in_array( $action, $valid_actions ) ) {
        do_action( $action );
    }

    return [];
}
