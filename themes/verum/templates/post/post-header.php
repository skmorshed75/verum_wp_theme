<?php
if('audio' == get_post_format()) :
    $verum_media_source = get_post_meta(get_the_ID(),'verum_media_url',true );
    if($verum_media_source) :
        ?>
        <div class="post-audio">
            <iframe width="100%" height="100%" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo esc_url($verum_media_source,'verum'); ?>"></iframe>
        </div>
        <?php
    endif;
elseif('video' == get_post_format()) :
    $verum_media_source = get_post_meta(get_the_ID(),'verum_media_url',true);
    if($verum_media_source) :
        ?>
        <div class="post-img position-relative">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('verum_poster'); ?></a>
            <a href="<?php echo esc_url($verum_media_source,'verum') ; ?>" class="play-btn popup-youtube"><i class="fa fa-play"></i></a>
        </div>
        <?php
    endif;
elseif('gallery' == get_post_format()) :
    $verum_gallery = get_post_meta(get_the_ID(),'verum_gallery');
    $verum_gallery = array_filter($verum_gallery);
    $verum_gallery_type = get_post_meta(get_the_ID(),'verum_gallery_type',true);

    if($verum_gallery):
        if('carousel' == $verum_gallery_type) :
        echo '<div class="post-img">';
            echo '<div class="post_gallery owl-carousel owl-theme">';
                foreach($verum_gallery as $verum_gallery_image_id) :
                    $verum_gallery_image_source = wp_get_attachment_image_src($verum_gallery_image_id,'medium');
                    ?>            
                    <div class="item">
                        <a href="<?php the_permalink(); ?>">
                        <img class="img-fluid" 
                        src="<?php echo esc_url($verum_gallery_image_source[0]); ?>" alt="<?php the_title(); ?>"/></a>
                    </div>
                <?php
                endforeach;
            echo '</div>';
        echo '</div>';
        elseif('justified' == $verum_gallery_type) :
            echo '<div id="justified_gallery_sm" class="post-img popup-gallery">';
            foreach($verum_gallery as $verum_gallery_image_id) :
                $verum_gallery_image_source = wp_get_attachment_image_src($verum_gallery_image_id,'medium');
                $verum_gallery_image_source_large = wp_get_attachment_image_src($verum_gallery_image_id,'large');
                ?>
                <a title="Title 2" href="<?php echo esc_url($verum_gallery_image_source_large[0]); ?>">
                    <img alt="<?php the_title(); ?>" 
                    src="<?php echo esc_url($verum_gallery_image_source[0]); ?>"/>
                </a>
                <?php
            endforeach;
            echo '</div>';
        endif;
    endif;
elseif(has_post_thumbnail()):
?>
<div class="post-img">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('verum_poster');?>
    </a>
</div>
<?php
endif;
?>

