<?php

add_action( 'init', function () {
	register_post_type( 'book', [
		'labels' => [
			'name'               => 'Books',
			'singular_name'      => 'Book',
			'add_new_item'       => 'Add New Book',
			'edit_item'          => 'Edit Book',
			'new_item'           => 'New Book',
			'view_item'          => 'View Book',
			'search_items'       => 'Search Books',
			'not_found'          => 'No books found',
			'not_found_in_trash' => 'No books found in trash',
		],
		'public'       => true,
		'has_archive'  => true,
		'rewrite'      => [ 'slug' => 'books' ],
		'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-book',
	] );
} );
