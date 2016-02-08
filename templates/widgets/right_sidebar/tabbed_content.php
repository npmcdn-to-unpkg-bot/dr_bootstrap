<div class="rail_tabbed_content widget">
  <div class="header_text"><?php echo $widget['header_text']; ?></div>
  <div class="intro_text"><?php echo $widget['intro_text']; ?></div>
  <div class="dotted_splitter"></div>
  <div class="content">
    <?php foreach ($rows as $row) : ?>
      <?php foreach ($row['tabs'] as $tab) : ?>
        <div class="tab">
          <div class="header">
            <?php if ($tab['tab_title_image']) : ?>
              <img src="<?php echo $tab['tab_title_image']; ?>" alt="">
            <?php endif; ?>
            <?php echo ($tab['tab_title'])?:''; ?>
            <div class="arrow"></div>
          </div>
          <div class="content"><?php echo $tab['content']; ?></div>
        </div>
        <div class="dotted_splitter"></div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
  <div class="clear"></div>
</div>