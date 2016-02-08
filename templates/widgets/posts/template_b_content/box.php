<section class="posts_boxes">

    <h2><?php  echo $content['header_text']; ?></h2>
    <?php if ($content['intro_text']) : ?>
        <p><?php echo $content['intro_text']; ?></p>
    <?php endif; ?>
    <section class="select">
        <?php echo ($content['filter_by'] === 'year') ? __('View by year'): __('View by category'); ?>
        <select name="view_by" class="view_by">
            <?php foreach (array_keys($posts) as $name) : ?>
                <option value="<?php echo sanitize_title($name); ?>"><?php echo $name; ?></option>
            <?php endforeach; ?>
        </select>
    </section>
    <div class="dotted_splitter"></div>

    <?php
    // This is used for setting which year should be visible
    $first = true;
    foreach (array_keys($posts) as $name) :
    ?>
        <section class="list show_<?php echo sanitize_title($name); ?> <?php echo ($first) ? '':'hidden'; ?>">
        <?php foreach ($posts[$name] as $post) : ?>
            <section class="box">
                <?php $link = (isset($post->fields->download_link) && $post->fields->download_link)? $post->fields->download_link: get_permalink($post->ID); ?>
                <div class="row">
                    <?php if (isset($post->fields->image)) : ?>
                        <a href="<?php echo $link; ?>" class="image col span_3"><img src="<?php echo $post->fields->image; ?>" alt="" class="span_12"></a>
                    <?php endif; ?>

                    <div class="content col span_8">
                        <a href="<?php echo $link; ?>" class="title"><?php echo $post->post_title; ?></a>
                        <div class="body"><?php echo wp_trim_words($post->post_content, 55); ?></div>
                        <a href="<?php echo $link; ?>" class="link"><?php _e('Read More', 'digital-river'); ?></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <div class="clear"></div>
            <div class="dotted_splitter"></div>
        <?php endforeach; ?>
        </section>
    <?php
    $first = false;
    endforeach;
    ?>
</section>

<script type="text/javascript">
    jQuery(function($) {
        $('.posts_boxes .view_by').change(function() {
            var value  = $(this).val(),
                parent = $(this).parents('.posts_boxes');

            // Hide all lists, then show selected
            parent.find('.list').each(function() {
                $(this).addClass('hidden');
            });
            parent.find('.show_' + value).removeClass('hidden');
        });
    });
</script>