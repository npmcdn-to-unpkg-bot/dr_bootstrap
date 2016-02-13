<?php
/**
 * Template Name: Template K
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

    <!-- Content Container -->
    <div id="template_k" class="blog content_container">
        <div class="left_border"></div>
        <!-- Content -->
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="span_3 col left_column">
                    <?php get_template_part('partials/blog/sidebar', 'left'); ?>
                </div>
                <!-- Middle Column -->
                <div class="col-md-6 col middle_column">
                    <?php dynamic_sidebar_cache('template_k_content'); ?>
                </div>
                <div class="span_3 col last right_column">
                    <?php get_template_part('partials/blog/sidebar', 'right'); ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>