<?php
if ( class_exists( 'Kirki' ) ) {
    Kirki::add_config( 'verum_options', array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );

    //Class 4.20 Create Panel
    Kirki::add_panel( 'verum_panel', array(
        'priority' => 10,
        'title'    => esc_html__( 'Verum Options', 'verum' ),
    ) );

    //Create Section
    Kirki::add_section( 'blog_settings', array(
        'title'    => esc_html__( 'Blog Settings', 'verum' ),
        //'description'    => esc_html__( 'My section description.', 'kirki' ),
        'panel'    => 'verum_panel',
        'priority' => 160,
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
            'no'    => esc_html__( 'No Sidebar', 'verum' ),
            'left'  => esc_html__( 'Left Sidebar', 'verum' ),
            'right' => esc_html__( 'Right Sidebar', 'verum' ),
        ],
    ] );

    //Class 4.35
    Kirki::add_section( 'search_settings', array(
        'title'    => esc_html__( "Search Settings", "verum" ),
        'panel'    => 'verum_panel',
        'priority' => 160,
    ) );

    Kirki::add_field( 'verum_options', [
        'type'     => 'text',
        'settings' => 'search_heading',
        'label'    => esc_html__( 'Heading', 'verum' ),
        'section'  => 'search_settings',
        'default'  => 'Latest Posts',
        'priority' => 10,
    ] );

    Kirki::add_field( 'verum_options', [
        'type'     => 'select',
        'settings' => 'search_post_source',
        'label'    => esc_html__( 'Post Source', 'verum' ),
        'section'  => 'search_settings',
        'default'  => 'latest',
        'priority' => 10,
        'choices'  => [
            'latest'   => esc_html__( 'Latest Posts', 'verum' ),
            'featured' => esc_html__( 'Featured Posts', 'verum' ),
        ],
    ] );

    Kirki::add_field( 'verum_options', [
        'type'            => 'repeater',
        'label'           => esc_html__( 'Featured Post', 'kirki' ),
        'section'         => 'search_settings',
        'priority'        => 10,
        'row_label'       => [
            'type'  => 'field',
            'value' => esc_html__( 'Featured Post', 'kirki' ),
            'field' => 'post',
        ],
        'button_label'    => esc_html__( 'Add new ', 'kirki' ),
        'settings'        => 'search_featured_posts',

        'fields'          => [
            'post' => [
                'type'    => 'select',
                'label'   => esc_html__( 'Featured Post', 'kirki' ),
                'choices' => Kirki_helper::get_posts( array(
                    'posts_per_page' => -1,
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                ) ),
            ],
        ],
        'active_callback' => array(
            array(
                'setting'  => 'search_post_source',
                'value'    => 'featured',
                'operator' => '==',
            ),
        ),
    ] );

}