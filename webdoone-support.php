<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://webdoone.com
 * @since             1.0.0
 * @package           Webdoone_Support
 *
 * @wordpress-plugin
 * Plugin Name:       Webdoone Support
 * Plugin URI:        http://webdoone.com/support
 * Description:       Webdoone Support ticket system for themes or plugin authors
 * Version:           1.0.0
 * Author:            Webdoone
 * Author URI:        http://webdoone.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       webdoone-support
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-webdoone-support-activator.php
 */
function activate_webdoone_support() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webdoone-support-activator.php';
	Webdoone_Support_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-webdoone-support-deactivator.php
 */
function deactivate_webdoone_support() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-webdoone-support-deactivator.php';
	Webdoone_Support_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_webdoone_support' );
register_deactivation_hook( __FILE__, 'deactivate_webdoone_support' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-webdoone-support.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_webdoone_support() {

	$plugin = new Webdoone_Support();
	$plugin->run();

}
run_webdoone_support();
