<?php

/**************************************
 * Html config admin
 **************************************/
if ( !function_exists( 'my_theme_options_page' ) ) {
    function my_theme_options_page(){
        ?>
            <div class="wrap">

                <h2><?php echo __( 'Configurações', 'dwp_gdpr' ); ?></h2>
                <form method="post" action="options.php">
                    <?php
                        settings_fields("my_section");
                        do_settings_sections("my_theme_options");
                        submit_button();
                    ?>
                </form>
                <h4><?php echo esc_html__( 'Preview', 'dwp_gdpr' ); ?></h4>
                <!-- FUNCTION ADD HTML PAGE TEMPLATE EXAMPLE-->
                <div class='dwp_gdpr-tema <?php if(get_option('my_radios_position')) echo get_option('my_radios_position') ?> <?php if( get_option('my_input_tema')) echo get_option('my_input_tema') ?> '>
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
            </div>
        <?php
    }
}

/**************************************
 * Radios
 **************************************/
if ( !function_exists( 'my_radios_callback' ) ) {
    function my_radios_callback(){
        ?>
            <fieldset>
                <label>
                    <input type="radio" name="my_radios_hide" value="true" <?php checked( get_option('my_radios_hide'), 'true' ); ?>><?php echo esc_html__( 'Sim', 'dwp_gdpr' ); ?>
                </label>
                <br>
                <label>
                    <input type="radio" name="my_radios_hide" value="false" <?php checked( get_option('my_radios_hide'), 'false' ); ?>><?php echo esc_html__( 'Não', 'dwp_gdpr' ); ?>
                </label>
            </fieldset>
        <?php
    }
}

/**************************************
 * Position
 **************************************/
if ( !function_exists( 'my_radios_callback_position' ) ) {
    function my_radios_callback_position(){
        ?>
            <fieldset>
                <label>
                    <input type="radio" name="my_radios_position" value="dwp_gdpr-tema-front" <?php checked( get_option('my_radios_position'), 'dwp_gdpr-tema-front' ); ?>><?php echo esc_html__( 'Topo', 'dwp_gdpr' ); ?>
                </label>
                <br>
                <label>
                    <input type="radio" name="my_radios_position" value="dwp_gdpr-tema-front-fundo" <?php checked( get_option('my_radios_position'), 'dwp_gdpr-tema-front-fundo' ); ?>><?php echo esc_html__( 'Fundo', 'dwp_gdpr' ); ?>
                </label>
            </fieldset>
        <?php
    }
}

/**************************************
 * Tema
 **************************************/
if ( !function_exists( 'my_radios_callback_tema' ) ) {
    function my_radios_callback_tema(){
        ?>
            <fieldset id="id_radio">
                <label>
                    <input type="radio" name="my_input_tema" value="dwp_gdpr_ocean" <?php checked( get_option('my_input_tema'), 'dwp_gdpr_ocean' ); ?>><?php echo esc_html__( 'Ocean', 'dwp_gdpr' ); ?>
                </label>
                <label>
                    <input type="radio" name="my_input_tema" value="dwp_gdpr_light" <?php checked( get_option('my_input_tema'), 'dwp_gdpr_light' ); ?>><?php echo esc_html__( 'Light', 'dwp_gdpr' ); ?>
                </label>
                <label>
                    <input type="radio" name="my_input_tema" value="dwp_gdpr_forest" <?php checked( get_option('my_input_tema'), 'dwp_gdpr_forest' ); ?>><?php echo esc_html__( 'Forest', 'dwp_gdpr' ); ?>
                </label>
            </fieldset>

        <?php
    }
}

/**************************************
 * Button
 **************************************/
if ( !function_exists( 'my_button_callback' ) ) {
    function my_button_callback(){
        ?>
            <fieldset>
                <label>
                   <input name="my_input_button" type="text" id="my_text_id" value="<?php echo esc_attr( get_option('my_input_button') ); ?>">
                </label>
            </fieldset>

        <?php
    }
}

/**************************************
 * Mensagem
 **************************************/
if ( !function_exists( 'my_text_callback_mensagem' ) ) {
    function my_text_callback_mensagem(){
        ?>
            <fieldset>
                <label>
                    <?php 
                        wp_editor(
                            get_option('my_input_mensagem'), 
                            $id = 'my_input_mensagem', 
                            array(
                              'media_buttons' => false,
                              'textarea_rows' => 6,
                              'tabindex' => 4
                            )
                        ) 
                    ?>
                </label>
            </fieldset>

        <?php
    }
}