<?php
$cat = get_category_by_slug(get_query_var('category_name'));

// Load the blog page
if ($cat->taxonomy == 'category') {
	load_template(get_template_directory() . '/blog.php');
}