<?php
// Gather posts together
$posts_array = array();
foreach ($posts->posts as $post) {
    // Get custom fields
    foreach ($custom_fields as $field) {
        $post->$field = get_field($field, $post->id);
    }

    // Get timestamp
    $post->timestamp = strtotime($post->date_published);

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
<div class="col-md-8">
<div class="posts posts_list ">

    <section class="date_select">
        <?php _e('View by year'); ?>
        <select name="view_year" class="view_year">
            <?php foreach (array_keys($year_posts_array) as $year) : ?>
                <option value="list_<?php echo $year; ?>"><?php echo $year; ?></option>
            <?php endforeach; ?>
        </select>
    </section>

	<div class="splitter"></div>
	<div class="lined_border"></div>
	<h3 class="header"><?php echo $title; ?></h3>
	<?php
	// Build year lists
	$first_year = true;
	foreach ($year_posts_array as $year => $posts) :
	?>

	<ul id="list_<?php echo $year; ?>" class="list event_list <?php if ($first_year) echo 'active'; ?>">
		<?php
		$first_post = true;
		foreach ($posts as $press_releases) : foreach ($press_releases as $post) :
		?>
			<?php if ($first_post) : ?>
				<div class="dotted_splitter"></div>
			<?php endif; ?>
		    <li class="content ">
		    	<div class="row">
					<div class="date col col-md-2"><?php echo $post->date_published; ?></div>
					<a class="link col-md-9" href="<?php echo get_permalink($post->id); ?>"><?php echo $post->post_title; ?></a>
		    	</div>
              
		    </li>
		    <div class="dotted_splitter"></div>
		<?php $first_post = false; endforeach; endforeach; ?>
	</ul>

	<?php $first_year = false; endforeach; ?>
</div>
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
