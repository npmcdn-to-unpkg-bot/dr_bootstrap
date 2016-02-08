<?php if ($header_text) : ?>
    <div class="posts_header"><?php _e($header_text,'digital-river'); ?></div>
<?php endif; ?>
<ul class="posts_list">
  <?php foreach ($posts as $post) : ?>
    <li class="container">
      <div class="date"><?php echo date('M. j, Y', strtotime($post->post_date)); ?></div>
      <a class="link" href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a>
      <div class="clearfix"><div>
    </li>
  <?php endforeach; ?>
</ul>