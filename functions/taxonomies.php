<?php

add_action('init', 'create_taxonomies');

function create_taxonomies() {

	register_taxonomy('events', '', 
		array(
			'labels' => array('name' => 'Event Category'),
			'hierarchical' => true
		)
	);

}
