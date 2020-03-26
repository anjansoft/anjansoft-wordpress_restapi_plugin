=== REST API ===

Contributors: anjanreddy 

Tags: restapi, wordpress restapi

Requires at least: 5.1

Tested up to: 5.2

Requires PHP: 7.2

Stable tag: 4.3

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
This plugin allows you to make a external REST API call and display data from external website.

== Description ==

This plugin allows you to make a external REST API call and display data from external website.  

== Requirements ==

1. WordPress version 3.0 and later.
2. PHP 5.2 or later.
3. Single or Multisite installation.

== Installation == 

1. Unzip the downloaded package.
2. Upload folder include the file to the /wp-content/plugins/ directory.
3. Activate the plugin through the Plugins menu in WordPress.
4. Please include short-code [restapi_shortcode] in page content to display the API user list.
5. Also you can place <?php do_action('restapi_hook'); ?> in your templates and select this template to a page in admin section.

==Settings ==

You can change the settings of REST API plugin in Settings -> Reading.

==Classes==

1. RestAPI             Load's the required dependencies for this plugin.
2. RestAPI_Loader      Register the hooks of the plugin.
3. RestAPI_Activator   Define code to excute on plugin activation
4. RestAPI_Deactivator Define code to excute on plugin deactivation.
5. RestAPI_i18n        Defines internationalization functionality.
6. RestAPI_Shortcode   Defines plugin short-code functionality.
7. Upload folder include the file to the /wp-content/plugins/ directory.
8. RestAPI_Widget      Defines plugin widget functionality.
9. RestAPI_Admin       Defines all hooks for the admin area.
10. RestAPI_Public      Defines all hooks for the public side of the site. 
  

== Screenshots ==

1. screenshot-1 admin settings. 
2. screenshot-2 user list grid. 
3. screenshot-2 user details.

== Changelog ==
