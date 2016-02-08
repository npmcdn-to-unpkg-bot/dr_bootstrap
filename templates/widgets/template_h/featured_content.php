<div class="widget featured_content row <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
    <?php if ($header_text) : ?>
        <div class="header"><?php echo $header_text; ?></div>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <section class="intro"><?php echo $intro_text; ?></section>
    <?php endif; ?>

    <?php foreach ($content as $row) : ?>
        <div class="dotted_splitter"></div>
        <div class="container row">
            <?php if ($row['feature_page_image']) : ?>
                <a href="<?php echo $row['page']; ?>" class="image col span_6"><img src="<?php echo $row['feature_page_image']; ?>" alt=""></a>
            <?php endif; ?>

            <div class="content col span_6">
                <a class="title" href="<?php echo $row['page']; ?>"><?php echo $row['page_title']; ?></a>

                <?php if ($row['page_intro']) : ?>
                    <div class="body"><?php echo $row['page_intro']; ?></div>
                <?php endif; ?>

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

            </div>
            <div class="clear"></div>
        </div>
    <?php endforeach; ?>
    <div class="dotted_splitter"></div>
</div>