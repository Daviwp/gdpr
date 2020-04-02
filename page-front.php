<?php
/**************************************
 * Add scripts admin and pate template
 **************************************/
add_action( 'init', 'add_scripts_dwp_gdpr' );
if ( !function_exists( 'add_scripts_dwp_gdpr' ) ) {
    function add_scripts_dwp_gdpr( $hook ) {
     	wp_enqueue_style( 'dwp_gdpr', plugins_url( 'admin/assets/css/dwp_gdpr.css', __FILE__ ) );
        wp_enqueue_script('dwp_gdpr', plugins_url( 'admin/assets/js/dwp_gdpr.js', __FILE__ ), array('jquery'), '', true );
    }
}

/**************************************
 * Add html footer page template
 **************************************/
add_action( 'wp_footer', 'add_html_dwp_gdpr_page_template' );
if ( !function_exists( 'add_html_dwp_gdpr_page_template' ) ) {
    function add_html_dwp_gdpr_page_template(){
    	if( get_option('my_radios_hide' ) == 'true' && $_COOKIE["dwp_gdpr_cookies"] != 'true'  ): ?>
    		<div class='dwp_gdpr-tema dwp_gdpr-front <?php if(get_option('my_radios_position')) echo get_option('my_radios_position') ?> <?php if( get_option('my_input_tema')) echo get_option('my_input_tema') ?> '>
            	<div class='container-dwp_gdpr'>
            		<?php 
            			if(get_option('my_input_mensagem')){
            				echo '<p>'.get_option('my_input_mensagem').'</p>';
            			}
            		?>
            		<button class='rock_button'>
            			<?php if( get_option('my_input_button' ) ) 
            				echo get_option('my_input_button' );
            				else 
            				echo 'OK'; 
            			?>
            		</button>
            	</div>
            </div>
    	<?php endif;
    }
}