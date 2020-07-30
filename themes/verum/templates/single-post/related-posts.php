<!--related post start-->
<div class="row related-post">
<div class="col-12 text-center">
    <h2 class="post-single-title"><?php _e("You may also like","verum"); ?></h2>
</div>


<?php
$verum_tag_ids = array();
$verum_tags = wp_get_post_tags(get_the_ID());
if($verum_tags) {
    foreach($verum_tags as $verum_tags) {
        $verum_tag_ids[] = $verum_tag->term_id;
    }
}

$verum_arguments = array(
    'posts_per_page' => 3,
    'tag__in' => $verum_tag_ids,
    'post__not_in' => array(get_the_ID()),
    'caller_get_posts' => true
);

$verum_related_posts = new WP_Query($verum_arguments);
while($verum_related_posts->have_posts()) :
    $verum_related_posts->the_post();
    ?>
<div class="col-lg-4 col-md-6">
    <article class="post">
        <div class="post-img">
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium'); ?></a>
        </div>
        <div class="post-header">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="post-meta">
                <?php 
                $verum_categories = get_the_category(); 
                if($verum_categories):
                    echo '<ul class="cat">';
                    foreach($verum_categories as $verum_category) :
                        printf('<li><a href="%s">%s</a></li>',get_category_link($verum_category),$verum_category->name);
                        break;
                    endforeach;
                    echo '</ul>';
                ?>
                <div class="separation"></div>
                <?php
                endif;
                ?>
                
                <div class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date('jS F Y'); ?></a></div>
            </div>
        </div>

    </article>
</div>
    <?php
endwhile;
wp_reset_query();
?>