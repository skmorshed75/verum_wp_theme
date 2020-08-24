<?php
//Class 33.8
if(get_theme_mod('simpleshop_homepage_display_categories',true)) :
?>

    <!--shop category start-->
    <section class="space-3">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"> <?php echo get_theme_mod('simpleshop_homepage_categories_title',__('Shop By Category','simpleshop')); ?></h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php echo do_shortcode("[product_categories column=3]"); ?>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->
<?php
endif;
?>