<div class="widget featured_content">
    <?php foreach ($content as $row) : ?>
        <h3><a href="<?php echo $row['page']; ?>"><?php echo $row['page_title']; ?></a></h3>
        <a href="<?php echo $row['page']; ?>" class="featured_image">
            <img src="<?php echo $row['feature_page_image']; ?>" alt="<?php echo $row['page_title']; ?>" class="widget_image">
        </a>
    <?php endforeach; ?>
</div>