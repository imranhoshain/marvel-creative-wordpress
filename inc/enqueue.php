<?php
/**
 * Enqueue scripts and styles.
 */
function marvel_crative_scripts() {

	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'restaurant-fonts', restaurant_theme_fonts_url(), array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '2.0', 'all' );	
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), '3.6.0', 'all' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), '1.0.10', 'all' );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all' );	
	wp_enqueue_style( 'marvel-creative-style', get_stylesheet_uri() );
	

	wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/modernizr.min.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'poper-js', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
	wp_enqueue_script( 'isotop', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.5', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), '1.6.2', true );
	wp_enqueue_script( 'counter-up', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'easing', get_template_directory_uri().'/assets/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri().'/assets/js/jquery.sticky.js', array('jquery'), '1.0.4', true );
	wp_enqueue_script( 'magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );	
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), '1.3.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}    
    
}
add_action( 'wp_enqueue_scripts', 'marvel_crative_scripts' );
