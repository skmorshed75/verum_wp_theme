<?php
define( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', 'simpleshop_customizer_settings' );
define( 'SIMPLESHOP_CUSTOMIZER_PANEL_ID', 'simpleshop_customizer_panel' );

if ( class_exists( 'Kirki' ) ) {
    Kirki::add_config( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );

    //ADD A PANEL
    Kirki::add_panel( 'SIMPLESHOP_CUSTOMIZER_PANEL_ID', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Simple Shop', 'simpleshop' ),
        'description' => esc_html__( 'Simple Shop Settings', 'simpleshop' ),
    ) );

    //ADD A SECTION
    Kirki::add_section( 'simpleshop_homepage', array(
        'title'           => esc_html__( 'Homepage Settings', 'simpleshop' ),
        'panel'           => 'SIMPLESHOP_CUSTOMIZER_PANEL_ID',
        'priority'        => 160,
        'active_callback' => function () {
            return is_page_template( 'page-templates/homepage.php' );
        },
    ) );

    //ADD A SWITCH CONTROL FOR PRODUCT CATEGORY 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'switch',
        'settings' => 'simpleshop_homepage_display_categories',
        'label'    => esc_html__( 'Display Categories Section', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'            => 'text',
        'settings'        => 'simpleshop_homepage_categories_title',
        'label'           => esc_html__( 'Shop Category Title', 'simpleshop' ),
        'section'         => 'simpleshop_homepage',
        'default'         => esc_html__( 'Shop By Category', 'simpleshop' ),
        'priority'        => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_categories',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ] );

    //ADD A SWITCH CONTROL FOR NEW ARRIVAL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'switch',
        'settings' => 'simpleshop_homepage_display_product',
        'label'    => esc_html__( 'Display New Arrival Section', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_product_title',
        'label'    => esc_html__( 'Homepage Product Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_product',
                'operator' => '==',
                'value' => true
            ]
        ]
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_product_content',
        'label'    => esc_html__( 'Homepage Product Sub-Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( '37 New fashion products arrived recently in our showroom for this winter', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_product',
                'operator' => '==',
                'value' => true
            ]
        ]
    ] );


    //ADD A SWITCH CONTROL FOR PROMO SECTION 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'switch',
        'settings' => 'simpleshop_homepage_display_promo',
        'label'    => esc_html__( 'Display Promo Section', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_promo_title',
        'label'    => esc_html__( 'Homepage Promo Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Sale', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_promo',
                'operator' => '==',
                'value' => true
            ]
        ]
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_promo_sub_title',
        'label'    => esc_html__( 'Homepage Promo Sub Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Up to 50% off', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_promo',
                'operator' => '==',
                'value' => true
            ]
        ]        
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_promo_content',
        'label'    => esc_html__( 'Homepage Promo Content', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'in store and online', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_promo',
                'operator' => '==',
                'value' => true
            ]
        ]        
    ] );

    //ADD A SWITCH CONTROL FOR POPULAR PRODUCT SECTION 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'switch',
        'settings' => 'simpleshop_homepage_display_popular_product',
        'label'    => esc_html__( 'Display Popular Product Section', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_popular_product_title',
        'label'    => esc_html__( 'Homepage Popular Product Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Popular Product', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_popular_product',
                'operator' => '==',
                'value' => true
            ]
        ]        
    ] );

    //ADD A SWITCH CONTROL FOR OFFER SECTION 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'switch',
        'settings' => 'simpleshop_homepage_display_offer',
        'label'    => esc_html__( 'Display Offer Section', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    //ADD A SWITCH CONTROL FOR FLICKR SECTION 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'switch',
        'settings' => 'simpleshop_homepage_display_flickr_section',
        'label'    => esc_html__( 'Display Flickr Section', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    //ADD FIELD / CONTROL 33.8
    Kirki::add_field( 'SIMPLESHOP_CUSTOMIZER_CONFIG_ID', [
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_flickr_title',
        'label'    => esc_html__( 'Homepage Flickr Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Simple Shop on Flickr', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_homepage_display_flickr_section',
                'operator' => '==',
                'value' => true
            ]
        ]         
    ] );

}
