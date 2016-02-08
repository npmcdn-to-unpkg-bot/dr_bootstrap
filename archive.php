<?php
// Blog archive
if (get_post_type() === 'post' || is_author()) {
	load_template(get_template_directory() . '/blog.php');
}
