<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://preventdirectaccess.com/
 * @since             1.0.0
 * @package           Code_Snippet_Wp
 *
 * @wordpress-plugin
 * Plugin Name:       Code Snippet WordPress Post
 * Plugin URI:        http://preventdirectaccess.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            BWPS
 * Author URI:        http://preventdirectaccess.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       code-snippet-wp
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
define( 'CSW_VERSION', '1.0.0' );
define( 'CSW_BASE_FILE', __FILE__ );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-code-snippet-wp-activator.php
 */
function activate_code_snippet_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-code-snippet-wp-activator.php';
	Code_Snippet_Wp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-code-snippet-wp-deactivator.php
 */
function deactivate_code_snippet_wp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-code-snippet-wp-deactivator.php';
	Code_Snippet_Wp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_code_snippet_wp' );
register_deactivation_hook( __FILE__, 'deactivate_code_snippet_wp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-code-snippet-wp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_code_snippet_wp() {

	$plugin = new Code_Snippet_Wp();
	$plugin->run();

}
run_code_snippet_wp();
