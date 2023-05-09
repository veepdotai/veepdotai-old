<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.veep.ai
 * @since             1.0.0
 * @package           Veepdotai
 *
 * @wordpress-plugin
 * Plugin Name:       Veepdotai
 * Plugin URI:        https://www.veep.ai
 * Description:       Veepdotai is a project to create a complete autonomous virtual presence through voice, from web site to LinkedIn page and, at the end, each social network. A true #nosouci solution :-) 
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Author:            Jean-Christophe Kermagoret
 * Author URI:        https://www.veep.ai
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       veepdotai
 * Domain Path:       /languages
 */

 /*
veepdotai is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

veepdotai is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with veepdotai. If not, see {URI to Plugin License}.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define('VEEPDOTAI_LANG', 'fr_FR');

add_action('plugins_loaded', 'veepdotai_load_textdomain');
function veepdotai_load_textdomain() {
    $plugin_dir = basename(dirname(__FILE__));
    load_plugin_textdomain(VEEPDOTAI_LANG, false, $plugin_dir . '/languages');
}
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'VEEPDOTAI_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-veepdotai-activator.php
 */
function activate_veepdotai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-veepdotai-activator.php';
	Veepdotai_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-veepdotai-deactivator.php
 */
function deactivate_veepdotai() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-veepdotai-deactivator.php';
	Veepdotai_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_veepdotai' );
register_deactivation_hook( __FILE__, 'deactivate_veepdotai' );

/**
 * The autoload vendor directory
 */
require_once dirname(__FILE__)."/vendor/autoload.php";

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-veepdotai.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_veepdotai() {

	$plugin = new Veepdotai();
	$plugin->run();

}

function veepdotai_cat_pages() {
	register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'veepdotai_cat_pages');

run_veepdotai();

