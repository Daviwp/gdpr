<?php
/**
 * @package DWP_GDPR
 * @version 1.0.0
 */
/*
Plugin Name: DWP - GDPR
Plugin URI: https://daviwp.site/
Description: Regulations that require sites in europe to display a message of consent stating that the website uses cookies.
Author: Daviwp
Version: 1.0.1
Author URI: https://daviwp.site/
Text Domain: dwp_gdpr
Domain Path: /lang
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if ( is_admin() ) {
	require_once( dirname( __FILE__ ) . '/admin/settings.php' );
}
require_once( dirname( __FILE__ ) . '/page-front.php' );

/**************************************
 * Lang - Internationalize 
 **************************************/
add_action( 'plugins_loaded', 'my_plugin_load_text_domain' );
if ( !function_exists( 'my_plugin_load_text_domain' ) ) {
	function my_plugin_load_text_domain() {
	    load_plugin_textdomain( 'dwp_gdpr', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}
}