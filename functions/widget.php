<?php

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Right Sidebar',
		'id'   => 'sidebar-right',
		'description'   => 'Right Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Left Sidebar',
		'id'   => 'sidebar-left',
		'description'   => 'Left Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Blog Sidebar',
		'id'   => 'sidebar-blog',
		'description'   => 'Blog Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}
