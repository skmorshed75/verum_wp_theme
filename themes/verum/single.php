    <?php
    get_header('single'); //header-single - header will automatically fix
    the_post();
    ?>
    <!--post start-->
    <div class="container">
        <div class="row">
            <div class="<?php blog_sidebar_check(); ?>">

                <div class="row">
                    <div class="col-md-12">
                        <article class="post">
                            <?php get_template_part('templates/post/single-post/title','meta'); ?>
                        
                            <div class="post-blog first-letter-cap">
                                <p>She has previously sung about her love for New York, and it looks like one North African nation is also inspiring poetry...</p>
                            </div>
                        </article>
                    </div>
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
                      <?php get_template_part('templates/single-post/related','posts'); ?>                                                 
                      
                       <?php comments_template(); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="widget">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Art</a> 12</li>
                        <li><a href="#">Food</a> 8</li>
                        <li><a href="#">Lifestyle</a> 10</li>
                        <li><a href="#">Movie</a> 6</li>
                        <li><a href="#">Music</a> 9</li>
                        <li><a href="#">Top</a> 13</li>
                        <li><a href="#">Travel</a> 5</li>
                    </ul>
                </div>
                <div class="widget">
                    <h2 class="widget-title">About</h2>
                    <img class="img-fluid mb-3" src="assets/img/ab-1.jpg" alt=""/>
                    <p class="pb-2"><em>She has previously sung about her love for New York, and it looks</em></p>
                    <img class="img-fluid" src="assets/img/signature.jpg" alt=""/>
                </div>
                <div class="widget">
                    <h2 class="widget-title">Latest Post</h2>
                    <div class="media">
                        <a href="#"><img class="mr-3" src="assets/img/w1.jpg" width="90" alt="Generic placeholder image"></a>
                        <div class="media-body align-self-center">
                            <h6 class="mt-0"><a href="#">Thoughtful living in los Angeles</a></h6>
                            <p class="text-muted">October 10, 2018</p>
                        </div>
                    </div>
                    <div class="media">
                        <a href="#"><img class="mr-3" src="assets/img/w2.jpg" width="90" alt="Generic placeholder image"></a>
                        <div class="media-body align-self-center">
                            <h6 class="mt-0"><a href="#">Plan your next trip with us</a></h6>
                            <p class="text-muted">October 10, 2018</p>
                        </div>
                    </div>
                    <div class="media">
                        <a href="#"><img class="mr-3" src="assets/img/w3.jpg" width="90" alt="Generic placeholder image"></a>
                        <div class="media-body align-self-center">
                            <h6 class="mt-0"><a href="#">Explore the Beauty of North Amazon</a></h6>
                            <p class="text-muted">October 10, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h2 class="widget-title mb-0">Subscribe</h2>
                    <p class="text-muted">Sign up and receive our newsletters</p>

                    <form action="">
                        <input type="text" class="form-control mb-3"/>
                        <button class="btn btn-default btn-block">Subscribe</button>
                    </form>
                </div>

                <div class="widget">
                    <h2 class="widget-title">Follow</h2>
                    <div class="widget-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

                <div class="widget">
                    <a href="#"><img class="img-fluid" src="assets/img/ads.jpg" alt=""/></a>
                </div>
                
            </div>
        </div>
    </div>
    <!--post end-->

    <!--flickr photo start-->
    <div class="flickr-photo-section">
        <div class="flickr-logo">
            <img src="assets/img/flickr.jpg" srcset="assets/img/flickr@2x.jpg 2x" alt=""/>
        </div>
        <div class="flickr_gallery owl-carousel owl-theme">
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f1.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f2.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f3.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f4.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f5.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f6.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f1.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="assets/img/f2.jpg" alt=""/></a>
            </div>
        </div>
    </div>
    <!--flickr photo end-->
<?php
get_footer();
?>