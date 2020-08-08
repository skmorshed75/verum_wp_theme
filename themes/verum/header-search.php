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
                    <div class="social-links ">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
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

    <!--search overlay start-->
    <div class="search-wrap">
        <div class="overlay">
            <form action="" class="search-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-9">
                            <input type="text" class="form-control" placeholder="Search..."/>
                        </div>
                        <div class="col-md-2 col-3 text-right">
                            <div class="search_toggle toggle-wrap d-inline-block">
                                <img class="search-close" src="<?php echo get_template_directory_uri(); ?>/assets/img/close.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/close@2x.png 2x" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-light search-blog-title">Latest Posts</h4>
                    </div>
                </div>
            </div>
            <div class="search-blog-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <article class="post">
                                <div class="post-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/b2.jpg" alt=""></a>
                                </div>
                                <div class="post-header">
                                    <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                    <div class="post-meta">
                                        <ul class="cat">
                                            <li><a href="#">Movie</a></li>
                                        </ul>
                                        <div class="separation"></div>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3">
                            <article class="post">
                                <div class="post-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/b3.jpg" alt=""></a>
                                </div>
                                <div class="post-header">
                                    <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                    <div class="post-meta">
                                        <ul class="cat">
                                            <li><a href="#">Movie</a></li>
                                        </ul>
                                        <div class="separation"></div>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3">
                            <article class="post">
                                <div class="post-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/b4.jpg" alt=""></a>
                                </div>
                                <div class="post-header">
                                    <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                    <div class="post-meta">
                                        <ul class="cat">
                                            <li><a href="#">Movie</a></li>
                                        </ul>
                                        <div class="separation"></div>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3">
                            <article class="post">
                                <div class="post-img">
                                    <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/b5.jpg" alt=""></a>
                                </div>
                                <div class="post-header">
                                    <h3><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h3>
                                    <div class="post-meta">
                                        <ul class="cat">
                                            <li><a href="#">Movie</a></li>
                                        </ul>
                                        <div class="separation"></div>
                                        <div class="post-date"><a href="#">28th June 2018</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--search overlay end-->

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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-heading">
                    <?php 
                    if(have_posts()) :
                    ?>
                        <h1>
                            <?php _e("Search Results for :","verum"); ?>
                            <?php echo get_search_query(); ?>
                        </h1>
                    <?php
                    else :
                    ?>
                        <h1>
                            <?php _e("No Search Results found for :","verum"); ?>
                            <?php echo get_search_query(); ?>
                        </h1>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>


   