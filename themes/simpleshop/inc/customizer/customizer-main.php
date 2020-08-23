<?php
define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('Kirki')){
    Kirki::add_config( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod', 
    ) );
 
    //ADD A PANEL
    Kirki::add_panel( 'SIMPLESHOP_CUSTOMIZER_PANEL_ID', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Simple Shop', 'simpleshop' ),
        'description' => esc_html__( 'Simple Shop Settings', 'simpleshop' ),        
    ) );

    //ADD A SECTION
    Kirki::add_section( 'simpleshop_homepage', array(
        'title'          => esc_html__( 'Homepage Settings', 'simpleshop' ),
        'panel'          => 'SIMPLESHOP_CUSTOMIZER_PANEL_ID',
        'priority'       => 160,
    ) );

    //ADD FIELD / CONTROL
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'text_setting',
        'label'    => esc_html__( 'Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'This is a default value', 'simpleshop' ),
        'priority' => 10,
    ] );
}
