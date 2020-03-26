<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    RestAPI
 * @subpackage RestAPI/public
 * @author     anjanreddy <anjan111reddy@gmail.com>
 */
class RestAPI_Public { 
	
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
	 * @param      string    $plugin_name       The name of this plugin.
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

		wp_enqueue_style('datatable_style', plugin_dir_url( __FILE__ ) . 'css/bootstrap-3.4.1.min.css'); 
		wp_enqueue_style('bootstrap_style', plugin_dir_url( __FILE__ ) . 'css/datatables-1.10.18.min.css');
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/restapi-public-1.0.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() { 

		wp_deregister_script('jquery');
		wp_register_script('jquery', plugin_dir_url( __FILE__ ) .'js/jquery-3.4.1.min.js',false,'3.4.1');
		wp_enqueue_script('jquery'); 
		wp_register_script('datatable', plugin_dir_url( __FILE__ ) .'js/datatables-1.10.18.min.js',false,'1.10.20');
		wp_enqueue_script('datatable'); 
		wp_register_script('bootstrap', plugin_dir_url( __FILE__ ) .'js/bootstrap-3.4.1.min.js',false,'3.4.1');
		wp_enqueue_script('bootstrap');  
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/restapi-public-1.0.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * This function calls rest_api_users function from RestAPI_Shortcode class.
	 *
	 * @since    1.0.0
	 */
	public function rest_api_users() {  
		 
	} 

}
