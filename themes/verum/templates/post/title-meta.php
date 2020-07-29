<div class="post-header">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-meta">
        <?php 
        $verum_categories = get_the_category();
        if($verum_categories) :
            echo '<ul class="cat">';
            foreach($verum_categories as $verum_category) : 
                printf('<li><a href="%s">%s</a></li>',get_category_link($verum_category),$verum_category->name);
            endforeach;
            ?>
            <?php 
            echo '</ul>';
            ?>
            <div class="separation"></div>
        <?php
        endif;
        ?>
        <div class="post-date"><?php echo get_the_date('d F Y'); ?><?php _e(' By','verum');?> <?php the_author_posts_link(); ?></div>
    </div>
</div>