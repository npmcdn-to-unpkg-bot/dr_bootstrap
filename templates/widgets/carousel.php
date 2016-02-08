<div class="carousel <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
  <?php if ($header_text) : ?>
    <div class="header_text"><?php echo $header_text; ?></div>
  <?php endif; ?>
  <?php if ($intro_text) : ?>
    <div class="intro_text"><?php echo $intro_text; ?></div>
  <?php endif; ?>
  <div class="flexslider">
    <ul class="slides">
      <?php foreach ($slides as $slide) : ?>
        <li>
          <?php if ($slide['slide_title']) : ?>
            <div class="title">Title: <?php echo $slide['slide_title']; ?></div>
          <?php endif; ?>
          <?php if ($slide['slide_subtitle']) : ?>
            <div class="subtitle">Subtitle: <?php echo $slide['slide_subtitle']; ?></div>
          <?php endif; ?>
          <div class="image">Image: <img src="<?php echo $slide['slide_image']; ?>" /></div>
          <div class="text">Text: <?php echo $slide['slide_text']; ?></div>
          <div class="video">Video: <?php echo $slide['slide_video']; ?></div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($) {
    $('.flexslider').flexslider({
      animationLoop: false
    });
  });
</script>