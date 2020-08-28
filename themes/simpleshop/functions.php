<?php

define('VERSION',time());

include_once('inc/customizer/kirki-installer.php');
include_once('inc/customizer/customizer-main.php');

function simpleshop_setup() {
    load_theme_textdomain( 'simpleshop', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
    add_theme_support('post-formats', array("image","gallery","quote","audio","video","link"));

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary', 'simpleshop' ),
        )
    );
    register_nav_menus(
        array(
            'footer-menu' => esc_html__( 'Footer Menu', 'simpleshop' ),
        )
    );

    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'caption'
    ) );

    add_theme_support(
        'custom-background',
        apply_filters(
            'simpleshop_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'simpleshop_setup' );

function simpleshop_add_editor_styles() {
    add_editor_style('custom-editor-style.css');
}
add_action('admin_init','simpleshop_add_editor_styles');


function simpleshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simpleshop_content_width', 1170 );
}
add_action( 'after_setup_theme', 'simpleshop_content_width', 0 );


function simpleshop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'simpleshop' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Blog Sidebar.', 'simpleshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'simpleshop_widgets_init' );


function simpleshop_assets() {
    //Google Fonts
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900',null,1.0,'all');
    //wp_enqueue_style('simpleshop-google-fonts','//fonts.googleapis.com/css?family=Lora:400,400i,700|Playfair+Display:700',null,1.0,'all');
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'),null,1.0,'all');
    //wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'),null,VERSION,'all');
    wp_enqueue_style('font-awesome-css',get_theme_file_uri('assets/vendor/font-awesome/css/font-awesome.min.css'),null,1.0,'all');
    wp_enqueue_style('bicon-css',get_theme_file_uri('assets/vendor/bicon/css/bicon.css'),null,1.0,'all');
    //wp_enqueue_style('woocommerce-prev-css',get_theme_file_uri('/assets/css/woocommerce-prev.css'),null,1.0,'all');
    wp_enqueue_style('woocommerce-layout-css',get_theme_file_uri('assets/css/woocommerce-layouts.css'),null, 1.0,'all');
    wp_enqueue_style('woocommerce-smallscreen-css', get_theme_file_uri('assets/css/woocommerce-small-screen.css'),null,1.0,'all');
    wp_enqueue_style('woocommerce-css',get_theme_file_uri('assets/css/woocommerce.css'),null,1.0,'all');
    wp_enqueue_style('main-css',get_theme_file_uri('assets/css/main.css'),null,VERSION,'all');
    wp_enqueue_style('simpleshop-style', get_stylesheet_uri(), array(), VERSION );
    //wp_enqueue_style('justified-gallery-css',get_theme_file_uri('assets/vendor/justifiedGallery/css/justifiedGallery.min.css'),null,1.0,'all');

    
	//JS
    wp_enqueue_script('popper-js',get_theme_file_uri('assets/vendor/popper.min.js'),array('jquery'),1.0,true);
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'),null,1.0,true);
	wp_enqueue_script('simpleshop-script-js',get_theme_file_uri('assets/js/scripts.js'),null,VERSION,true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'simpleshop_assets' );

//33.10
add_filter('woocommerce_subcategory_count_html','simpleshop_subcategory_count_html');
function simpleshop_subcategory_count_html($markup){
    if(get_theme_mod('simpleshop_homepage_categories_number') !='1') {
        return '';
    } else {
        return $markup;
    }   
}

//Class 33.12
add_filter('wp_calculate_image_sizes','__return_empty_array');
add_filter('wp_calculate_image_srcset','__return_empty_array');

remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
//remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_rating',5);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);
add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_add_to_cart',10);

//Change Add to Cart button text
function simpleshop_product_add_to_cart_text($text) {
    return '<i class="fa fa-shopping-basket"></i>';
}
add_filter('woocommerce_product_add_to_cart_text','simpleshop_product_add_to_cart_text');

//Add a DIV before the html
function simpleshop_before_shop_loop_item() {
    echo '<div class="product-wrap">';
}
add_action('woocommerce_before_shop_loop_item','simpleshop_before_shop_loop_item');

// Close the DIV before and Add another DIV
function simpleshop_before_shop_loop_item_title() {
    echo '</div><div class="woocommerce-product-title-wrap">';
}
add_action('woocommerce_before_shop_loop_item_title','simpleshop_before_shop_loop_item_title');

add_action('woocommerce_after_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',11);

add_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_price',10);

function simpleshop_after_shop_loop_item_title() {
    echo '<a href="#" class="wish-list"><i class="fa fa-heart-o"></i></a></div>';
}
add_action('woocommerce_after_shop_loop_item_title','simpleshop_after_shop_loop_item_title');