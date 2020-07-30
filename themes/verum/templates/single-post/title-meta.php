<div class="post-header">
    <h2><a href="#">Alicia Keys is on the Picturesque Trip of a Lifetime in Egypt</a></h2>
    <div class="post-meta">
        <?php
        $verum_categories = get_the_category();
        if($verum_categories):
            echo'<ul class="cat">';
            foreach($verum_categories as $verum_category):
                printf('<li><a href="%s">%s</a></li>',get_category_link($verum_category), $verum_category->name);
            endforeach;
            echo '</ul';
            echo '<div class="separation"></div>';
        endif;
        ?>
        
        <div class="post-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date('i F Y') ; ?></a></div>
    </div>
    <h2><?php the_title(); ?></h2>
    <div class="post-meta">
        <div class="post-author">
            <?php _e('By Morshed','verum'); ?> 
            <a href="<?php the_author_posts_link(); ?>">Caterina Minthe</a></div>
    </div>
</div>