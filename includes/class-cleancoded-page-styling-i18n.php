<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://CLEANCODED.com
 * @since      1.0.0
 *
 * @package    cleancoded_Page_Styling
 * @subpackage cleancoded_Page_Styling/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    cleancoded_Page_Styling
 * @subpackage cleancoded_Page_Styling/includes
 * @author     CLEANCODED <admin@cleancoded.com>
 */
class Cleancoded_Page_Styling_i18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cleancoded-page-styling',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}


}
