<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Enqueue scripts and styles.
 */
function mvp_scripts() {
	wp_enqueue_style( 'mvp-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mvp-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mvp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mvp_scripts' );

//Enable menu's
add_theme_support( 'menus' );

