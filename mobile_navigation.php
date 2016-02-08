<?php
/**
 * Template Name: Navigation
 */
// Get Post Data
$original_query = $wp_query;
wp_reset_postdata();

// Get the navigation page id
$nav_page = get_field('navigation_page', 'option');

// Get query posts
query_posts(array(
    'p' => $nav_page->ID,
));

$post = $nav_page;

pw_filter_widgets(get_option('sidebars_widgets'));

// Get container content
$header = get_field('container_information', $post->detail_id);
?>
<!-- Mobile Navigation -->
<section id="main_mobile_navigation" class="show_on_mobile">
    <section class="mobile_container">
        <section class="search_area"><?php get_search_form(true); ?></section>
        <div class="clear"></div>
        <section class="menu_section">
            <header><?php echo $header[0]['title']; ?></header>
            <a href="<?php echo $header[0]['url']; ?>" class="cta menu_item"><?php echo $header[0]['call_to_action_link']; ?></a>
            <?php dynamic_sidebar_cache('super_nav_con_1_col_1'); ?>
            <?php dynamic_sidebar_cache('super_nav_con_1_col_2'); ?>
            <?php dynamic_sidebar_cache('super_nav_con_1_col_3'); ?>
        </section>

        <section class="menu_section">
            <header><?php echo $header[1]['title']; ?></header>
            <a href="<?php echo $header[1]['url']; ?>" class="cta menu_item"><?php echo $header[1]['call_to_action_link']; ?></a>
            <?php dynamic_sidebar_cache('super_nav_con_2_col_1'); ?>
            <?php dynamic_sidebar_cache('super_nav_con_2_col_2'); ?>
            <?php dynamic_sidebar_cache('super_nav_con_2_col_3'); ?>
        </section>

        <section class="menu_section">
            <header><?php echo $header[2]['title']; ?></header>
            <a href="<?php echo $header[2]['url']; ?>" class="cta menu_item"><?php echo $header[2]['call_to_action_link']; ?></a>
            <?php dynamic_sidebar_cache('super_nav_con_3_col_1'); ?>
            <?php dynamic_sidebar_cache('super_nav_con_3_col_2'); ?>
            <?php dynamic_sidebar_cache('super_nav_con_3_col_3'); ?>
        </section>

    </section>
</section>

<?php
$wp_query = $original_query;
wp_reset_postdata();
?>

<script>
    jQuery(function($) {
		$('.dropdown_arrow').click(function() {
			if ($(this).hasClass('expanded')) {
				$(this).removeClass('expanded');
			} else {
				$(this).addClass('expanded');
			}
		});
    });
</script>