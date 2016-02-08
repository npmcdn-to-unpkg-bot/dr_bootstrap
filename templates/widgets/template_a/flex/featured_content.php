<div class="widget featured_content <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
  <?php if ($header_text) : ?>
    <div class="fc_header"><?php echo $header_text; ?></div>
  <?php endif; ?>
  <?php if ($intro_text) : ?>
    <div class="intro"><?php echo $intro_text; ?></div>
  <?php endif; ?>

  <div class="dotted_splitter"></div>

  <div class="row">
    <?php
    $row_count = count($content);
    $i = 1;
    foreach ($content as $row) : ?>
    <div class="clearfix col span_6 <?php echo ($row_count === $i) ? 'last':''; ?>">
      <?php if ($row['feature_page_image']) : ?>
          <a href="<?php echo $row['custom_url']; ?>" class="image hide_on_mobile">
            <img src="<?php echo $row['feature_page_image']; ?>" alt="">
          </a>
      <?php endif; ?>
      <div class="content">
        <a class="header" href="<?php echo $row['custom_url']; ?>"><?php echo $row['page_title']; ?></a>
        <?php if ($row['page_intro']) : ?>
        <div class="body"><?php echo $row['page_intro']; ?></div>
        <?php endif; ?>
        <a class="link" href="<?php echo $row['custom_url']; ?>"><?php _e('Read full article', 'digital-river'); ?></a> 
      </div>
      <div class="dotted_splitter"></div>
    </div>
    <?php $i++; endforeach; ?>
  </div>
  <div class="clear"></div>
  <div class="splitter bottom_splitter"></div>
</div>