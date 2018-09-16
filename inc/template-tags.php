<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Marvel_creative_WordPress_theme
 */

if ( ! function_exists( 'marvel_creative_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function marvel_creative_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'marvel-creative' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<h4>' . $posted_on . '</h4>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'marvel_creative_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function marvel_creative_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'marvel-creative' ),
			'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
		);

		echo '<i aria-hidden="true" class="fa fa-user"></i>' . $byline . ''; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'marvel_creative_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function marvel_creative_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'marvel-creative' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<li class="cat-links"> <i class="fa fa-indent" aria-hidden="true"></i>' . esc_html__( '%1$s', 'marvel-creative' ) . '</li>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'marvel-creative' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<li class="tags-links"> <i class="fa fa-tags" aria-hidden="true"></i>' . esc_html__( '%1$s', 'marvel-creative' ) . '</li>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<li class="comments-link"> <i aria-hidden="true" class="fa fa-comments"></i>';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'No Comment <li class="screen-reader-text"> </li>', 'marvel-creative' ),
						array(
							'li' => array(
								'class' => array(),
							)
						)
					)
					
				)
			);
			echo '</li>';
		}
		
	}
endif;

if ( ! function_exists( 'marvel_creative_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function marvel_creative_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;
