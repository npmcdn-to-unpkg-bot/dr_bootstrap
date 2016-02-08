<?php
get_template_part('search', 'blog');
// Store current query and reset post data
$original_query = $wp_query;
wp_reset_postdata();

// Get blog sidebars
$blog = get_page_by_title('Digital River Blog');

// Get query posts
query_posts(array(
	'p' => $blog->ID,
));

$post = $blog;

pw_filter_widgets(get_option('sidebars_widgets'));

dynamic_sidebar('blog_right_sidebar');

// Reset to original query
$wp_query = $original_query;
wp_reset_postdata();
