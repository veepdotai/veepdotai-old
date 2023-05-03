<?php

class Veep_Upgrade
{
    function __construct() {
        $this->version = VEEP_VERSION;
        $this->last_version = get_option( 'veep_version' );

        if ( version_compare( $this->last_version, $this->version, '<' ) ) {
            if ( version_compare( $this->last_version, '0.1.0', '<' ) ) {
                require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                $this->clean_install();
            }
            else {
                $this->run_upgrade();
            }

            update_option( 'veep_version', $this->version );
        }
    }


    private function clean_install() {
        global $wpdb;

        $sql = "...";
        dbDelta( $sql );

        // Add default settings
        $settings = file_get_contents( VEEP_DIR . '/assets/js/src/sample.json' );
        add_option( 'veep_settings', $settings );
    }


    private function run_upgrade() {
        global $wpdb;

        $table = sanitize_key( $wpdb->prefix . 'table_name...' );

        if ( version_compare( $this->last_version, '1.9', '<' ) ) {
            $wpdb->query( "ALTER ..." );
            $wpdb->query( "UPDATE ..." );
        }

        if ( version_compare( $this->last_version, '2.2.3', '<' ) ) {
            deactivate_plugins( 'plugin1/plugin1.php' );
            deactivate_plugins( 'plugin2/plugin2.php' );
        }

    }
}
