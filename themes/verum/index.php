<?php
    get_header();
    //Class 4.20
    $verum_sidebar_position = get_theme_mod('sidebar_display_setting','no');
    $verum_overridden_sidebar_position = isset($_GET['sb']) ? $_GET['sb'] : $verum_sidebar_position;

    $verum_container_class='no' == $verum_overridden_sidebar_position?'col-md-12':'col-lg-9 col-md-8';
    $verum_sidebar_border = 'left' == $verum_overridden_sidebar_position?'side-border':'';
    ?>
    <!--post start-->
    <div class="container">
        <div class="row">
            <?php
            //for left sidebar
            if('left'==$verum_overridden_sidebar_position){
                get_sidebar();
            }
            ?>            
            <div class="<?php echo esc_attr($verum_container_class); ?><?php echo esc_attr($verum_sidebar_border) ; ?>">
                <div class="row post-grid">
                <?php
                while(have_posts()){
                    the_post();
                    get_template_part('templates/post/container');
                }
                ?>
            </div>

                <!--custom pagination-->
                <div class="row">
                    <div class="col-12">
                        <div class="custom-pagination">
                            <?php
                            $verum_ppl = get_previous_posts_link();
                            if(!$verum_ppl) :
                                ?>
                                <div class="older full">
                                    <?php next_posts_link(__('Older Posts >>','verum')); ?>
                                </div>
                            <?php
                            else :
                            ?>
                                <div class="older">
                                    <?php next_posts_link(__('Older Posts >>','verum')); ?>
                                </div>
                            <?php
                            endif;
                            ?>

                            <?php
                            $verum_npl = get_next_posts_link();
                            if(!$verum_npl) :
                                ?>
                                <div class="older full">
                                    <?php previous_posts_link(__('<< Newer Posts','verum')); ?>
                                </div>
                            <?php
                            else :
                            ?>
                                <div class="newer">
                                    <?php previous_posts_link(__('<< Newer Posts','verum')); ?>
                                </div>
                            <?php
                            endif;
                            ?>

                            <!--<div class="newer">-->
                                <!--<a href="#"> <i class="fa fa-angle-left"></i> Newer Posts</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <!--custom pagination-->
            </div>
            <?php
            //for right sidebar
            if('right'==$verum_overridden_sidebar_position){
                get_sidebar();
            }
            ?>

        </div>
    </div>
    <!--post end-->
    <?php get_footer(); ?>
