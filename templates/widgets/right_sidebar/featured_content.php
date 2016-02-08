<div class="widget featured_content">

	<?php foreach ($content as $row) : ?>

	<?php $id = uniqid('image_'); ?>

	<div class="container">

		<div class="row">

			<div class='widget_title'><?php echo $row['page_title']; ?></div>

			<?php if ($row['video_id']) : ?>
			<a data-target="#video_<?php echo $row['video_id']; ?>" href="http://vimeo.com/<?php echo $row['video_id']; ?>" class="image modal_link">
				<img class="col span_10" src="<?php echo $row['feature_page_image']; ?>" alt="">
				<img class="play_button" src="<?php echo get_image_path('play_button.png'); ?>" alt=""/>
			</a>
			<?php elseif ($row['custom_url']): ?>
			<a data-target="#<?php echo $id; ?>" href="<?php echo $row['custom_url']; ?>" class="image modal_link">
				<img src="<?php echo $row['feature_page_image']; ?>" alt="">
			</a>
			<?php endif; ?>
			<div class="clear"></div>

			<div class="content span_12 <?php echo (isset($row['download_url']) && $row['download_url']) ? 'has_download_url':''; ?>">
				<?php if ($row['download_url']) : ?>
				<img src="<?php echo $row['feature_page_image']; ?>" class="featured_page_image" />
				<?php endif ?>
				<div class="download_content">
				<?php _e($row['page_intro'],'digital-river'); ?>
				<?php if ($row['download_url']) : ?>
					<?php $read_more_text = ($row['read_more_text'])?: 'Download'; ?>
					<a class="link" href="<?php echo $row['download_url']; ?>" target="_blank"><?php echo $read_more_text; ?></a>
				<?php endif ?>
				</div>
			</div>
			<div class="clear"></div>

			<?php if ($row['video_id']) : ?>
			<a class="link modal_link" data-target="#video_<?php echo $row['video_id']; ?>" href="http://vimeo.com/<?php echo $row['video_id']; ?>"><?php _e('View Video', 'featured-content'); ?></a>
			<?php endif ?>

			<?php if ($row['video_id']) : ?>
			<div id="video_<?php echo $row['video_id']; ?>" class="modal span_5">
				<a href="#" class="exit simplemodal-close"></a>
				<div class="container">
					<div class="row">
						<iframe src="https://player.vimeo.com/video/<?php echo $row['video_id']; ?>" class="span_12" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="dotted_splitter"></div>
				<header class="title"><?php echo $row['page_title']; ?></header>
				<p><?php echo $row['page_intro']; ?></p>
			</div>
			<?php elseif ($row['custom_url']): ?>
			<div id="<?php echo $id; ?>" class="modal span_8">
				<a href="#" class="exit simplemodal-close"></a>
				<div class="container">
					<div class="row">
						<img src="<?php echo $row['custom_url']; ?>" alt="" />
					</div>
				</div>
			</div>
			<?php endif; ?>

		</div><!-- end: row -->

	</div><!-- end: container -->

	<?php endforeach; ?>

</div>
