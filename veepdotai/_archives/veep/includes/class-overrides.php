<?php

class Veep_Overrides
{

    public $raw;


    function __construct() {
    }


    /**
     * Make sure that numbers are properly formatted
     */
    function format_numbers( $params, $class ) {

        if ( empty( $this->raw ) ) {
            return $params;
        }

        $value = $params['value'];
        $label = $params['display_value'];

        // Only format if un-altered
        if ( $this->raw['value'] === $value && $this->raw['label'] === $label ) {
            $params['value'] = VEEP()->helper->format_number( $this->raw['value'] );
            $params['display_value'] = VEEP()->helper->format_number( $this->raw['label'] );
        }

        $this->raw = null;

        return $params;
    }


    /**
     * Ignore certain post types
     */
    function ignore_post_types( $is_main_query, $query ) {
        $blacklist = [ 'carts', 'advanced_ads', 'ms_relationship', 'wc_user_membership', 'edd_wish_list' ];
        $post_type = $query->get( 'post_type' );

        if ( is_string( $post_type ) && in_array( $post_type, $blacklist ) ) {
            $is_main_query = false;
        }

        // Ignore the "WP GDPR Compliance" plugin
        if ( '[wpgdprc_access_request_form]' == $query->get( 's' ) ) {
            $is_main_query = false;
        }

        return $is_main_query;
    }
}
