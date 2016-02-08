<div class="tabbed_content">
    <div class="splitter"></div>

    <?php if ($header_text) : ?>
        <h2 class="eyebrow"><?php echo $header_text; ?></h2>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <div class="intro_text"><?php echo $intro_text; ?></div>
    <?php endif; ?>

    <div class="dotted_splitter"></div>

    <?php
    foreach ($rows as $row) : ?>
        <div class="tab_row row">
            <?php
            $tab_count = count($row['tabs']);
            $i = 1;
            foreach ($row['tabs'] as $tab) : ?>
                <div class="tab col span_3 <?php echo ($tab_count === $i) ? 'last':''; ?>">
                    <div class="tab_header">
                        <div class="image">
                            <span></span>
                            <img src="<?php echo $tab['tab_title_image']; ?>" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="title">
                            <div class="text"><?php echo $tab['tab_title']; ?></div>
                            <div class="arrow"></div>
                        </div>
                    </div>

                </div>
            <?php $i++; endforeach; ?>
            <div class="clear"></div>
        </div>
    <?php endforeach; ?>

    <div class="dotted_splitter bottom_dotted"></div>
    <div class="splitter"></div>
</div>