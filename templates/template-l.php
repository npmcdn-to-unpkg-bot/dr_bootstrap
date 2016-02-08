<?php
/**
 * Template Name: Template L
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>


    <!-- Content Container -->
    <section id="template_l" class="content_container">
        <div class="left_border"></div>
        <div class="container">
            <div class="row">
                <section class="main_content span_8" style="padding-right:10px;">
                
                        <?php $post = get_post(get_the_ID()); ?>
                        <?php if ($post) : ?>
                            <div class="splitter clear"></div>
                            <div class="content"><?php apply_filters('the_content', $post->post_content); ?></div>
                            <div class="splitter"></div>
                        <?php endif; ?>

                            <?php if (get_field('show_latest_post')) : ?>
                            <div class="widget row">
                                <section class="latest_post col">
                                    <div class="splitter"></div>
                                    <?php
                                    $latest_post = get_field('latest_news_post');
                                    $latest_post->fields = get_fields($latest_post->ID);
                                    $latest_post_object  = get_post($latest_post->ID);
                                    $latest_post_excerpt = $latest_post->fields['intro_text'];
                                    ?>
                                    <div class="header"><?php the_field('latest_post_header'); ?></div>
                                    <div class="clear"></div>
                                    <?php $latest_post_link = ($latest_post->fields['external_link'])?: get_permalink($latest_post->ID); ?>
                                    <a href="<?php echo $latest_post_link; ?>" class="title" style="font-style:normal;"><?php echo $latest_post->post_title; ?></a>
                                    <p><?php echo $latest_post_excerpt; ?></p>
                                    <a href="<?php echo $latest_post_link; ?>" class="link"><?php the_field('latest_post_read_more_link'); ?></a>
                                    <div class="splitter"></div>
                                </section>
                                <div class="clear"></div>
                            </div>
                            <?php endif; ?>

                <?php dynamic_sidebar_cache('template_j_content'); ?>
                <div class="clear"></div>
            </section>
            <section class="rail span_3 col last"><?php dynamic_sidebar_cache('template_j_right_sidebar'); ?></section>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
