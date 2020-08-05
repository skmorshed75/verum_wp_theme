<?php
/**
 * Template Name: About Page
 *
 */

//Class 4.31

get_header('single');
the_post();

$verum_about_image_id = get_post_meta(get_the_ID(), 'verum_about_image',true);
$verum_about_image = wp_get_attachment_image_src($verum_about_image_id,'large');

$verum_about_footer_image_id = get_post_meta(get_the_ID(),'verum_about_footer_image',true);
$verum_about_footer_image = wp_get_attachment_image_src($verum_about_footer_image_id,'large');

$verum_social_links = get_post_meta(get_the_ID(),'verum_about_social_links',true);
?>

<!--post start-->
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="row justify-content-md-center justify-content-center">
                <div class="col-md-10 col-10">
                    <div class="about-heading text-center">
                        <img class="img-fluid" src="<?php echo esc_url($verum_about_image[0]); ?>" alt="<?php the_title(); ?>"/>
                        <h2><?php the_title(); ?></h2>
                        <div class="designation"><?php echo esc_html(get_post_meta(get_the_ID(),'verum_about_designation',true)); ?></div>
                        <div class="short-title">
                            <?php echo wp_kses_post(get_post_meta(get_the_ID(),'verum_about_teaser', true)); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-info text-left">
                <?php the_content(); ?>
                <div class="text-center">
                    <img class="img-fluid" src="<?php echo esc_url($verum_about_footer_image[0]); ?>" alt=""/>
                </div>
                <div class="about-social-links text-center">
                    <?php if($verum_social_links['facebook']) : ?>
                        <a href="<?php echo esc_url($verum_social_links['facebook']); ?>"><i class="fa fa-facebook"></i></a>
                    <?php endif; ?>
                    <?php if($verum_social_links['twitter']) : ?>
                        <a href="<?php echo esc_url($verum_social_links['twitter']); ?>"><i class="fa fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if($verum_social_links['googleplus']) : ?>
                        <a href="<?php echo esc_url($verum_social_links['googleplus']); ?>"><i class="fa fa-google-plus"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--post end-->

<?php
get_footer();
?>

