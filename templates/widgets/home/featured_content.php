<?php
	$target = '';
	$url = $content[0]['page'];
	
	if ( strlen($content[0]['custom_url']) ) {
		$target = '_blank';
		$url = $content[0]['custom_url'];
	}
?>

<section class="widget featured_content <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
    <?php if ($header_text) : ?>
        <section class="header"><?php echo $header_text; ?></section>
    <?php endif; ?>

    <section class="widget_content">
        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><section class="title"><?php echo $content[0]['page_title']; ?></section></a>
        <section class="intro"><?php echo $content[0]['page_intro']; ?></section>
        <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="link"><?php echo ($content[0]['read_more_text'])?: __('Read More'); ?></a>
    </section>
</section>