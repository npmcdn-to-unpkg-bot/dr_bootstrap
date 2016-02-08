<div class="iframe <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
  <?php if ($header_text) : ?>
    <div class="header_text"><?php echo $header_text; ?></div>
  <?php endif; ?>
  <?php if ($intro_text) : ?>
    <div class="intro_text"><?php echo $intro_text; ?></div>
  <?php endif; ?>
  <div class="url cta_box show_on_mobile">
    <a href="<?php echo $url; ?>" class="button" style="margin-top: 0px;">
      <div class="text"><?php echo $url_title; ?></div>
      <div class="arrow"></div>
    </a>
  </div>
  <div class="iframe_container hide_on_mobile row">
    <iframe src="<?php echo $url; ?>" style="height: 900px;" class="span_12 col"></iframe>
  </div>
</div>