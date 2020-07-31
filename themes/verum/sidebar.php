<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verum
 */


if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
 
$verum_sidebar_position = get_theme_mod('sidebar_display_setting','no');
$verum_sidebar_border = 'left' == $verum_sidebar_position?'side-border':'';
?>

<div class="col-lg-3 col-md-4 <?php echo esc_attr($verum_sidebar_border); ?>">
	<?php
	dynamic_sidebar('blog-sidebar');
	?>
</div>
