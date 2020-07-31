    <!--flickr photo start-->
    <div class="flickr">
        <?php 
        // Class 4.21
        if(is_active_sidebar('footer-top')){
            dynamic_sidebar('footer-top');

        }; 
        ?>
    </div>
    


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
                    <!-- <ul class="list-unstyled footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">All Post</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'list-unstyled footer-links',
                            'menu_id' => 'menu-footer'
                        )
                    );
                    ?>
                </div>

                <div class="col-md-4 order-md-first">
                    <?php 
                    if(is_active_sidebar('footer-left')){
                        dynamic_sidebar('footer-left');
                    }; 
                    ?>
                </div>

            </div>
        </div>
    </footer>
  
	<?php wp_footer(); ?>
</body>
</html>

