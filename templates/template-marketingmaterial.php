<?php
/**
 * Template Name: Template Marketing Material
 */
?>
<?php get_header(); ?>


<?php $post = get_post(get_the_ID()); ?>
<?php echo apply_filters('the_content', $post->post_content); ?>

<?php get_footer(); ?>