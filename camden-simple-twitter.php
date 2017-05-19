<?php
/**
 * Camden Simple Twitter
 *
 * A simple Twitter plugin built for Camden Theme.
 *
 * @package   Camden_Simple_Twitter
 * @author    Population2 <populationtwo@gmail.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins
 * @copyright 2014 Population2
 *
 * @wordpress-plugin
 * Plugin Name:       Camden Simple Twitter
 * Plugin URI:        http://wordpress.org/plugins
 * Description:       A simple Twitter plugin built for Camden Theme.
 * Version:           0.0.1
 * Author:            Population2
 * Author URI:        
 * Text Domain:       camden-simple-twitter
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-camden-simple-twitter.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Camden_Simple_Twitter', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Camden_Simple_Twitter', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Camden_Simple_Twitter', 'get_instance' ) );