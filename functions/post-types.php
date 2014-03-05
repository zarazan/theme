<?php

add_action('init', 'create_post_types');

function create_post_types() {

	register_post_type('event', 
		array(
			'labels' => array(
				'name' => 'Events',
				'singular_name' => 'Event',
				'add_new' => 'New Event',
				'add_new_item' => 'Add New Event',
				'edit_item' => 'Edit Event',
				'all_items' => 'All Events'
			),
	  	'public' => true,
			'taxonomies' => array('post_tag', 'events'),
			'supports' =>	array('title', 'editor', 'thumbnail')
		)
	);

}
