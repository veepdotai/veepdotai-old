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
 * Description:       Content generator
 * Version:           1.0.0
 * Author:            Jean-Christophe Kermagoret
 * Author URI:        https://www.veep.ai
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       veepdotai
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
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
run_veepdotai();
