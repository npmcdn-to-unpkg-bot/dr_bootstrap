<div class="box right_sidebar">
  <?php foreach ($posts as $post) : ?>
    <div class="post">
      <img src="<?php echo $post->fields->image; ?>" alt="">
      <div class="content">
        <div class="title"><?php echo $post->post_title; ?></div>
        <?php if ($post->fields->intro_text) : ?>
            <div class="intro"><?php echo $post->fields->intro_text; ?></div>
        <?php endif; ?>
        <?php if ($post->fields->display_post_date) : ?>
            <div class="date"><?php echo $post->fields->date_published; ?></div>
        <?php endif; ?>
        <?php if ($post->fields->external_link) : ?>
            <div class="view"><?php echo $post->fields->external_link; ?></div>
        <?php else: ?>
            <div class="view"><?php echo get_permalink($post->ID); ?></div>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>