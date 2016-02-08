<?php

// Gather posts together
$posts_array = array();
foreach ($posts->posts as $post) {
    // Get custom fields
    foreach ($custom_fields as $field) {
        $post->$field = get_field($field, $post->id);
    }

    // Get timestamp
    $post->timestamp = strtotime($post->article_date);

	$posts_array[$post->timestamp][] = $post;
}

// Sort by timestamp, new to old
krsort($posts_array);
?>

<h3 class="body_title"><?php echo $title; ?></h3>
<div class="splitter"></div>

<div class="content post_content media_coverage">
<?php foreach ($posts_array as $posts) : foreach ($posts as $post) : ?>
	<p>
		<strong><?php echo $post->post_title; ?></strong>
        <?php
        if (!empty($post->name_of_publication)) echo "<br>" . $post->name_of_publication;
        if (!empty($post->article_author)) echo "<br>" . $post->article_author;
        if (!empty($post->article_date)) echo "<br>" . $post->article_date;
        ?>
	</p>
    <?php if ($post->article_url) : ?>
	<p>
        <a href="<?php echo $post->article_url; ?>" target="_blank"><?php echo ($post->url_title)?: _e('Read the article','digital-river'); ?></a>
	</p>
    <?php endif; ?>
	<div class="dotted_splitter media_coverage"></div>
<?php endforeach; endforeach; ?>
</div>
