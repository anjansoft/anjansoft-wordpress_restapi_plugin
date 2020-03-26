<?php
/** 
 * Plugin Name:   RestAPI
 * Description:   This pulgin will call the external REST API service and dispaly the data. 
 * Version:       1.0.0
 * Author:        AnjanReddy
 * License:       GPL-3.0+
 * License URI:   License.txt 
 */

//If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

//Current plugin version. 
define( 'RESTAPI_VERSION', '1.0.0' );

//The code that runs during plugin activation. 
function activate_restapi() {
	 
}

//The code that runs during plugin deactivation.
function deactivate_restapi() {
	 
}  

//The code that runs during plugin unistallation.
function uninstall_restapi(){  
}  

// Register API custom url. 
function restapi_rewrites(){
	add_rewrite_rule( 'api$', 'index.php?api=users', 'top' );
} 
function restapi_query_vars( $query_vars ){
	$query_vars[] = 'api';
	return $query_vars;
} 
function restapi_parse_request( &$wp ){  
	if ( array_key_exists( 'api', $wp->query_vars )) { 
		$apipublic=new RestAPI_Public('api','1.0.0'); 
	}  
} 

//The core plugin class that is used to define internationalization,admin-specific hooks, and public-facing site hooks. 
require plugin_dir_path( __FILE__ ) . 'includes/class-restapi.php'; 
register_activation_hook( __FILE__, 'activate_restapi' );
register_deactivation_hook( __FILE__, 'deactivate_restapi' );
register_uninstall_hook( __FILE__, array( 'restapi', 'uninstall_restapi' ) );

//Begins execution of the plugin. 
$plugin = new RestAPI();
$plugin->register_hooks(); 

add_action( 'wp_loaded', 'restapi_rewrites' );
add_filter( 'query_vars', 'restapi_query_vars' );
add_action( 'parse_request', 'restapi_parse_request' ); 
