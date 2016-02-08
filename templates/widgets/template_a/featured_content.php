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
            <?php if ($row['feature_page_image']) : ?>
                <?php if ($row['enable_link']) : ?>
                    <a href="<?php echo $row['page']; ?>" class="image">
                        <h3>
                            <img alt='<?php echo $row['feature_page_image_alt']; ?>' src="<?php echo $row['feature_page_image']; ?>">
                        <h3>
                    </a>
                <?php else: ?>
                    <div class="image">
                        <h3>
                            <img alt='<?php echo $row['feature_page_image_alt']; ?>' src="<?php echo $row['feature_page_image']; ?>">
                        </h3>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="content">
                <?php if ($row['enable_link']) : ?>
                    <a href="<?php echo $row['page']; ?>" class="button"><?php echo $row['page_title']; ?></a>
                <?php endif; ?>

                <?php if ($row['page_intro']) : ?>
                <div class="body"><?php echo $row['page_intro']; ?></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>