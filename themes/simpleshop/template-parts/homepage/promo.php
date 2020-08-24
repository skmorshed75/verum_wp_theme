<?php
if(get_theme_mod('simpleshop_homepage_display_promo', true)):
?>
    <!--promo section start-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-box space-3">
                        <div class="promo-img rounded bg-overlay" data-overlay="1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/sb.jpg);"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center text-center">
                                <div class="col-md-8">
                                    <!-- heading -->
                                    <h2 class="text-white mb-0 promo-title">
                                        <?php echo get_theme_mod('simpleshop_homepage_promo_title'); ?>
                                    </h2>
                                    <h3 class="text-white promo-sub-title mt-0">
                                        <?php echo get_theme_mod('simpleshop_homepage_promo_sub_title'); ?>
                                    </h3>

                                    <a href="#" class="promo-link">
                                        <?php echo get_theme_mod('simpleshop_homepage_promo_content'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->
<?php
endif;
?>