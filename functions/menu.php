<?php

function register_custom_menus() {
	register_nav_menu('global', __('Global Navigation'));
	register_nav_menu('main', __('Main Navigation'));
	register_nav_menu('footer', __('Footer Navigation'));
} 
add_action('init', 'register_custom_menus');
