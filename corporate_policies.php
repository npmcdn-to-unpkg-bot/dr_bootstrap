<?php
/**
 * Template Name: Corporate Policies
 */
?>
<?php get_header(); ?>
    <!-- Content Container -->
    <section id="corporate_policies" class="">

    <div class="left_border"></div>
    <div class="container"> 
        <div class="row">
            <a name="top"></a>
            <section class="main_content span_12 col">
                <header class="intro span_12 col">
                    <?php if (have_posts()) : while (have_posts()) : the_post();?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </header>
                <div class="clear"></div>

                <?php if (get_field('featured_content')) : ?>
                    <section class="important_containers container hide_on_mobile">
                        <div class="row">
                        <?php $i = 0; foreach (get_field('featured_content') as $content) : ?>    
                            <section class="important_container span_6 col <?php echo (($i % 2) === 1) ? 'last': ''; ?>">
                                <header>
                                    <h2><?php _e($content['title'],'digital-river'); ?></h2>
                                    <a href="<?php echo $content['link']; ?>"><?php echo $content['link_title']; ?></a>
                                </header>
                                <article><?php echo $content['content']; ?></article>
                                <div class="<?php echo (($i % 2) === 0) ? 'column_bottom_left': 'column_bottom_right'; ?> span_6"></div>
                            </section>

                            <?php if (($i % 2) === 1) : ?>
                                </div><div class="row">
                            <?php endif; ?>
                        <?php $i++; endforeach; ?>
                        </div>
                    </section>
                    <section class="important_containers container show_on_mobile">
                        <?php $i = 0; foreach (get_field('featured_content') as $content) : ?>
                            <div class="row">
                            <section class="important_container span_12 col">
                                <header>
                                    <h2><?php echo $content['title']; ?></h2>
                                    <a href="<?php echo $content['link']; ?>"><?php echo $content['link_title']; ?></a>
                                </header>
                                <article><?php echo $content['content']; ?></article>
                                <div class="<?php echo (($i % 2) === 0) ? 'column_bottom_left': 'column_bottom_right'; ?> span_12"></div>
                            </section>
                            </div>
                        <?php $i++; endforeach; ?>
                    </section>
                <?php endif; ?>
                <section class="content col span_12"><?php the_field('content'); ?></section>
                <div class="clear"></div>
            </section>


        </div>
        <div class="clear"></div>
    </div>
  </section>
<?php get_footer(); ?>