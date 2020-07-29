    <!--flickr photo start-->
    <div class="flickr-photo-section">
        <div class="flickr-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flickr.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/flickr@2x.jpg 2x" alt=""/>
        </div>
        <div class="flickr_gallery owl-carousel owl-theme">
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f1.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f2.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f3.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f4.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f5.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f6.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f1.jpg" alt=""/></a>
            </div>
            <div class="item">
                <a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/f2.jpg" alt=""/></a>
            </div>
        </div>
    </div>
    <!--flickr photo end-->


    <!--footer start-->
    <footer class="footer-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-4">
                    <div class="logo text-center">
                        <h1>
                            <a href="<?php echo home_url('/'); ?>">
                                <?php the_custom_logo(); ?>
                            </a>
                        </h1>
                    </div>
                </div>


                <div class="col-md-4">
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">All Post</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-4 order-md-first">
                    © Verum 2018  |  All right Reserved
                </div>

            </div>
        </div>
    </footer>
  
	<?php wp_footer(); ?>
</body>
</html>

