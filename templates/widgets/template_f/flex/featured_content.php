<div class="widget featured_content ww_page row <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
    <?php if ($header_text) : ?>
        <h3 class="header"><?php _e($header_text,'digital-river'); ?></h3>
    <?php endif; ?>

    <?php if ($intro_text) : ?>
        <section class="intro"><?php _e($intro_text,'digital-river'); ?></section>
    <?php endif; ?>

    <div class="container">
        <div class="row top">
        </div>
        <div class="row solution-content-wrapper">
        <?php $i = 1; foreach ($content as $row) : ?>
            <section class="content span_6 <?php if($i == (count($content))){ echo " end ";  } ?><?php echo (($i%2) === 0) ? 'last':''; ?>">
                <a class="title" href="<?php if($row['custom_url'] != ''){echo $row['custom_url']; } else {echo $row['page']; }?>"><h4 class='med black'><?php echo $row['page_title']; ?></h4></a>
                <article class="body"><?php echo $row['page_intro']; ?></article>
                <a class="button" href="<?php if($row['custom_url'] != ''){echo $row['custom_url']; } else {echo $row['page']; }?>">
                    <?php _e('Details', 'digital-river'); ?>
                </a>
                <div class="clear"></div>
            </section>

        <?php if( ($i%2) === 0 && $i != count($content) ) : ?>
            <div class='clear'></div>
            </div><div class="row <?php if($i != count($content)-2 && $i != count($content)-1  ){echo 'solution-content-wrapper';} ?>" >
        <?php endif; ?>
        <?php $i++; endforeach; ?>
        <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>