<?php
/**
 * Template Name: Template C
 */
?>
<?php get_header(); ?>
  <!-- Content Container -->
  <section class="content_container clearfix">
    <section class="main_content pull_right">
      <nav class="breadcrumbs"><?php do_action('icl_navigation_breadcrumb'); ?></nav>
      <?php 
      if (have_posts()) :
        while (have_posts()) :
          the_title();
          the_post();
          the_content();
        endwhile;
      endif;
      ?>
      <?php dynamic_sidebar_cache('template_c_content'); ?>
    </div>

    <!-- Sidebar -->
    <section class="rail pull_left"><?php dynamic_sidebar_cache('template_c_left_sidebar'); ?></section>
  </section>
<?php get_footer(); ?>