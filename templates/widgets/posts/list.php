<section class="posts_list">
    <?php $remove_header_margin = true; ?>
    <?php if (!$content['hide_sorting_feature']) : ?>
    <section class="date_select">
        <?php _e('View by year'); ?>
        <select name="view_year" class="view_year">
            <?php foreach (array_keys($posts) as $year) : ?>
                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
            <?php endforeach; ?>
        </select>
    </section>

    <div class="splitter"></div>
    <div class="lined_border"></div>
    <?php $remove_header_margin = false; ?>
    <?php endif; ?>


  <?php if ($header_text) : ?>
        <section class="header <?php echo ($remove_header_margin) ? 'remove-margin': ''; ?>"><?php echo $header_text; ?></section>
    <?php endif; ?>


    <?php
    // This is used for setting which year should be visible
    $first = true;
    foreach (array_keys($posts) as $year) :
    ?>
        <ul class="list list_<?php echo $year; ?> <?php echo ($first) ? '':'hidden'; ?>">
            <?php foreach ($posts[$year] as $post) : ?>
				<?php
					$category = get_the_category($post->ID);
					$target = '';
					$url = get_permalink($post->ID);
					
					if ( isset($category[0]->name) && $category[0]->name == 'Event' ) {
						$target = '_blank';
						$url = get_post_meta($post->ID, 'download_link', true);
                        $url = get_field('download_link', $post->ID);
					}
				?>
                <div class="dotted_splitter"></div>
                <li class="content container">
                    <div class="row">
                        <?php $date = ($post->fields->date_published)?: $post->post_date; ?>
                        <section class="date col span_2"><?php echo date('M. j, Y', strtotime($date)); ?></section>
                        <?php if ( strlen($url) ) : ?>
						<a class="link col span_10 last" target="<?php echo $target; ?>" href="<?php echo $url; ?>"><?php echo $post->post_title; ?></a>
                        <?php else : ?>
						<span class="empty_event"><?php echo $post->post_title; ?></span>
						<?php endif ?>
						<div class="clear"></div>
                    </div>
                </li>
            <?php endforeach; ?>
            <div class="dotted_splitter"></div>
        </ul>
    <?php
    $first = false;
    endforeach;
    ?>
</section>

<script type="text/javascript">
    jQuery(function($) {
        $('.posts_list .view_year').change(function() {
            var value  = $(this).val(),
                parent = $(this).parents('.posts_list');

            // Hide all lists, then show selected
            parent.find('.list').each(function() {
                $(this).addClass('hidden');
            });
            parent.find('.list_' + value).removeClass('hidden');
        });
    });
</script>