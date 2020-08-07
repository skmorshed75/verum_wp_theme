<?php
/**
 * Template Name: Contact Page
 */
get_header('single');
the_post();
?>

<!--post start-->
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="contact-heading text-center">
                        <h2><?php the_title(); ?></h2>
                        <div class="subtitle"><?php echo esc_html(get_post_meta(get_the_ID(),'verum_contact_subheading',true)); ?></div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
<?php
$verum_contact_shortcode = get_post_meta(get_the_ID(),'verum_contact_shortcode',true);
echo do_shortcode($verum_contact_shortcode);
?>
        </div>
    </div>
</div>
<!--post end-->

<?php
get_footer();
?>