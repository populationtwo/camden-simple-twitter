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
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Camden_Simple_Twitter_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Camden_Simple_Twitter_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/camden-simple-twitter-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Camden_Simple_Twitter_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Camden_Simple_Twitter_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/camden-simple-twitter-public.js', array( 'jquery' ), $this->version, false );

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
