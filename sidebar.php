<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marvel_creative_WordPress_theme
 */

if ( ! is_active_sidebar( 'blog_sidebar' ) ) {
	return;
}
?>
<div class="col-md-4">	
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'blog_sidebar' ); ?>
	</aside><!-- #secondary -->	
</div>
