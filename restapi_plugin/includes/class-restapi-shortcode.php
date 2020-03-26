<?php

/**
 * Plugin short-code
 *
 * This class implements the plugin short code functionality.
 *
 * @since      1.0.0
 * @package    RestAPI
 * @subpackage restapi/includes
 * @author     anjanreddy <anjan111reddy@gmail.com>
 */
class RestAPI_Shortcode {
	
	
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
	
	/**
	 * The API URL.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $api_url    The string used to store the rest api url.
	 */
	protected $api_url; 
	
	public function __construct($plugin_name,$version) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->api_url = 'https://jsonplaceholder.typicode.com/users';

	}

	/**
	 * This function calls the rest api and dispaly the user list.
	 *
	 * @since    1.0.0
	 */
	public function Validate_api_access() {
		$options = get_option('api_settings');
		
		return $options['api_key'];

	}
	/**
	 * This function calls the rest api and dispaly the user list.
	 *
	 * @since    1.0.0
	 */
	public function rest_api_users() { 
		
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/userlist.php'; 
		
		return $output;  
		
	}

 

}
