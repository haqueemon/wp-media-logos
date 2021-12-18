<?php
/*
Plugin Name: Media Logos
Plugin URI: https://github.com/haqueemon/wp-media-logos
Description: Custom plugin for Press Link. Get code for your website by copy and paste.
Version: 1.0
Author: Enamul Haque Emon
Author URI: https://www.fiverr.com/emon7_7_7
License: 
Text Domain: media-logos
Domain Path: /languages
*/

class Media_logos {

	// Construct method
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'media_logos_bootstrap' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'media_logos_scripts' ) );
		add_shortcode( 'webexcel-media-logos', array( $this, 'media_logos_shortcode' ) ); // [webexcel-media-logos]
	}

	// Load Text domain
	public function media_logos_bootstrap() {
		load_plugin_textdomain( 'media-logos', false, plugin_dir_path( __FILE__ ) . "/languages" );
	}

	// Load Scripts
	public function media_logos_scripts() {
		wp_enqueue_media();
		wp_enqueue_script( 'jquery');
		wp_enqueue_style( 'ml-main-css', plugin_dir_url( __FILE__ ) . "assets/css/main.css");
		wp_enqueue_script( 'ml-main-js', plugin_dir_url( __FILE__ ) . "assets/js/main.js", 'jquery' , time(), true );
	}

	// Short Code
	public function media_logos_shortcode() {
		require_once(plugin_dir_path(__FILE__)."view.php");
	}

}

new Media_logos();


