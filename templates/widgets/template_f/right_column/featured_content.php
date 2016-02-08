<div class="featured_content widget container <?php echo ($hide_on_responsive)? 'hide_on_mobile':''; ?>">
  <?php if ($header_text) : ?>
    <header class="title"><?php echo $header_text; ?></header>
  <?php endif; ?>
  <?php if ($intro_text) : ?>
    <div class="intro"><?php echo $intro_text; ?></div>
  <?php endif; ?>

  <section class="row">
    <div class="col span_12 hide_on_mobile"><div class="dotted_splitter"></div></div>
  </section>
  <section class="row">
    <?php $i = 0; foreach ($content as $fc) : ?>
      <section class="col span_12">
        <section class="content">
          <section class="text_container">
            <header class="name"><?php echo $fc['page_title']; ?></header>
            <article class="intro"><?php echo $fc['page_intro']; ?></article>
          </section>
          <section class="button_container">
            <a href="<?php if($fc['custom_url'] != ''){echo $fc['custom_url']; } else {echo $fc['page']; }?>" class="button">
              <div class="butt"></div>
              <div class="text"><?php _e('Details','digital-river'); ?></div>
              <div class="arrow"></div>
              <div class="clear"></div>
            </a>
            <div class="clear"></div>
          </section>
        </section>
        <div class="dotted_splitter"></div>
      </section>  
      <?php if (($i % 1) === 1) : ?>
        </section><section class="row">
      <?php endif; ?>
    <?php $i++; endforeach; ?>
    <div class="clear"></div>
  </section>
</div>