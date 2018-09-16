<?php
/**
 * Marvel creative WordPress theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Marvel_creative_WordPress_theme
 */

if ( ! function_exists( 'marvel_creative_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function marvel_creative_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Marvel creative WordPress theme, use a find and replace
		 * to change 'marvel-creative' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'marvel-creative', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			//'header-menu' => esc_html__( 'Single Page Menu', 'marvel' ),
			'main_menu' => esc_html__( 'Multiversion Menu', 'marvel' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'marvel_creative_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
		) );
	}
endif;
add_action( 'after_setup_theme', 'marvel_creative_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marvel_creative_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'marvel_creative_content_width', 640 );
}
add_action( 'after_setup_theme', 'marvel_creative_content_width', 0 );

//Blog page pagination
if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( '&laquo;', 'finance' ),
    'next_text' => __( '&raquo;', 'finance' ),
) );
   }
endif;

//Comment area feild change
function consult_wpb_move_comment_field_to_bottom( $fields ) {	
	$comment_field = $fields['comment'];
		unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
		return $fields;
	}
add_filter( 'comment_form_fields', 'consult_wpb_move_comment_field_to_bottom' );


/**
 * Custom template tags for this theme.
 */
include_once get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
include_once get_template_directory() . '/inc/template-functions.php';

/**
 * Implement the Custom Widget feature.
 */
include_once (get_template_directory() . '/inc/custom-widgets.php');

/**
 * Implement All CSS and JS.
 */
include_once (get_template_directory() . '/inc/enqueue.php');

/**
 * Implement Dropdown Menu.
 */
include_once (get_template_directory().'/inc/navwalker.php');

/**
 * Implement Dropdown Menu.
 */
include_once (get_template_directory().'/inc/breadcrumb.php');

/**
 * Themeoptions and metabox functions.
 */
include_once (get_template_directory().'/inc/theme-metabox-and-options.php');

