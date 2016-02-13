<?php
/**
 * Template Name: Template F
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

<div id="template_f" class="container">
    <section class="featured_content content_row">
          <div class="row">
        <section class="featured_image col-md-4 col">
          <?php if (get_field('featured_image')) : ?>
            <img src="<?php echo get_field('featured_image'); ?>" alt="">
            <img src="<?php echo get_image_path('icon_shadow.png'); ?>" alt="">
          <?php endif; ?>
        </section>
        
        <?php /*?><?php if (get_the_content()) : ?>
          <div class="splitter top"></div>
          <section class="content the_content span_12 col">
            <?php the_content(); ?>
          </section>
          <div class="clear"></div>
          <div class="splitter bottom"></div>
        <?php endif; ?><?php */?>
        
                <?php if ($post) : ?>
                    <div class="splitter clear" style="padding-top: 20px;"></div>
                    <div class="content" style="padding-top: 20px;"><?php echo apply_filters('the_content', $post->post_content); ?></div>
                    <div class="splitter"></div>  
                <?php endif; ?>


        <div class="clear"></div>
          </div>
    </section>

    <!-- Widgetized Area 

    <section class="widget_area content_row">
      <div class="container">
          <div class="row">
            <section class="widgetized left_side col-md-6 col" style="padding-top:20px; padding-bottom:20px;"><?php dynamic_sidebar_cache('template_f_widget_1'); ?></section>
            <section class="widgetized right_side col-md-6 col last" style="padding-top:20px; padding-bottom:20px;"><?php dynamic_sidebar_cache('template_f_widget_2'); ?></section>
            <div class="clear"></div>
          </div>
      </div>
    </section>

  -->

    <!-- Flex -->
    <section class="widgetized flex content_row container">
        <?php dynamic_sidebar_cache('template_f_flex'); ?>
    </section>
  </div>
  <div class="container">
      <?php initResourcesSection(); ?>
  </div>

<?php get_footer(); ?>