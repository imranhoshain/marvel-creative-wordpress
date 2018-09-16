<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marvel_creative_WordPress_theme
 */

get_header();
?>
<!--breadcrumb area start-->
    <div class="breadcrumb-area">
        <div style="background-image: url(<?php echo get_template_directory_uri() .'/assets/images/who.png'; ?>);" class="marvel-page-title-area section-padding">
            <div class="container">               
                <ul class="breadcrumb-link">
                   <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>
        </div>
    </div>
<!--breadcrumb area End-->

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="blog-area section-padding">		
			<div class="container">
				<div class="row text-center">
					<!-- Blog Full Width Option -->									
							<?php
								if ( have_posts() ) :
									if ( is_home() && ! is_front_page() ) :	?>				
									<?php endif;
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();
										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', get_post_type() );
									endwhile;
									post_pagination();
								else :
									get_template_part( 'template-parts/content', 'none' );
								endif;
							?>		
					
					<!-- Blog Full Width Option -->
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
