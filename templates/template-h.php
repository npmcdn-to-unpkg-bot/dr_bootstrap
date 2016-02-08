<?php
/**
 * Template Name: Template H
 */
?>
<?php get_header(); ?>
<div id="template_h">
    <?php get_template_part('masthead'); ?>
    <div class="background">
        <div class="container top">
            <div class="splitter"></div>
            <section class="content">
                <?php apply_filters( 'the_content', get_the_content() ); ?>
            </section>
            <div class="splitter"></div>
        </div>
        <div class="container flex_area">
            <?php dynamic_sidebar_cache('template_h_flex'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>