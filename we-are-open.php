<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              kjhuer.com
 * @since             1.0.0
 * @package           We_Are_Open
 *
 * @wordpress-plugin
 * Plugin Name:       We Are Open
 * Plugin URI:        n/a
 * Description:       Creates a widget that displays the operating hours of a business and highlights the current day.
 * Version:           1.0.0
 * Author:            Kevin Huer
 * Author URI:        kjhuer.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       we-are-open
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-we-are-open-activator.php
 */
function activate_we_are_open() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-we-are-open-activator.php';
	We_Are_Open_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-we-are-open-deactivator.php
 */
function deactivate_we_are_open() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-we-are-open-deactivator.php';
	We_Are_Open_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_we_are_open' );
register_deactivation_hook( __FILE__, 'deactivate_we_are_open' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-we-are-open.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_we_are_open() {

	$plugin = new We_Are_Open();
	$plugin->run();

}
run_we_are_open();
