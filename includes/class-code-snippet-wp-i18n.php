<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://preventdirectaccess.com/
 * @since      1.0.0
 *
 * @package    Code_Snippet_Wp
 * @subpackage Code_Snippet_Wp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Code_Snippet_Wp
 * @subpackage Code_Snippet_Wp/includes
 * @author     BWPS <thinhnp@ymese.com>
 */
class Code_Snippet_Wp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'code-snippet-wp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
