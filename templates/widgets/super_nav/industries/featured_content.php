<div class="widget featured_content">
    <?php foreach ($content as $link) : ?>
        <a class="industry_link" href="<?php echo $link['custom_url']; ?>">
            <div class="image"><img src="<?php echo $link['feature_page_image']; ?>" alt="<?php echo $link['page_title']; ?> Logo"></div>
            <section class="text"><p><?php echo $link['page_title']; ?></p></section>
            <div class="clear"></div>
        </a>
    <?php endforeach; ?>
</div>