<div class="rail_carousel widget <?php echo ($hide_on_responsive)? 'hide_on_mobile': ''; ?>">
  <?php if ($header_text) : ?>
    <div class="header_text"><?php echo $header_text; ?></div>
  <?php endif; ?>
  <?php if ($intro_text) : ?>
    <div class="intro_text"><?php echo $intro_text; ?></div>
  <?php endif; ?>
  <div class="flexslider">
    <ul class="slides">
      <?php $i = 1; foreach ($slides as $slide) : ?>
        <li class="slide">
<!--           <?php if ($slide['slide_title']) : ?>
            <div class="title">Title: <?php echo $slide['slide_title']; ?></div>
          <?php endif; ?>
          <?php if ($slide['slide_subtitle']) : ?>
            <div class="subtitle">Subtitle: <?php echo $slide['slide_subtitle']; ?></div>
          <?php endif; ?> -->
          <?php if ($slide['slide_image']) : ?>
            <div class="image"><img src="<?php echo $slide['slide_image']; ?>" /></div>
          <?php endif; ?>
          <?php if ($slide['slide_text']) : ?>
            <div class="text"><?php echo $slide['slide_text']; ?></div>
          <?php endif; ?>
          <?php if ($slide['slide_video']) : ?>
            <div class="video">Video: <?php echo $slide['slide_video']; ?></div>
          <?php endif; ?>
          <section class="numbering"><?php echo $i; ?> <span class="of"><?php _e('of','digital-river'); ?></span> <?php echo count($slides); ?></section>
        </li>
      <?php $i++; endforeach; ?>
    </ul>
  </div>
</div>

<!-- Place in the <head>, after the three links -->
<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function($) {
    $('.rail_carousel .flexslider').flexslider({
      animationLoop: false,
      controlNav: false,
      directionNav: true
    });
  });
</script>