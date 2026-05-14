<?php

add_action( 'init', function () {
	register_post_type( 'movie', [
		'labels' => [
			'name'               => 'Movies',
			'singular_name'      => 'Movie',
			'add_new_item'       => 'Add New Movie',
			'edit_item'          => 'Edit Movie',
			'new_item'           => 'New Movie',
			'view_item'          => 'View Movie',
			'search_items'       => 'Search Movies',
			'not_found'          => 'No movies found',
			'not_found_in_trash' => 'No movies found in trash',
		],
		'public'       => true,
		'has_archive'  => true,
		'rewrite'      => [ 'slug' => 'movies' ],
		'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-video-alt2',
	] );

	register_post_meta( 'movie', 'director', [
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	] );

	register_post_meta( 'movie', 'year', [
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	] );

} );
