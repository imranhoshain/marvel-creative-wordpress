<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marvel_creative_WordPress_theme
 */

get_header();
?>
<!--breadcrumb area start-->
<?php if ( ! is_front_page() ) : ?>    
    <div class="breadcrumb-area">
        <div style="background-image: url(<?php echo get_template_directory_uri() .'/assets/images/who.png'; ?>);" class="marvel-page-title-area section-padding">
            <div class="container">               
                <ul class="breadcrumb-link">
                   <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>    
<!--breadcrumb area End-->

<?php while ( have_posts() ) : the_post(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">							
				<?php
					get_template_part( 'template-parts/content', 'page' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;					
				?>					
			</div>			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php endwhile; // End of the loop.?>

<?php
get_footer();