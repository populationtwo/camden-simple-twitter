<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/populationtwo/camden-simple-twitter
 * @since      1.0.0
 *
 * @package    Camden_Simple_Twitter
 * @subpackage Camden_Simple_Twitter/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Camden_Simple_Twitter
 * @subpackage Camden_Simple_Twitter/public
 * @author     Population2 <info@population-2.com>
 */
class Camden_Simple_Twitter_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $camden_simple_twitter    The ID of this plugin.
	 */
	private $camden_simple_twitter;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $camden_simple_twitter       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $camden_simple_twitter, $version ) {

		$this->plugin_name = $camden_simple_twitter;
		$this->version = $version;

	}


	/**
	 * NOTE:  Actions are points in the execution of a page or process
	 *        lifecycle that WordPress fires.
	 *
	 *        Actions:    http://codex.wordpress.org/Plugin_API#Actions
	 *        Reference:  http://codex.wordpress.org/Plugin_API/Action_Reference
	 *
	 * @since    1.0.0
	 */
	public function load_twitter_helper() {

		// Parse errors will be thrown in PHP 4
		if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
			/* uncomment the line below to always include twitter settings */
			//define('ENABLE_TWITTER_CONFIG', 1);

			require_once( plugin_dir_path( __FILE__ ) . 'partials/TwitterAPIExchange.php' );
			require_once( plugin_dir_path( __FILE__ ) . 'partials/TwitterHelper.php' );

		}

	}

}
