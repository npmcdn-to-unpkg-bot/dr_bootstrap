<div class="tabbed_content">
    <div class="dotted_splitter top_dotted"></div>
    <h2><?php _e($header_text,'digital-river'); ?></h2>
    <?php foreach ($rows as $row) : ?>
        <div class="row">
            <?php
            $tab_count = count($row['tabs']);
            $i = 1;
            foreach ($row['tabs'] as $tab) :
                ?>
                <div class="col span_6 tab <?php echo (($i % 2) == 0) ? 'last': ''; ?>">
                    <div class="image_container">
                        <span></span>
                        <img src="<?php echo $tab['tab_title_image']; ?>" alt="">
                    </div>
                </div>
                <?php $i++; endforeach; ?>
            <div class="clear"></div>
        </div>
    <?php endforeach; ?>
    <div class="dotted_splitter"></div>
</div>