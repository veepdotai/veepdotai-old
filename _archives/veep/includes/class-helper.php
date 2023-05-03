<?php

final class Veep_Helper
{

    /* (array) The veep_settings option (after hooks) */
    public $settings;

    function __construct() {
        $this->settings = $this->load_settings();
    }


    /**
     * Parse the URL hostname
     */
    function get_http_host() {
        return parse_url( get_option( 'home' ), PHP_URL_HOST );
    }


    /**
     * Get the current page URI
     */
    function get_uri() {
        $uri = $_SERVER['REQUEST_URI'];
        if ( false !== ( $pos = strpos( $uri, '?' ) ) ) {
            $uri = substr( $uri, 0, $pos );
        }
        return trim( $uri, '/' );
    }


    /**
     * Get settings and allow for developer hooks
     */
    function load_settings( $last_index = false ) {
        $name = $last_index ? 'veep_settings_last_index' : 'veep_settings';
        $option = get_option( $name );

        $defaults = [];

        $settings = ( false !== $option ) ? json_decode( $option, true ) : [];
        $settings = array_merge( $defaults, $settings );
        $settings['settings'] = array_merge( $defaults['settings'], $settings['settings'] );

        // Filtered settings
        return $settings;
    }


    /**
     * Get a general setting value
     *
     * @param string $name The setting name
     * @param mixed $default The default value
     * @since 1.9
     */
    function get_setting( $name, $default = '' ) {
        if ( isset( $this->settings['settings'][ $name ] ) ) {
            return $this->settings['settings'][ $name ];
        }

        return $default;
    }


    /**
     * Sanitize SQL data
     * @return mixed The sanitized value(s)
     * @since 3.0.7
     */
    function sanitize( $input ) {
        global $wpdb;

        if ( is_array( $input ) ) {
            $output = [];

            foreach ( $input as $key => $val ) {
                $output[ $key ] = $this->sanitize( $val );
            }
        }
        else {
            if ( $wpdb->dbh && $wpdb->use_mysqli ) {
                $output = mysqli_real_escape_string( $wpdb->dbh, $input );
            }
            else {
                $output = addslashes( $input );
            }
        }

        return $output;
    }


    /**
     * Hash a value if needed
     * @return string
     * @since 2.1
     */
    function safe_value( $value ) {
        $value = remove_accents( $value );

        if ( preg_match( '/[^a-z0-9_.\- ]/i', $value ) ) {
            if ( ! preg_match( '/^\d{4}-(0[1-9]|1[012])-([012]\d|3[01])/', $value ) ) {
                $value = md5( $value );
            }
        }

        $value = str_replace( ' ', '-', strtolower( $value ) );
        $value = preg_replace( '/[-]{2,}/', '-', $value );
        $value = ( 50 < strlen( $value ) ) ? md5( $value ) : $value;
        return $value;
    }


    /**
     * Properly format numbers, taking separators into account
     * @return number
     * @since 2.7.5
     */
    function format_number( $num ) {
        $sep_decimal = $this->get_setting( 'decimal_separator' );
        $sep_thousands = $this->get_setting( 'thousands_separator' );

        $num = str_replace( $sep_thousands, '', $num );
        $num = ( ',' == $sep_decimal ) ? str_replace( ',', '.', $num ) : $num;
        $num = preg_replace( '/[^0-9-.]/', '', $num );

        return $num;
    }


    /**
     * Get row counts for all facets
     * @since 3.3.4
     */
    function get_row_counts() {
        global $wpdb;

        $output = [];
        $results = $wpdb->get_results( "SELECT facet_name, COUNT(*) AS row_count FROM {$wpdb->prefix}veep_index GROUP BY facet_name" );

        foreach ( $results as $result ) {
            $output[ $result->facet_name ] = (int) $result->row_count;
        }

        return $output;
    }


    /**
     * Grab the license key
     * @since 3.0.3
     */
    function get_license_key() {
        $license_key = defined( 'VEEP_LICENSE_KEY' ) ? VEEP_LICENSE_KEY : get_option( 'veep_license' );
        $license_key = apply_filters( 'veep_license_key', $license_key );
        return sanitize_key( trim( $license_key ) );
    }


    /**
     * Determine whether the license is active
     * @since 3.3.0
     */
    function is_license_active() {
        return ( 'success' == $this->get_license_meta( 'status' ) );
    }


    /**
     * Get a license meta value
     * Possible keys: status, message, expiration, payment_id, price_id
     * @since 3.5.3
     */
    function get_license_meta( $key = 'status' ) {
        $activation = get_option( 'veep_activation' );

        if ( ! empty( $activation ) ) {
            $data = json_decode( $activation, true );

            if ( isset( $data[ $key ] ) ) {
                return $data[ $key ];
            }
        }

        return false;
    }
}
