<?php
$post_type = get_post_type();
$secondary_masthead = get_field('secondary_masthead');

$cat = get_the_category( $post->orig_id ); 
$post_category = (isset($cat[0])) ? $cat[0]: '';
$criteria = (array)$post_category;
$cid = (isset($criteria['cat_ID'])) ? $criteria['cat_ID']: false;
$cat_parent = (isset($cat[0]->category_parent)) ? $cat[0]->category_parent: false;

// Get Blog ID
$blog_data = get_category_by_slug('blog');
$blog_id = $blog_data->cat_ID;
?>

<section class="masthead">

<div class="masthead_background">
    		<div class="container">

        
            <div class="col-md-10 col-md-offset-1">
				<nav class="breadcrumbs">
					<?php if (function_exists('bcn_display')) bcn_display(); ?>
				</nav>
                
				<?php if ($post_type == 'post' || is_page('our-authors') || (isset($is_blog) && $is_blog)): ?>
					<div>
				<?php else: ?>
					<h1>	
				<?php endif; ?>


				<?php
				if ($post_type == 'media_coverage') {
					_e('Media Coverage','digital-river');
				} else if ($post_type == 'post' || is_page('our-authors') || (isset($is_blog) && $is_blog)) {
					_e('Digital River Blog','digital-river');
				} else if($post_type == 'press_release') {
					_e('Newsroom','digital-river');
				} else if ($post_type == 'events') {
					_e('Events','digital-river');
				} else {
					echo get_the_title();
				}
				?>
				

				<?php if ($post_type == 'post' || is_page('our-authors') || (isset($is_blog) && $is_blog)): ?>
					</div>
				<?php else: ?>
					</h1>	
				<?php endif; ?>
				
				<div class="subtitle">
				<?php
				if ($post_type == 'media_coverage') {
					echo '';
				} else if ($post_type == 'post' || (isset($is_blog) && $is_blog)) {
					_e('Keep current with commerce, payments and marketing news, education and best practices.','digital-river');
				} else if($post_type == 'press_release') {
					_e('See what’s happening with Digital River. Read our company news, global editorial pieces and industry recognitions.','digital-river');
				} else if ($post_type == 'events') {
					_e('Join Digital River at one of our many industry events.','digital-river');
				} else {
					_e(get_field('subtitle'),'digital-river');
				}
				?>
				</div>
		
        </div>

    </div>
    </div>
</section>

