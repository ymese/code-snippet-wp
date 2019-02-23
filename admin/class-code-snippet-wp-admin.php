<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://preventdirectaccess.com/
 * @since      1.0.0
 *
 * @package    Code_Snippet_Wp
 * @subpackage Code_Snippet_Wp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Code_Snippet_Wp
 * @subpackage Code_Snippet_Wp/admin
 * @author     BWPS <thinhnp@ymese.com>
 */
class Code_Snippet_Wp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of this plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Code_Snippet_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Code_Snippet_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/code-snippet-wp-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Code_Snippet_Wp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Code_Snippet_Wp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/code-snippet-wp-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Generate the plugin setting menu.
	 */
	public function generate_setting_page() {
		$menu_page = add_menu_page(
			'Gists WordPress Posts',
			'Gists',
			'administrator',
			'gists-wp',
			array(
				$this,
				'render_setting_ui',
			),
			'dashicons-smiley'
		);

		add_action(
			'admin_print_styles-' . $menu_page,
			array(
				$this,
				'add_setting_assets',
			)
		);
	}

	/**
	 * Render the plugin setting UI.
	 */
	public function render_setting_ui() {
		?>
		<h3>Gists Settings</h3>
		<div id="csw-app"></div>
		<?php
	}

	/**
	 * Add the assets file.
	 */
	public function add_setting_assets() {
		wp_enqueue_script(
			'csw_bundle',
			plugin_dir_url( CSW_BASE_FILE ) . 'admin/js/dist/gists-snippet-bundle.js',
			array(),
			CSW_VERSION,
			true
		);
	}

}
