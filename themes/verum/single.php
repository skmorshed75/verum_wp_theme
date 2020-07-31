    <?php
    get_header('single'); //header-single - header will automatically fix
    the_post();
    
    $verum_sidebar_position = get_theme_mod('sidebar_display_setting','no');
    $verum_container_class='no' == $verum_sidebar_position?'col-md-12':'col-lg-9 col-md-8';
    $verum_sidebar_border = 'left' == $verum_sidebar_position?'side-border':'';
    ?>
    <!--post start-->
    <div class="container">
        <div class="row">
            <?php
            //for left sidebar
            if('left'==$verum_sidebar_position){
                get_sidebar();
            }
            ?>
            <div class="<?php echo esc_attr($verum_container_class); ?><?php echo esc_attr($verum_sidebar_border) ; ?>">
                <div class="col-md-12">
                    <article class="post">
                        <?php get_template_part('templates/post/single-post/title','meta'); ?>
                    
                        <div class="post-blog first-letter-cap">
                            <p>She has previously sung about her love for New York, and it looks like one North African nation is also inspiring poetry...</p>
                        </div>
                    </article>

                    
                </div>
                   
                <div class="row post-grid">
                            <?php the_content(); ?>
                </div>

                <!-- tags and share start-->
                <div class="meta-row">
                    <div class="meta-tags">
                        <?php 
                        the_tags('<span>Tags :</span>',''); 
                        ?>
                    </div>
                    <div class="meta-share">
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="share-btn"><i class="fa fa-share-alt pr-2"></i> Share</div>
                    </div>
                </div>
                <!-- tags and share end-->

                                <!--custom pagination-->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="custom-pagination custom-pagination-post">
                                            <div class="older">
                                                <!-- <a href="#">
                                                <span class="next-post-pagination">
                                                    Haifaa Al Mansour Brings a New Tale Set in Saudi to Venice
                                                </span>
                                                    <i class="float-right fa fa-angle-right"></i>
                                                </a> -->
                                                <?php
                                                previous_post_link('%link','<span class="next-post-pagination">%title</span><i class="float-right fa fa-angle-right"></i>');
                                                ?>
                                            </div>
                                            <div class="newer">
                                                <!-- <a href="#">
                                                    <i class="fa fa-angle-left"></i>
                                                    <span class="prev-post-pagination">
                                                    Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt
                                                </span>
                                                </a> -->
                                                <?php
                                                next_post_link('%link','<i class="fa fa-angle-left"></i><span class="prev-post-pagination">%title</span>');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--custom pagination-->

                                <!--author info start-->
                                <div class="post-author-info">
                                    <div class="author-thumb">
                                        <!-- <img class="img-fluid" src="assets/img/author.jpg" alt=""/> -->
                                        <?php echo get_avatar(get_the_author_meta('ID')); ?>
                                    </div>
                                    <div class="author-details mt-3">
                                        <h5><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><?php the_author(); ?></a></h5>
                                        <!-- <p>Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Sed do. Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur adipisicing elit at leo dignissim congue.</p> -->
                                        <?php // the_author_meta('description'); ?>
                                        <?php echo apply_filters('the_content',get_the_author_meta('description')); ?>
                                        <?php 
                                        $verum_user_cm = wp_get_user_contact_methods();
                                        ?>
                                        <div class="s-links">
                                            <?php
                                            foreach($verum_user_cm as $verum_ucm_key => $verum_ucm_value) :
                                                $verum_cm_link = get_user_meta(get_the_author_meta('ID'),$verum_ucm_key,true);
                                                if ($verum_cm_link) :
                                                    ?>
                                                    <a href="<?php echo esc_url($verum_cm_link) ; ?>"><i class="fa fa-<?php echo esc_attr($verum_ucm_key); ?>"></i></a>
                                                    <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <!--author info end-->
                         
                            </div>                            
                        </article>
                        <?php
                        //for right sidebar
                        if('right'==$verum_sidebar_position){
                            get_sidebar();
                        }
                    ?>
                      <?php get_template_part('templates/single-post/related','posts'); ?>                                                 
                      
                       <?php comments_template(); ?>
                    </div>
                </div>
            </div>
        
        
        </div>
        
    </div>
    <!--post end-->
<?php
get_footer();
?>