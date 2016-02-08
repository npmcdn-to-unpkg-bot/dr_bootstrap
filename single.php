<?php
// Get the post object
$post = get_post(get_the_ID());

// Load template based on post type
if ($post->post_type === 'post') {
	load_template(get_template_directory() . '/blog.php');
} else {
	// var_dump(get_the_title());
	// exit;
	// Get newsroom page
	// $post = get_page_by_title('Newsroom');

	// Get sidebar options
	// $post->detail_id = $newsroom_page->ID;

	load_template(get_template_directory() . '/templates/template-b.php');
}