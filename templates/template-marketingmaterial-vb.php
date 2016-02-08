<?php
/**
 * Template Name: Template Value Brief
 */
?>
<?php get_header(); ?>


<?php $post = get_post(get_the_ID()); ?>
<?php echo apply_filters('the_content', $post->post_content); ?>

<?php get_footer(); ?>