<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marvel_creative_WordPress_theme
 */

?>
<div class="<?php if ( is_home()) : ?>col-md-3<?php else : ?>single-post-page<?php endif; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
		<div class="single-blog wow bounceInLeft">
			<div class="single-blog-img">
                <?php marvel_creative_post_thumbnail('full'); ?>
                <div class="blog-post-date">
                	<?php					
						if ( 'post' === get_post_type() ) :
					?>
                    <?php marvel_creative_posted_on(); ?>
                </div>
            </div>
            <div class="single-blog-cntn">
                <div class="blog-title">
                    <?php 
                    	if ( is_singular() ) :
							the_title( '<h3 class="entry-title">', '</h3>' );
						else :
							the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
						endif;
                    ?>
                </div>
                <div class="blog-tag">
                    <ul>
                        <li><?php marvel_creative_posted_by();?></li>
                        <li><?php marvel_creative_entry_footer();?></li>                        
                    </ul>
                	<?php endif; ?>
                </div>
                <div class="blog-detail">
                    <?php
							if (is_single()) { //New add for read more button
							
							the_content(sprintf(wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'marvel_creative'), array(
							'span' => array(
							'class' => array()
							)
							)), get_the_title()));
							} else {
							the_excerpt(); //Blog page add
							echo '<div class="read-more">
											<a href="' . esc_url(get_permalink()) . '">Read More</a>
														
									</div>';
							} //End if condition
							wp_link_pages(array(
							'1' => '<div class="page-links">' . esc_html__('Pages:', 'marvel_creative'),
							'2' => '</div>'
							));
							
						?>
                </div>
            </div>				
		</div>
		<footer class="entry-footer">
			<?php //marvel_creative_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>

