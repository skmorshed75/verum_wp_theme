
<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">

        <?php get_search_form(); ?>    

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-light search-blog-title">
                        <?php _e("Latest Posts","verum"); ?>
                    </h4>
                </div>
            </div>
        </div>
        <div class="search-blog-post">
            <div class="container">
                <div class="row">
                    <?php
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
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--search overlay end-->