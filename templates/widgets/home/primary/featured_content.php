<section class="widget featured_content <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
    <?php if ($header_text) : ?>
        <section class="header"><?php echo $header_text; ?></section>
    <?php endif; ?>

    <section class="widget_content">
        <a href="<?php echo $content[0]['page']; ?>"><section class="title"><?php echo $content[0]['page_title']; ?></section></a>
        <section class="intro"><?php echo $content[0]['page_intro']; ?></section>
        <a href="<?php echo $content[0]['page']; ?>" class="link">Read More</a>
    </section>
</section>