<?php
// Gather posts together
$posts_array = array();
foreach ($posts->posts as $post) {
    // Get custom fields
    foreach ($custom_fields as $field) {
        $post->$field = get_field($field, $post->id);
    }

    // Get timestamp
    $start_date = (isset($post->start_date))?: $post->event_start_date;
    $post->timestamp = strtotime($start_date);

    $posts_array[$post->timestamp][] = $post;
}

// Sort by timestamp, new to old
krsort($posts_array);

// Sort by year of post
$year_posts_array = array();
foreach ($posts_array as $timestamp => $post) {
    $year = date('Y', $timestamp);
    $year_posts_array[$year][] = $post;
}
?>

<div class="posts posts_list upw">

    <h3 class="header"><?php echo $title; ?></h3>
    <?php
    // Build year lists
    $first_year = true;
    foreach ($year_posts_array as $year => $posts) :
    ?>

    <ul id="list_<?php echo $year; ?>" class="list event_list <?php if ($first_year) echo 'active'; ?>">
        <?php
        $first_post = true;
        foreach ($posts as $events) : foreach ($events as $post) :
        ?>
            <?php if ($first_post) : ?>
                <div class="dotted_splitter"></div>
            <?php endif; ?>
            <li class="content container">
                <div class="row">
                    <?php $start_date = (isset($post->start_date))?: $post->event_start_date; ?>
                    <div class="date col span_2"><?php echo date("M j", strtotime($start_date)); ?> <?php if ($post->event_end_date) : ?> - <?php echo date("M j", strtotime($post->event_end_date)); endif; ?></div>
                    <div class="event-info span_10 col">
                        <!-- Event Title -->
                        <div class="title span_8 col">

                            <?php
                             if ($post->external_link) : ?>
                               <a class="link" href="<?php echo $post->link_url; ?>" target="_blank"><?php echo $post->post_title; ?></a>
                            <?php else: ?>
                               <span class="empty_event"><?php echo $post->post_title; ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Event Location -->
                        <?php if ($post->event_location) : ?>
                            <div class="location col-md-4 col"><?php echo $post->event_location; ?></div>
                        <?php endif; ?>
                        <div class="clearfix"></div>

                        <!-- Event Description -->
                        <?php if ($post->event_description) : ?>
                            <div class="description span_12 col"><?php echo $post->event_description; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="clear"><div>
                </div>
            </li>
            <div class="dotted_splitter"></div>
        <?php $first_post = false; endforeach; endforeach; ?>
    </ul>

    <?php $first_year = false; endforeach; ?>
</div>

<script type="text/javascript">
    jQuery(function($) {
        $('.posts_list .view_year').change(function() {
            var value  = $(this).val(),
                parent = $(this).parents('.posts_list');

            // Hide all lists, then show selected
            parent.find('.list').each(function() {
                $(this).removeClass('active');
            });
            $('#' + value).addClass('active');
        });
    });
</script>
