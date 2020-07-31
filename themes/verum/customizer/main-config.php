<?php
if(class_exists('Kirki')) {
    Kirki::add_config( 'verum_options', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    //Class 4.20 Create Panel
    Kirki::add_panel( 'verum_panel', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Verum Options', 'verum' ),
    ) );

    //Create Section
    Kirki::add_section( 'blog_settings', array(
        'title'          => esc_html__( 'Blog Settings', 'verum' ),
        //'description'    => esc_html__( 'My section description.', 'kirki' ),
        'panel'          => 'verum_panel',
        'priority'       => 160,
    ) );

    //Add a Control - SELECT
    Kirki::add_field( 'verum_options', [
        'type'        => 'select',
        'settings'    => 'sidebar_display_setting',
        'label'       => esc_html__( 'This is the label', 'verum' ),
        'section'     => 'blog_settings',
        'default'     => 'no',
        'placeholder' => esc_html__( 'Sidebar Position', 'verum' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'no' => esc_html__( 'No Sidebar', 'verum' ),
            'left' => esc_html__( 'Left Sidebar', 'verum' ),
            'right' => esc_html__( 'Right Sidebar', 'verum' ),
        ],
    ] );
}