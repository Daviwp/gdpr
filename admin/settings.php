<?php

/**************************************
 * Options add menu admin
 **************************************/
if ( !function_exists( 'dwp_gdpr_add_theme_options_menu' ) ) {
    function dwp_gdpr_add_theme_options_menu() {
        add_menu_page( esc_html__('DWP GDPR','dwp_gdpr'), esc_html__('DWP GDPR','dwp_gdpr' ), 'manage_options', 'dwp_gdpr', 'my_theme_options_page', 'dashicons-admin-generic');
    }
    add_action('admin_menu', 'dwp_gdpr_add_theme_options_menu');
}
/**************************************
 * Update notices
 **************************************/
if ( !function_exists( 'my_update_notice' ) ) {
    function my_update_notice() {
        settings_errors();
    }
    add_action( 'admin_notices', 'my_update_notice' );
}
/**************************************
 * Partials 
 **************************************/
require_once( dirname( __FILE__ ) . '/includes/admin-back.php' );
require_once( dirname( __FILE__ ) . '/includes/admin-front.php' );