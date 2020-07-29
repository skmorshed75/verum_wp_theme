<?php
/**
 * verum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package verum
 */

define('VERSION',time());

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'verum_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function verum_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on verum, use a find and replace
		 * to change 'verum' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'verum', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_theme_support('post-formats', array("image","gallery","quote","audio","video","link"));

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'verum' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'verum_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_image_size('verum_poster',1400,9999);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
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
endif;
add_action( 'after_setup_theme', 'verum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function verum_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'verum_content_width', 640 );
}
add_action( 'after_setup_theme', 'verum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function verum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'verum' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Blog Sidebar.', 'verum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Left', 'verum' ),
			'id'            => 'header-left',
			'description'   => esc_html__( 'Header Left section.', 'verum' ),
			'before_widget' => '<div id="%1$s" class="%2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Top', 'verum' ),
			'id'            => 'footer-top',
			'description'   => esc_html__( 'Footer Top Section.', 'verum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Left', 'verum' ),
			'id'            => 'footer-left',
			'description'   => esc_html__( 'Footer Left Section.', 'verum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Right', 'verum' ),
			'id'            => 'footer-right',
			'description'   => esc_html__( 'Footer Right Section.', 'verum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'verum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function verum_scripts() {
	wp_enqueue_style( 'verum-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'verum-style', 'rtl', 'replace' );

	wp_enqueue_script( 'verum-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//4.2
	//Style
	wp_enqueue_style('verum-google-fonts','//fonts.googleapis.com/css?family=Lora:400,400i,700|Playfair+Display:700',null,1.0,'all');
	wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/vendor/bootstrap/css/bootstrap.min.css'),null,VERSION,'all');
	wp_enqueue_style('font-awesome-css',get_theme_file_uri('assets/vendor/font-awesome/css/font-awesome.min.css'),null,1.0,'all');
	wp_enqueue_style('slicknav-css',get_theme_file_uri('assets/vendor/slicknav/slicknav.css'),null,VERSION,'all');
	wp_enqueue_style('owl-carousel-css',get_theme_file_uri('assets/vendor/owl/assets/owl.carousel.min.css'),null,VERSION,'all');
	wp_enqueue_style('owl-theme-default-css',get_theme_file_uri('assets/vendor/owl/assets/owl.theme.default.min.css'), null,1.0,'all');
	wp_enqueue_style('magnific-popup-css',get_theme_file_uri('assets/vendor/magnific-popup/magnific-popup.css'),null,1.0,'all');
	wp_enqueue_style('animate-css',get_theme_file_uri('assets/vendor/animate.css'),null,VERSION,'all');
	wp_enqueue_style('justified-gallery-css',get_theme_file_uri('assets/vendor/justifiedGallery/css/justifiedGallery.min.css'),null,1.0,'all');
	wp_enqueue_style('verum-main-css',get_theme_file_uri('assets/css/main.css'),null,VERSION,'all');
	// wp_enqueue_style('verum-style-css',get_stylesheet_uri());

	//JS
	wp_enqueue_script('popper-js',get_theme_file_uri('assets/vendor/popper.min.js'),array('jquery'),VERSION,true);
	wp_enqueue_script('bootstrap-js',get_theme_file_uri('assets/vendor/bootstrap/js/bootstrap.min.js'),null,VERSION,true);
	wp_enqueue_script('imageloaded-js',get_theme_file_uri('assets/vendor/imagesloaded.js'),null,VERSION,true);
	wp_enqueue_script('slicknav-js',get_theme_file_uri('assets/vendor/slicknav/jquery.slicknav.min.js'),array('jquery'),1.0,true);
	wp_enqueue_script('owl-js',get_theme_file_uri('assets/vendor/owl/owl.carousel.min.js'),null,VERSION,true);
	wp_enqueue_script('owl2-js',get_theme_file_uri('assets/vendor/owl/owl.carousel2.thumbs.min.js'),null,VERSION,true);
	wp_enqueue_script('magnific-popup-js',get_theme_file_uri('assets/vendor/magnific-popup/jquery.magnific-popup.min.js'),null,1.0,true);
	wp_enqueue_script('justified-gallery-js',get_theme_file_uri('assets/vendor/justifiedGallery/js/jquery.justifiedGallery.min.js'),null,1.0,true);

	wp_enqueue_script('veram-script-js',get_theme_file_uri('assets/js/scripts.js'),null,1.0,true);

}
add_action( 'wp_enqueue_scripts', 'verum_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function blog_sidebar_check() {
	if(is_active_sidebar('blog-sidebar')){
		echo 'col-lg-9 col-md-8 side-border';
	} else {
		echo 'col-lg-12 col-md-12';
	}
}

function verum_piklist_part_process($part) {
	global $post;
	if($post && 'post' == $post->post_type && 'audio-video.php' == $part['part']) {
		if(in_array(get_post_format(),array('audio','video'))) {
			return $part;
		}
	}
	if($post && 'post' == $post->post_type && 'gallery.php' == $part['part']){
		if(in_array(get_post_format(),array('gallery'))) {
			return $part;
		}
	}
	return false;
}
add_filter('piklist_part_process','verum_piklist_part_process');

add_filter('wp_calculate_image_srcset','__return_false');

//REMOVE WIDTH / HEIGHT OF IMAGE SRC
function verum_remove_thumbnail_dimensions($html) {
	$html = preg_replace('/(width|height)=\"\d*\"\s/',"",$html);
	return $html;
}
add_filter('post_thumbnail_html','verum_remove_thumbnail_dimensions');

//Class 4.13
function verum_user_contactmethods($cm) {
	$cm['facebook'] = __('Facebook','verum');
	$cm['twitter'] = __('Twitter','verum');
	$cm['pinterest'] = __('Pinterest','verum');
	$cm['google-plus'] = __('Google Plus');
	return $cm;
}
add_filter('user_contactmethods','verum_user_contactmethods');