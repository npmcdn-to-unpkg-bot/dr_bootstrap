<div class="widget featured_content row <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
    <?php if ($header_text) : ?>
        <div class="header"><?php echo $header_text; ?></div>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <section class="intro"><?php echo $intro_text; ?></section>
    <?php endif; ?>

    <?php foreach ($content as $row) : ?>
        <div class="dotted_splitter"></div>
        <div class="container">
            <div class="row">
                <?php $has_image = false; if ($row['feature_page_image']) : ?>
                    <?php $has_image = true; ?>
                    <?php if ($row['video_id']) : ?>
                        <a data-target="#video_<?php echo $row['video_id']; ?>" href="http://vimeo.com/<?php echo $row['video_id']; ?>" class="image video modal_link col span_3">
                            <img src="<?php echo $row['feature_page_image']; ?>" alt="">
                            <img class="play_button" src="<?php echo get_image_path('play_button.png'); ?>" alt=""/>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo $row['page']; ?>" class="image col col-md-4"><img src="<?php echo $row['feature_page_image']; ?>" alt=""></a>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="content col last <?php echo ($has_image) ? 'span_8': 'span_11'; ?>">
                    <?php $post_url = ($row['custom_url']) ?: $row['page']; ?>
                    <?php if ($row['video_id']) : ?>
                        <a class="title modal_link" data-target="#video_<?php echo $row['video_id']; ?>" href="http://vimeo.com/<?php echo $row['video_id']; ?>"><?php echo $row['page_title']; ?></a>
                    <?php else: ?>
                        <a class="title" href="<?php echo $post_url; ?>"><?php echo $row['page_title']; ?></a>
                    <?php endif; ?>

                    <?php if ($row['page_intro']) : ?>
                        <div class="body"><?php echo $row['page_intro']; ?></div>
                    <?php endif; ?>

                    <?php if ($row['video_id']) : ?>
                        <a class="link modal_link" data-target="#video_<?php echo $row['video_id']; ?>" href="http://vimeo.com/<?php echo $row['video_id']; ?>"><?php _e('View Video', 'featured-content'); ?></a>
                    <?php else: ?>
                        <?php $read_more_text = ($row['read_more_text'])?: __('Read full article', 'digital-river'); ?>
                        <a class="link" href="<?php echo $post_url; ?>"><?php $row['page_title']; ?></a>
                    <?php endif; ?>

                    <?php if ($row['video_id']) : ?>
                        <div id="video_<?php echo $row['video_id']; ?>" class="modal span_10">
                            <a href="#" class="exit simplemodal-close"></a>
                            <div class="container">                            
                                <div class="row">
                                    <iframe src="https://player.vimeo.com/video/<?php echo $row['video_id']; ?>" class="span_12" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                            <div class="clearfix"></div>
                            </div>
                            <div class="dotted_splitter"></div>
                            <header class="title"><?php echo $row['page_title']; ?></header>
                            <p><?php echo $row['page_intro']; ?></p>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="clear"></div>
        </div>
    <?php endforeach; ?>
    <div class="dotted_splitter"></div>
</div>