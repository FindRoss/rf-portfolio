<?php
// Minimal functions.php for a block theme.
// Block themes don't need much here — theme.json handles design,
// and templates handle layout. PHP is only needed for things
// the block editor can't express.

require_once get_template_directory() . '/inc/cpt-books.php';
require_once get_template_directory() . '/inc/cpt-movies.php';

add_action( 'after_setup_theme', function () {
	// Enable default block styles (e.g. the "Outline" button style).
	add_theme_support( 'wp-block-styles' );
} );

add_action( 'wp_enqueue_scripts', function () {
	// Load style.css (required so WordPress can find the theme).
	wp_enqueue_style(
		'rf-portfolio-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
} );
