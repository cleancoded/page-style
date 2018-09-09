<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://CLEANCODED.com
 * @since      1.0.0
 *
 * @package    Cleancoded_Page_Styling
 * @subpackage Cleancoded_Page_Styling/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    cleancoded_Page_Styling
 * @subpackage cleancoded_Page_Styling/public
 * @author     CLEANCODED <admin@cleancoded.com>
 */
class Cleancoded_Page_Styling_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cleancoded-page-styling-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cleancoded-page-styling-public.js', array( 'jquery' ), $this->version, false );

	}

	public function get_metabox_meta() {

		$css_field_content = get_post_meta( get_the_ID(), '_cleancoded_page_styling_content', true );

		// Check if set
		if ( ! empty( $css_field_content ) ) {
			echo '<!-- cleancoded Page Styling --><style type="text/css">' . $css_field_content . '</style><!-- End cleancoded Page Styling -->';
		}

	}

}
