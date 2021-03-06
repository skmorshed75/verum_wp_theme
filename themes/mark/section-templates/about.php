<?php
//Class 2.15
global $mark_section;
$mark_section_meta = get_post_meta( $mark_section['section'], 'mark-section-about', true );

$mark_about_image_id = $mark_section_meta['about-bg'];
//print_r($mark_banner_image_id);
if ( $mark_about_image_id ) {
    $mark_about_image = wp_get_attachment_image_src( $mark_about_image_id, 'mark_fullsize' );
} else {
    $mark_about_image = array( get_template_directory_uri() . '/assets/img/parallax.jpg' );
}
?>
<!-- about / parallax section start -->
<section class=" parallax base-gradient light-txt" style="background-image: url('<?php echo $mark_about_image[0]; ?>');">
    <div class="container-full">
        <div class="row">
            <div class="col-md-6 text-center space-3 align-self-center">
                <h5 class="text-uppercase letter-space-2">
                    <?php echo esc_html( $mark_section_meta['sub-heading'] ); ?>
                </h5>
            </div>
            <div class="col-md-6 space-3 pl-5 dark-bg-opacity">
                <div class="row">
                    <div class="col-lg-8 col-11">
                        <h2 class="text-light mb-3">
                            <?php echo esc_html( $mark_section_meta['heading'] ); ?>
                        </h2>

                        <P>
                            <?php echo apply_filters( 'the_content', $mark_section_meta['description'] ); ?>
                        </P>
                        <?php
                        if ( '1' == $mark_section_meta['about-button-display'] ):
                        ?>
                        <a href="<?php echo esc_url( $mark_section_meta['button-one-url'] ); ?>" class="btn btn-primary-solid"><?php echo esc_html( $mark_section_meta['button-one-label'] ); ?></a>
                        <?php
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about / parallax section end -->