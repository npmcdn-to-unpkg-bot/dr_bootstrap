<?php
/**
 * Template Name: Template J 2 Columns
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>


<section id="template_j" class="content_container <?php if(!check_for_sidebar('template_j_right_sidebar')){echo " no-sidebar";} ?>">
        <?php $post = get_post(get_the_ID()); ?>
        <?php if ($post) : ?>
           <?php echo apply_filters('the_content', $post->post_content); ?></div>
        <?php endif; ?>


        <?php renderVideoSectionOnPage(get_the_ID()); ?>

        <?php initResourcesSection(); ?>
</section>

<?php get_footer(); ?>

