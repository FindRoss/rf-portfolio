<?php

add_action( 'init', function () {
	register_taxonomy( 'genre', [ 'book', 'movie' ], [
		'labels' => [
			'name'              => 'Genres',
			'singular_name'     => 'Genre',
			'search_items'      => 'Search Genres',
			'all_items'         => 'All Genres',
			'edit_item'         => 'Edit Genre',
			'update_item'       => 'Update Genre',
			'add_new_item'      => 'Add New Genre',
			'new_item_name'     => 'New Genre Name',
			'menu_name'         => 'Genres',
		],
		'hierarchical' => true,
		'public'       => true,
		'rewrite'      => [ 'slug' => 'genre' ],
		'show_in_rest' => true,
	] );
} );
