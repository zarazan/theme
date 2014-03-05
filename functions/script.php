<?php

add_action('wp_enqueue_scripts', 'theme_script_enqueuer');

function theme_script_enqueuer() {

	wp_register_style('screen', get_stylesheet_directory_uri().'/stylesheets/screen.css', '', '', 'screen');
  wp_enqueue_style( 'screen' );

	wp_register_script('site', get_template_directory_uri().'/javascripts/site.js', array('jquery'));
	wp_enqueue_script('site');

	wp_localize_script('site', 'WP_ajax', array( 
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('myajax-post-comment-nonce'),
		)
	);

}	
