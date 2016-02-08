<div class="tabbed_post">
  <ul class="tab_menu">
    <li class="title"><?php echo 'Title: '.$posts['title']; ?></li>
    <?php foreach (array_keys($posts['tabs']) as $tab_title) : ?>
      <li>
        <a class="tab_title" href="#" data-tab="<?php echo $tab_title; ?>"><?php echo $tab_title; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
<div class="clearfix"></div>
  <div class="tab_content">
    <?php foreach ($posts['tabs'] as $title => $tab) : ?>
      <div class="tab" data-title="<?php echo $title; ?>">
        <ul class="content">
          <?php foreach ($tab as $content) : ?>
            <li class="listing">
              <div class="post_title"><?php echo $content->post_title; ?></div>
              <a href="<?php echo get_permalink($content->ID); ?>" class="read_more">><?php _e('Read More','digital-river'); ?></a>
              <ul class="info">
                <?php if ($content->fields->publication_name) : ?>
                  <li><span class="name"><?php _e('Publication:','digital-river'); ?></span> <?php echo $content->fields->publication_name; ?></li>
                <?php endif; ?>
                <?php if ($content->fields->author_name) : ?>
                  <li><span class="name"><?php _e('Author:','digital-river'); ?></span> <?php echo $content->fields->author_name; ?></li>
                <?php endif; ?>
                <?php if ($content->fields->date_published) : ?>
                  <li><span class="name"><?php _e('Date published:'); ?></span> <?php echo $content->fields->date_published; ?></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<style>
  .tabbed_post .tab_menu li {
    float: left;
    display: block;
    margin: 0 5px 0 5px;
  }

  .tabbed_post .tab_menu .title {
    font-size: 15px;
    font-weight: bold;
  }

  .tabbed_post .tab_content .tab {
    display: none;
  }

  .tabbed_post .tab_content .tab:first-child {
    display: block;
  }

  .tabbed_post .post_title {
    font-weight: bold;
  }
</style>

<script>
  jQuery(document).ready(function ($) {
    var tab_titles  = $('.tab_title'),
        tab_content = $('.tab_content .tab');

    // Catch tab title clicks
    tab_titles.click(function (e) {
      e.preventDefault();
      tab_content.hide();

      // Get tab and open it
      var tab = $(this).data('tab');
      $(".tab_content .tab[data-title='" + tab + "']").show();
    });
  });
</script>