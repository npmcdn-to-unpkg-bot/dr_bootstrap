<?php
/**
 * Template Name: Template D
 */
?>
<?php get_header(); ?>
  <!-- Breadcrumbs -->
  <nav class="breadcrumbs"><?php do_action('icl_navigation_breadcrumb'); ?></nav>
  <!-- Content -->
  <section class="content">
    <?php 
    if (have_posts()) :
      while (have_posts()) :
        the_title();
        the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </section>

  <!-- Widget -->
  <section class="widget_container"><?php dynamic_sidebar_cache('template_d_content'); ?></section>
<?php get_footer(); ?>