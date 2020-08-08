
<!--search overlay start-->
<?php
$verum_post_source = get_theme_mod("search_post_source","latest");
$verum_search_heading = get_theme_mod("search_heading",__("Latest Posts","verum"));

?>
<div class="search-wrap">
    <div class="overlay">

        <?php get_search_form(); ?>    

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-light search-blog-title">
                        <?php echo esc_html($verum_search_heading); ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="search-blog-post">
            <div class="container">
                <div class="row">
                    <?php
                    
                if("latest" == $verum_post_source) :
                    //LATEST POST
                    $verum_latest_posts_args = array(
                        'posts_per_page' => 4,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'ignore_sticky_post' => 1
                    );
                    $verum_latest_posts = new WP_Query($verum_latest_posts_args);

                    while($verum_latest_posts->have_posts()):
                        $verum_latest_posts->the_post();
                        ?>
                        <div class="col-md-3">
                            <article class="post">
                                <div class="post-img">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                                <div class="post-header">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="post-meta">
                                        <?php
                                        $verum_categories = get_the_category(); 
                                        if($verum_categories) :
                                            echo '<ul class="cat">';
                                            foreach($verum_categories as $verum_category) :
                                                printf('<li><a href="%s">%s</a></li>',get_category_link($verum_category),$verum_category->name);
                                                break; //show only one category
                                            endforeach;
                                            echo '</ul>';
                                            ?>
                                            <div class="separation"></div>
                                            <?php
                                        endif;
                                        ?>
                                        <div class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date("j F Y"); ?></a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                else :
                    //FEATURED POSTS
                    $_verum_featured_posts_id = get_theme_mod("search_featured_posts");
                    $verum_featured_posts_id = array_column($_verum_featured_posts_id,'post');
                    $verum_featured_posts_args = array(
                        // 'posts_per_page' => 4,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'ignore_sticky_post' => 1,
                        'post__in' => $verum_featured_posts_id,
                        'orderby' => 'post__in'
                    );
                    $verum_featured_posts = new WP_Query($verum_featured_posts_args);

                    while($verum_featured_posts->have_posts()):
                        $verum_featured_posts->the_post();
                        ?>
                        <div class="col-md-3">
                            <article class="post">
                                <div class="post-img">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                                <div class="post-header">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="post-meta">
                                        <?php
                                        $verum_categories = get_the_category(); 
                                        if($verum_categories) :
                                            echo '<ul class="cat">';
                                            foreach($verum_categories as $verum_category) :
                                                printf('<li><a href="%s">%s</a></li>',get_category_link($verum_category),$verum_category->name);
                                                break; //show only one category
                                            endforeach;
                                            echo '</ul>';
                                            ?>
                                            <div class="separation"></div>
                                            <?php
                                        endif;
                                        ?>
                                        <div class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date("j F Y"); ?></a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--search overlay end-->