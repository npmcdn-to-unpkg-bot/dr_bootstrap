<?php

/**
 * Adds a shortcode to show an author link by nicename
 * 
 * @param  array $atts
 * @return string
 */
function author_archive_link_by_id_func($atts, $content = null) {
	extract( shortcode_atts( array(
		'author' => '',
	), $atts ) );

	// Return early if no author set
	if (empty($author) || is_null($content)) {
		return false;
	}

	// Get author
	$author_obj = get_user_by('slug', $author);
	if (!isset($author_obj->data)) {
		return false;
	}

	// Get author url
	$url = get_author_posts_url($author_obj->data->ID);

	// Return the link
	return vsprintf('<a href="%s">%s</a>', array($url, $content));
}
add_shortcode('author_archive', 'author_archive_link_by_id_func');