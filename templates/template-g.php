<?php
/**
 * Template Name: Template G
 */
?>
<?php get_header(); ?>
  <!-- Content -->
  <div class="content">
    <?php 
    if (have_posts()) :
      while (have_posts()) :
        the_title();
        the_post();
        the_content();
      endwhile;
    endif;
    ?>
  </div>
<?php get_footer(); ?>