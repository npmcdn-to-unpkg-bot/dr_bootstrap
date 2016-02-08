<div class="featured_content row <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
  <?php foreach ($content as $row) : ?>
  <div class="span_3 col">
    <div class="dotted_splitter"></div>
    <section class="logo">
      <span></span>
      <img src="<?php echo $row['feature_page_image']; ?>" alt="">
    </section>
    <div class="content">
      <img class="arrow" src="<?php echo get_image_path('featured_content_up_arrow.png'); ?>" alt="">
      <section class="header"><?php echo $row['page_title']; ?></section>
      <section class="body"><?php echo $row['page_intro']; ?></section>
      <div class="clear"></div>
    </div>
    <div class="dotted_splitter"></div>
  </div>
  <?php endforeach; ?>
  <div class="clear"></div>
</div>