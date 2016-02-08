<div class="widget featured_content">
    <?php foreach ($content as $row) : ?>
        <?php
        $link = ($row['custom_url'])?: $row['page'];
        ?>
        <a target="_blank" href="<?php echo $link; ?>" class="whitepaper">
            <div class="icon">
                <img src="<?php echo $row['feature_page_image']; ?>" alt="<?php echo $row['page_title']; ?>">
            </div>
            <div class="content">
                <div class="title"><?php echo $row['page_title']; ?></div>
                <div class="excerpt"><?php echo $row['page_intro']; ?></div>
            </div>
        </a>
    <?php endforeach; ?>
</div>