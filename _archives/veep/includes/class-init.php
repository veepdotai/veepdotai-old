<?php

class Veep_Init
{

    function __construct() {
        add_action( 'init', [ $this, 'init' ] );
    }


    /**
     * Initialize classes and WP hooks
     */
    function init() {

        // i18n
        $this->load_textdomain();

        // is_plugin_active
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

        $includes = [
/*
            'api/fetch',
            'api/refresh',
*/
            'class-helper',
/*
            'class-ajax',
            'class-request',
            'class-renderer',
            'class-diff',
            'class-indexer',
            'class-display',
            'class-builder',
*/
            'class-overrides',
            'class-settings-admin',
            'class-upgrade',
            'functions'
        ];

        foreach ( $includes as $inc ) {
            include ( VEEP_DIR . "/includes/$inc.php" );
        }

        new Veep_Upgrade();
        new Veep_Overrides();

        VEEP()->helper       = new Veep_Helper();

/*
        VEEP()->facet        = new Veep_Renderer();
        VEEP()->diff         = new Veep_Diff();
        VEEP()->indexer      = new Veep_Indexer();
        VEEP()->display      = new Veep_Display();
        VEEP()->builder      = new Veep_Builder();
*/
//        VEEP()->request      = new Veep_Request();
//        VEEP()->ajax         = new Veep_Ajax();

        // integrations
        //include( VEEP_DIR . '/includes/integrations/searchwp/searchwp.php' );

        // update checks
        include( VEEP_DIR . '/includes/class-updater.php' );

        // hooks
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'front_scripts' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_scripts' ] );
        add_filter( 'redirect_canonical', [ $this, 'redirect_canonical' ], 10, 2 );
    }


    /**
     * i18n support
     */
    function load_textdomain() {

        // admin-facing
        load_plugin_textdomain( 'veep' );
    }


    /**
     * Register the Veep settings page
     */
    function admin_menu() {
        add_options_page( 'Veep', 'Veep', 'manage_options', 'veep', [ $this, 'settings_page' ] );
    }


    /**
     * Enqueue jQuery
     */
    function front_scripts() {
        wp_enqueue_script( 'jquery' );
    }


    /**
     * Enqueue admin tooltips
     */
    function admin_scripts( $hook ) {
        if ( 'settings_page_veep' == $hook ) {
            wp_enqueue_script( 'jquery-powertip', VEEP_URL . '/assets/vendor/jquery-powertip/jquery.powertip.min.js', [ 'jquery' ], '1.2.0' );
        }
    }


    /**
     * Route to the correct edit screen
     */
    function settings_page() {
        include( VEEP_DIR . '/templates/page-settings.php' );
    }


    /**
     * Prevent WP from redirecting VEEP pager to /page/X
     */
    function redirect_canonical( $redirect_url, $requested_url ) {
        if ( false !== strpos( $redirect_url, VEEP()->helper->get_setting( 'prefix' ) . 'paged' ) ) {
            return false;
        }
        return $redirect_url;
    }


    /**
     * Add "Settings" link to plugin listing page
     */
    function plugin_action_links( $links ) {
        $settings_link = admin_url( 'options-general.php?page=veep' );
        $settings_link = '<a href=" ' . $settings_link . '">' . __( 'Settings', 'veep' )  . '</a>';
        array_unshift( $links, $settings_link );
        return $links;
    }


    /**
     * WooCommerce 3.6+ doesn't load its frontend includes for REST API requests
     * We need to force-load these includes for Veep refreshes
     * See includes() within class-woocommerce.php
     * 
     * This code isn't within /integrations/woocommerce/ because it runs *before* init
     * 
     * @since 3.3.10
     */
    function is_rest_api_request( $request ) {
        if ( false !== strpos( $_SERVER['REQUEST_URI'], 'veep' ) ) {
            return false;
        }
        return $request;
    }
}

$this->init = new Veep_Init();
