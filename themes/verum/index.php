<?php
    get_header();
    ?>
    <!--post start-->
    <div class="container">
        <div class="row">
            <div class="<?php blog_sidebar_check() ;?>">
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
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!--post end-->
    <?php get_footer(); ?>
