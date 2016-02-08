<?php
/**
 * Template Name: Template I
 */
?>
<?php get_header(); ?>
  <!-- Content Container -->
  <section class="content_container clearfix">
    <nav class="breadcrumbs"><?php do_action('icl_navigation_breadcrumb'); ?></nav>

    <!-- Widgets -->
    <div class="row">
      <section class="third_widget col pull_left"><?php dynamic_sidebar_cache('template_i_widget_1'); ?></section>
      <section class="third_widget col pull_left"><?php dynamic_sidebar_cache('template_i_widget_2'); ?></section>
      <section class="third_widget col pull_left"><?php dynamic_sidebar_cache('template_i_widget_3'); ?></section>
    </div>

    <!-- Content -->
    <section class="content clearfix">
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
  </section>
<?php get_footer(); ?>