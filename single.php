<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Marvel_creative_WordPress_theme
 */

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
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
<div id="primary" class="content-area blog-area sigle-blog blog-margin section-padding">
	<main id="main" class="site-main">
		<!-- blog content section start -->
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php						
							get_template_part( 'template-parts/content', get_post_type() );					
							the_post_navigation();
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;								
						?>
				</div>
								
					<?php get_sidebar(); ?>					
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php endwhile; ?> <!--End of the loop.--> 

<?php
get_footer();
