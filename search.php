<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
<div class="marvel-page-title section-padding">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 text-center">				
				<h2><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'marvel-creative' ), '<span>' . get_search_query() . '</span>' );
				?></h2>			
			</div>
		</div>
	</div>
</div>

<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="marvel-article-list">
							<?php if ( have_posts() ) : ?>
							<?php
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
							the_posts_navigation();
							else :
							get_template_part( 'template-parts/content', 'none' );
							endif;
							?>
						</div>
					</div>				
					<?php get_sidebar(); ?>				
				</div>
			</div>	
		</main><!-- #main -->
	</section><!-- #primary -->
<?php

get_footer();
