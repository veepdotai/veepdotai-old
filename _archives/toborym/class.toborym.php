<?php

class Toborym {

    const API_HOST = 'rest.toborym.com';
	const API_PORT = 80;

	public static $LIMIT_NOTICES = array(
		10501 => 'FIRST_MONTH_OVER_LIMIT',
		10502 => 'SECOND_MONTH_OVER_LIMIT',
		10504 => 'THIRD_MONTH_APPROACHING_LIMIT',
		10508 => 'THIRD_MONTH_OVER_LIMIT',
		10516 => 'FOUR_PLUS_MONTHS_OVER_LIMIT',
	);

	private static $initiated = false;

    public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}

        Toborym_Menu_Generator::init();
	}

	/**
	 * Initializes WordPress hooks
	 */
	private static function init_hooks() {
		self::$initiated = true;

        add_post_type_support( 'page', 'excerpt' );


	}

	public static function get_api_key() {
		return apply_filters( 'toborym_get_api_key', defined('WPCOM_API_KEY') ? constant('WPCOM_API_KEY') : get_option('wordpress_api_key') );
	}

	public static function check_key_status( $key, $ip = null ) {
		return self::http_post( Toborym::build_query( array( 'key' => $key, 'blog' => get_option( 'home' ) ) ), 'verify-key', $ip );
	}

	public static function verify_key( $key, $ip = null ) {
		// Shortcut for obviously invalid keys.
		if ( strlen( $key ) != 12 ) {
			return 'invalid';
		}
		
		$response = self::check_key_status( $key, $ip );

		if ( $response[1] != 'valid' && $response[1] != 'invalid' )
			return 'failed';

		return $response[1];
	}

	public static function deactivate_key( $key ) {
		$response = self::http_post( Toborym::build_query( array( 'key' => $key, 'blog' => get_option( 'home' ) ) ), 'deactivate' );

		if ( $response[1] != 'deactivated' )
			return 'failed';

		return $response[1];
	}

    /**
	 * Essentially a copy of WP's build_query but one that doesn't expect pre-urlencoded values.
	 *
	 * @param array $args An array of key => value pairs
	 * @return string A string ready for use as a URL query string.
	 */
	public static function build_query( $args ) {
		return _http_build_query( $args, '', '&' );
	}

    /**
	 * Log debugging info to the error log.
	 *
	 * Enabled when WP_DEBUG_LOG is enabled (and WP_DEBUG, since according to
	 * core, "WP_DEBUG_DISPLAY and WP_DEBUG_LOG perform no function unless
	 * WP_DEBUG is true), but can be disabled via the akismet_debug_log filter.
	 *
	 * @param mixed $toborym_debug The data to log.
	 */
	public static function log( $toborym_debug ) {
		if ( apply_filters( 'toborym_debug_log', defined( 'WP_DEBUG' ) && WP_DEBUG && defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG && defined( 'TOBORYM_DEBUG' ) && TOBORYM_DEBUG ) ) {
			error_log( print_r( compact( 'toborym_debug' ), true ) );
		}
	}

    /**
	 * Attached to activate_{ plugin_basename( __FILES__ ) } by register_activation_hook()
	 * @static
	 */
	public static function plugin_activation() {
		if ( version_compare( $GLOBALS['wp_version'], TOBORYM__MINIMUM_WP_VERSION, '<' ) ) {
			load_plugin_textdomain( 'toborym' );
			
			$message = '<strong>'.sprintf(esc_html__( 'Toborym %s requires WordPress %s or higher.' , 'toborym'), TOBORYM_VERSION, TOBORYM__MINIMUM_WP_VERSION ).'</strong> '.sprintf(__('Please <a href="%1$s">upgrade WordPress</a> to a current version, or <a href="%2$s">downgrade to version 2.4 of the Akismet plugin</a>.', 'akismet'), 'https://codex.wordpress.org/Upgrading_WordPress', 'https://wordpress.org/extend/plugins/toborym/download/');

			Toborym::bail_on_activation( $message );
		} elseif ( ! empty( $_SERVER['SCRIPT_NAME'] ) && false !== strpos( $_SERVER['SCRIPT_NAME'], '/wp-admin/plugins.php' ) ) {
			add_option( 'Activated_Toborym', true );
		}
	}

	/**
	 * Removes all connection options
	 * @static
	 */
	public static function plugin_deactivation( ) {
		self::deactivate_key( self::get_api_key() );
		
		// Remove any scheduled cron jobs.
		$toborym_cron_events = array(
			'toborym_schedule_cron_recheck',
			'toborym_scheduled_delete',
		);
		
		foreach ( $toborym_cron_events as $toborym_cron_event ) {
			$timestamp = wp_next_scheduled( $toborym_cron_event );
			
			if ( $timestamp ) {
				wp_unschedule_event( $timestamp, $toborym_cron_event );
			}
		}
	}
}