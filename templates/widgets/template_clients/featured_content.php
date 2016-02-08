<div class="widget featured_content <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
    <?php if ($header_text) : ?>
        <div class="fc_header"><?php echo $header_text; ?></div>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <div class="intro"><?php echo $intro_text; ?></div>
    <?php endif; ?>

    <?php foreach ($content as $row) : ?>
        <a id="<?php echo sanitize_title($row['page_title']); ?>" name="<?php echo sanitize_title($row['page_title']); ?>"></a>
        <div class="container clearfix">
            <div class="dotted_splitter top_dotted"></div>
            <?php if ($row['feature_page_image']) : ?>
                <?php if ($row['enable_link']) : ?>
                    <a href="<?php echo $row['page']; ?>" class="image">
                        <span></span>
                        <img src="<?php echo $row['feature_page_image']; ?>">
                    </a>
                <?php else: ?>
                    <div class="image">
                        <span></span>
                        <img src="<?php echo $row['feature_page_image']; ?>">
                    </div>
                <?php endif; ?>
           
            <?php endif; ?>
            <div class="content">
                <?php if ($row['enable_link']) : ?>
                    <a href="<?php echo $row['page']; ?>" class="header"><?php echo $row['page_title']; ?></a>
                <?php else: ?>
                    <div class="header"><?php echo $row['page_title']; ?></div>
                <?php endif; ?>

                <?php if ($row['page_intro']) : ?>
                <div class="body"><?php echo $row['page_intro']; ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="dotted_splitter"></div>
    <?php endforeach; ?>
</div>