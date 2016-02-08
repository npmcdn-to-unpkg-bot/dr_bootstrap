<div class="tabbed_content">

    <?php if ($header_text) : ?>
        <div class="header_text"><?php echo $header_text; ?></div>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <div class="intro_text"><?php echo $intro_text; ?></div>
    <?php endif; ?>

    <?php foreach ($rows as $row) : ?>
        <div class="tab_row container">
            <div class="row">
                <?php
                $tab_count = count($row['tabs']);
                $i = 1;
                foreach ($row['tabs'] as $tab) : ?>
                    <div class="tab col span_6 <?php echo ($i === $tab_count && $tab_count != 1) ? 'last': ''; ?>">
                        <div class="tab_header">
                            <div class="image">
                                <img src="<?php echo $tab['tab_title_image']; ?>" alt="">
                                <div class="overlay"></div>
                            </div>
                            <div class="title">
                                <div class="text"><?php echo $tab['tab_title']; ?></div>
                                <div class="arrow"></div>
                            </div>
							<div class="tab_content_container clearfix"></div>
                        </div>
                        <?php
                        $drawer_open = ($tab['drawer_open']) ? 'true': 'false';
                        if (!$drawer_open) {
                            $drawer_open = (!$tab['tab_title'] && !$tab['tab_title_image'])? 'true': 'false';
                        }
                        ?>
                        <section class="content" data-open="<?php echo $drawer_open; ?>">
                            <a class="content_exit" href="#">X</a>
                            <?php if ($tab['tab_title']) : ?>
                                <h1><?php echo $tab['tab_title']; ?></h1>
                            <?php endif; ?>
                            <?php echo $tab['content']; ?>
                        </section>
                    </div>
                <?php $i++; endforeach; ?>
            </div>
            <div class="clear"></div>
            <div class="tab_content_container clearfix"></div>
        </div>
    <?php endforeach; ?>
</div>
