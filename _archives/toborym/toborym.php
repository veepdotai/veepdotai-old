<?php
/**
 * @package toborym
 * @version 1.0.0
 */
/*
Plugin Name: Toborym
Plugin URI: http://wordpress.org/plugins/toborym/
Description: This plugin generates a complete website (menu + pages) from 3 keywords
Author: Jean-Christophe Kermagoret
Version: 1.0.0
Author URI: http://toborym.com/
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'TOBORYM_VERSION', '1.01.0' );
define( 'TOBORYM__MINIMUM_WP_VERSION', '4.0' );
define( 'TOBORYM__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, array( 'Toborym', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Toborym', 'plugin_deactivation' ) );

require_once( TOBORYM__PLUGIN_DIR . 'class.toborym-menu-generator.php' );

//Toborym_Menu_Generator::init();

add_action( 'init', array( 'Toborym', 'init' ), 1);

//add_action( 'rest_api_init', array( 'Toborym_REST_API', 'init' ) );

if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
	require_once( TOBORYM__PLUGIN_DIR . 'class.toborym-admin.php' );
	//add_action( 'init', array( 'Toborym_Admin', 'init' ), 1 );
}

//add wrapper class around deprecated toborym functions that are referenced elsewhere
require_once( TOBORYM__PLUGIN_DIR . 'wrapper.php' );

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	//require_once( TOBORYM__PLUGIN_DIR . 'class.toborym-cli.php' );
}

function toborym_init() {
	load_plugin_textdomain( 'toborym' );

	Toborym_Menu_generator::init();
}
//add_action( 'admin_init', 'toborym_init' );
