<?php
/**
 * Template Name: Template J
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>


<!-- Content Container -->
<section id="template_j" class="content_container <?php if(!check_for_sidebar('template_j_right_sidebar')){echo " no-sidebar";} ?>">
    <div class="left_border"></div>
    <div class="container">
        <div class="row">
            <section class="main_content col-md-8">
                <?php if (get_field('add_call_to_action')) : ?>
                    <section id="call_to_action" class="col-md-12">
                        <h2 class="title col col-md-11"><?php the_field('call_to_action_text'); ?></h2>
                        <div class="clear"></div>
                        <?php foreach (get_field('call_to_actions') as $cta) : ?>
                            <div class="cta_splitter"></div>
                            <section class="cta_container">
                                <header class="cta_title"><?php echo $cta['title']; ?></header>
                                <header class="cta_subtitle"><?php echo $cta['subtitle']; ?></header>
                                <?php $link = ($cta['internal_or_external_link'] === 'internal') ? $cta['button_internal_url']: $cta['button_external_url']; ?>
                                <a href="<?php echo $link; ?>" class="button">
                                    <div class="text"><?php echo $cta['button_text']; ?></div>
                                    <div class="arrow"></div>
                                </a>
                                <div class="clear"></div>
                            </section>
                        <?php endforeach; ?>
                        <div class="clear"></div>
                    </section>
                <?php endif; ?>

                <?php $post = get_post(get_the_ID()); ?>
                <?php if ($post) : ?>
                    <div class="splitter clear"></div>
                    <div class="content"><?php echo apply_filters('the_content', $post->post_content); ?></div>
                    <div class="splitter"></div>
                <?php endif; ?>

                <?php dynamic_sidebar_cache('template_j_content'); ?>
                <div class="clear"></div>
            </section>
            <?php if( check_for_sidebar('template_j_right_sidebar') ): ?>
                <section class="rail col-md-3 col last"><?php dynamic_sidebar_cache('template_j_right_sidebar'); ?></section>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>