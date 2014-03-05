<?php

class Theme {

	/* Default Theme functions */

	static function post_tag($p) {
		echo '<a href="' . get_permalink($p->ID) . '">' . $p->post_title . '</a>';
	}

	static function featured_image_array($p) {
		return wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'single-post-thumbnail');
	}

	static function featured_image_url($p) {
		$image = Theme::featured_image_array($p);
		return $image[0];
	}

	static function featured_image_tag($p) {
		$image = Theme::featured_image_array($p);
		if($image[0]) {
			echo '<img src="' . $image[0] . '" alt="' . $p->post_title . '">';
		}
	}

	static function slug($p) {
		return sanitize_title($p->post_title);
	}

	/*
	 * $post_type = the post type of the object you are searching for
	 * $key = the name of the field in the advanced custom fields UI
	 * $parent_id = the ID of the parent you are searching associated objects for
	 */
	static function linked_posts($post_type, $key, $parent_id) {
		return get_posts(array(
		'post_type' => $post_type,
		'meta_query' => array(
			array(
				'key' => $key,
				'value' => '"' . $parent_id . '"',
				'compare' => 'LIKE'
			)
		)
		));
	}

}
