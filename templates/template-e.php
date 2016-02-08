<?php
/**
 * Template Name: Template E
 */
?>
<?php get_header(); ?>
  <section class="rail pull_left"><?php dynamic_sidebar_cache('template_e_left_sidebar'); ?></section>
  <nav class="breadcrumb">Breadcrumbs</nav>
  <section class="hero"><?php dynamic_sidebar_cache('template_e_hero'); ?></section>
  <section class="small_content pull_left">
    Content
  </section>
   <section class="widget_rail pull_right"><?php dynamic_sidebar_cache('template_e_right_sidebar'); ?></section>
<?php get_footer(); ?>