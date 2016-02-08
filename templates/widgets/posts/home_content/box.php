<section class="header"><?php echo $content['header_text']; ?></section>
<?php foreach ($posts as $post) : ?>
    <?php $permalink = get_permalink($post->ID); ?>
    <section class="widget_content">
        <section class="title"><?php echo $post->post_title; ?></section>
        <section class="intro"><?php echo $post->fields->intro_text; ?></section>
        <a href="<?php echo $permalink; ?>" class="link"><?php _e('Read More','digital-river'); ?></a>
    </section>
<?php endforeach; ?>
