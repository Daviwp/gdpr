<?php

/**************************************
 * Options
 **************************************/
if ( !function_exists( 'add_custom_options' ) ) {
    function add_custom_options(){
        add_settings_section(
            'my_section', 
            false, 
            false, 
            'my_theme_options'
        );

        //RADIO HIDE
        add_settings_field( 
            'my_radios_hide', 
            esc_html__( 'Mostrar mensagem', 'dwp_gdpr' ), 
            'my_radios_callback', 
            'my_theme_options', 
            'my_section' 
        );   
        register_setting( 
            'my_section', 
            'my_radios_hide' 
        );

        //POSITION
        add_settings_field( 
            'my_radios_position', 
            esc_html__( 'Escolha posição da mensagem', 'dwp_gdpr' ),
            'my_radios_callback_position', 
            'my_theme_options', 
            'my_section' 
        );   
        register_setting( 
            'my_section', 
            'my_radios_position' 
        );

        //TEMA
        add_settings_field( 
            'my_input_tema', 
            esc_html__( 'Temas', 'dwp_gdpr' ),
            'my_radios_callback_tema', 
            'my_theme_options', 
            'my_section' 
        );   
        register_setting( 
            'my_section', 
            'my_input_tema' 
        );

        //BUTTON
        add_settings_field( 
            'my_input_button', 
            esc_html__( 'Nome do botão', 'dwp_gdpr' ),
            'my_button_callback', 
            'my_theme_options', 
            'my_section' 
        );   
        register_setting( 
            'my_section', 
            'my_input_button' 
        );

        //MENSAGEM  
        add_settings_field( 
            'my_input_mensagem', 
            esc_html__( 'Digite sua mensagem', 'dwp_gdpr' ),
            'my_text_callback_mensagem', 
            'my_theme_options', 
            'my_section', 
            array('label_for' => 'my_text_id') 
        );
        register_setting( 
            'my_section', 
            'my_input_mensagem' 
        );

        //SAVE PRE CONFIG
        if( get_option('my_radios_hide') == '' && get_option('my_radios_position') == '' && get_option('my_input_button') == '' && get_option('my_input_tema') == '' && get_option('my_input_mensagem') == '' ){
            update_option('my_radios_hide', 'true');
            update_option('my_radios_position', 'dwp_gdpr-tema-front-fundo');
            update_option('my_input_button', esc_html__( 'OK', 'dwp_gdpr' ));
            update_option('my_input_tema', 'dwp_gdpr_light');
            update_option('my_input_mensagem',
                esc_html__( 'We use cookies to provide our services and for analytics and marketing. To find out more about our use of cookies, please see our <a href="https://stage.rockcontent.com/">Privacy Policy</a>. By continuing to browse our website, you agree to our use of cookies.', 'dwp_gdpr' )
            );
        }
    }
    add_action( 'admin_init', 'add_custom_options' );
}