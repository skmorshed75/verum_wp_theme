<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verum
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!--  preloader start -->
    <!-- <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div> -->
    <!-- preloader end -->

    <!--header start-->
    <header class="app-header">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <?php if(is_active_sidebar('header-left')){
                        dynamic_sidebar('header-left');
                    } ?>
                    <!-- <div class="social-links ">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div> -->
                    <div class="logo">
                        <h1>
                            <a href="<?php echo home_url('/');?>">
                                <?php the_custom_logo(); ?>
                            </a>
                        </h1>
                    </div>
                    <div class="search-row">
                        <div class="search_toggle">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon@2x.png 2x" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    <?php get_template_part("templates/search/overlay"); ?>

    <!--nav start-->
    <nav class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class' => 'menu',
                            'menu_id' => 'menu'
                        )
                    );
                    ?>
                    <!-- <ul id="menu" class="menu">
                        <li><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li ><a href="index.html">Home Demo 1</a></li>
                                <li ><a href="home2.html">Home Demo 2</a></li>
                                <li ><a href="home3.html">Home Demo 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Features</a>
                            <ul class="sub-menu">
                                <li ><a href="standard-fullwidth.html">Standard Fullwidth</a></li>
                                <li ><a href="standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                <li ><a href="standard-right-sidebar.html">Standard Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Post Format</a>
                            <ul class="sub-menu">
                                <li ><a href="format-image-post.html">Image Post</a></li>
                                <li ><a href="format-gallery-post.html">Gallery Post</a></li>
                                <li ><a href="format-gallery-post-alt.html">Gallery Post Alt</a></li>
                                <li ><a href="format-video-post.html">Video Post</a></li>
                                <li ><a href="format-audio-post.html">Audio Post</a></li>
                                <li ><a href="format-quote-post.html">Quote Post</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Post Details</a>
                            <ul class="sub-menu">
                                <li ><a href="blog-single-fullwidth.html">Standard Fullwidth</a></li>
                                <li ><a href="blog-single-left-sidebar.html">With Left Sidebar</a></li>
                                <li ><a href="blog-single-right-sidebar.html">With Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li ><a href="about.html">About</a></li>
                                <li ><a href="error-404.html">404 Error page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </nav>

    <!--responsive nav start-->
    <div class="mobile-menu">
        <div class="search_toggle toggle-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon@2x.png 2x" alt=""/>
        </div>
    </div><!--responsive nav end-->

    <!--nav end-->

    <!--hero start-->
    <div class="js_hero_slider owl-carousel owl-theme">
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-1.jpg" alt=""/>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <article class="post text-center">
                                    <div class="post-header">
                                        <ul class="cat">
                                            <li><a href="#">Travel</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                        </ul>
                                        <h2><a href="#">Picturesque Trip of a Lifetime in Egypt</a></h2>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                    <div class="post-blog">
                                        <p>She has previously sung about her love for New York, and it looks like one North African nation is also inspiring poetry in Alicia Keys...</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-2.jpg" alt=""/>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <article class="post text-center">
                                    <div class="post-header">
                                        <ul class="cat">
                                            <li><a href="#">Lifestyle</a></li>
                                        </ul>
                                        <h2><a href="#">Alicia Keys is on the Picturesque Trip ..</a></h2>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                    <div class="post-blog">
                                        <p>Previously sung about her love for New York, and it looks like one North African nation is also inspiring poetry in Alicia Keys...</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-3.jpg" alt=""/>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <article class="post text-center">
                                    <div class="post-header">
                                        <ul class="cat">
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Game</a></li>
                                        </ul>
                                        <h2><a href="#">Haifaa Al Mansour Brings a New Tale</a></h2>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                    <div class="post-blog">
                                        <p>She has previously sung about her love for New York, and it looks like one North African nation is also inspiring poetry in Alicia Keys...</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--hero end-->
