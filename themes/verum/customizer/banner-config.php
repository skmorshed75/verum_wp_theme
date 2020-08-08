<?php
//Class 4.36

if(class_exists("Kirki")){
    //Create Section
    Kirki::add_section( 'banner_settings', array(
        'title'    => esc_html__( 'Banner Settings', 'verum' ),
        //'description'    => esc_html__( 'My section description.', 'kirki' ),
        'panel'    => 'verum_panel',
        'priority' => 160,
        'active_callback' => function(){
            return is_front_page();
        }
    ) );

    Kirki::add_field('verum_options',[
        'type' => 'switch',
        'settings' => 'banner_display',
        'label' => esc_html__("Display Banner","verum"),
        'section' => 'banner_settings',
        'priority' => 10,
        

    ]);

    Kirki::add_field( 'verum_options', [
        'type'        => 'select',
        'settings'    => 'banner_style',
        'label'       => esc_html__( 'Banner Style', 'verum' ),
        'section'     => 'banner_settings',
        'default'     => 'no',
        'placeholder' => esc_html__( 'Banner Style', 'verum' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '1'    => esc_html__( 'Banner Style 1', 'verum' ),
            '2'    => esc_html__( 'Banner Style 2', 'verum' ),
            '3'    => esc_html__( 'Banner Style 3', 'verum' ),
        ],
    ] );

    Kirki::add_field( 'verum_options', [
        'type'            => 'repeater',
        'label'           => esc_html__( 'Banner Posts', 'kirki' ),
        'section'         => 'banner_settings',
        'priority'        => 10,
        'row_label'       => [
            'type'  => 'field',
            'value' => esc_html__( 'Banner Posts', 'kirki' ),
            'field' => 'banner',
        ],
        'button_label'    => esc_html__( 'Add new ', 'kirki' ),
        'settings'        => 'banner_posts',

        'fields'          => [
            'banner' => [
                'type'    => 'select',
                'label'   => esc_html__( 'Banner Post', 'kirki' ),
                'choices' => Kirki_helper::get_posts( array(
                    'posts_per_page' => -1,
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                ) ),
            ],
        ],
    ] );
}