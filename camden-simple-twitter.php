<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/populationtwo/camden-simple-twitter
 * @since             1.0.0
 * @package           Camden_Simple_Twitter
 *
 * @wordpress-plugin
 * Plugin Name:       Camden Simple Twitter
 * Plugin URI:        https://github.com/populationtwo/camden-simple-twitter/
 * Description:       A simple Twitter plugin built for Camden Theme.
 * Version:           1.1.0
 * Author:            Population2
 * Author URI:        http://population-2.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       camden-simple-twitter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-camden-simple-twitter-activator.php
 */
function activate_camden_simple_twitter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-camden-simple-twitter-activator.php';
	Camden_Simple_Twitter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-camden-simple-twitter-deactivator.php
 */
function deactivate_camden_simple_twitter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-camden-simple-twitter-deactivator.php';
	Camden_Simple_Twitter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_camden_simple_twitter' );
register_deactivation_hook( __FILE__, 'deactivate_camden_simple_twitter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-camden-simple-twitter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_camden_simple_twitter() {

	$plugin = new Camden_Simple_Twitter();
	$plugin->run();

}
run_camden_simple_twitter();
