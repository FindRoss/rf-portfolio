<?php
// Minimal functions.php for a block theme.
// Block themes don't need much here — theme.json handles design,
// and templates handle layout. PHP is only needed for things
// the block editor can't express.

require_once get_template_directory() . '/inc/cpt-movies.php';
require_once get_template_directory() . '/inc/cpt-case-studies.php';
require_once get_template_directory() . '/inc/block-case-links.php';
require_once get_template_directory() . '/inc/block-case-built-with.php';
require_once get_template_directory() . '/inc/block-case-next.php';

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

	// Load utility classes for containers and spacing.
	wp_enqueue_style(
		'rf-portfolio-utilities',
		get_theme_file_uri( '/inc/css/utilities.css' ),
		[],
		wp_get_theme()->get( 'Version' )
	);

	// Load archive-movie specific styles.
	if ( is_post_type_archive( 'movie' ) ) {
		wp_enqueue_style(
			'rf-portfolio-archive-movie',
			get_theme_file_uri( '/inc/css/archive-movie.css' ),
			[],
			wp_get_theme()->get( 'Version' )
		);
	}

	if ( is_front_page() ) {
		wp_enqueue_style( 'rf-portfolio-skills', get_theme_file_uri( '/inc/css/skills.css' ), [], wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'rf-portfolio-work', get_theme_file_uri( '/inc/css/work.css' ), [], wp_get_theme()->get( 'Version' ) );
		wp_enqueue_style( 'rf-portfolio-about', get_theme_file_uri( '/inc/css/about.css' ), [], wp_get_theme()->get( 'Version' ) );
	}

	if ( is_singular( 'case_study' ) ) {
		wp_enqueue_style( 'rf-portfolio-case-study', get_theme_file_uri( '/inc/css/case-study.css' ), [], wp_get_theme()->get( 'Version' ) );
	}
} );

add_action( 'enqueue_block_editor_assets', function () {
	$file = '/assets/js/editor-blocks.js';
	wp_enqueue_script(
		'rf-portfolio-editor-blocks',
		get_theme_file_uri( $file ),
		[ 'wp-blocks', 'wp-element', 'wp-block-editor', 'wp-server-side-render' ],
		filemtime( get_theme_file_path( $file ) ),
		true
	);
} );

add_action( 'wp_head', function () {
	?>
		<link rel="icon" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/favicon.svg' ) ); ?>" type="image/svg+xml">
		<link rel="icon" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/rf-icon-32.png' ) ); ?>" sizes="32x32">
		<link rel="apple-touch-icon" href="<?php echo esc_url( get_theme_file_uri( '/assets/images/rf-icon-180.png' ) ); ?>">
	<?php
} );
