<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/populationtwo/camden-simple-twitter
 * @since      1.0.0
 *
 * @package    Camden_Simple_Twitter
 * @subpackage Camden_Simple_Twitter/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Camden_Simple_Twitter
 * @subpackage Camden_Simple_Twitter/includes
 * @author     Population2 <info@population-2.com>
 */
class Camden_Simple_Twitter_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'camden-simple-twitter',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
