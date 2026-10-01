<?php

add_action( 'init', function () {
	register_post_type( 'case_study', [
		'labels' => [
			'name'               => 'Case Studies',
			'singular_name'      => 'Case Study',
			'add_new_item'       => 'Add New Case Study',
			'edit_item'          => 'Edit Case Study',
			'new_item'           => 'New Case Study',
			'view_item'          => 'View Case Study',
			'search_items'       => 'Search Case Studies',
			'not_found'          => 'No case studies found',
			'not_found_in_trash' => 'No case studies found in trash',
		],
		'public'       => true,
		'has_archive'  => true,
		'rewrite'      => [ 'slug' => 'case-studies' ],
		'supports'     => [ 'title', 'editor', 'excerpt', 'thumbnail' ],
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-portfolio',
	] );
} );
