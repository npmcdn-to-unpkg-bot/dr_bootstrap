<?php
/**
 * Template Name: Media Area
 */
?>

<?php
	$post = "press_release";
?>

<?php get_header(); ?>

<div class="content_container clearfix">
	<div class="main_content pull_left">
		<div class="breadcrumbs">Breadcrumbs</div>
			
		<div style="font-weight:bold;">Press Release Archives</div>

		<br /><br />

			<?php
			$startdate = 2009;
			$enddate = date("Y");
			$years = range ($enddate,$startdate);
			?>

			<form method="post" id="post" action="">

				<div style="padding-bottom:20px;">
					<select name="years">

					<?php foreach ($years as $year): ?>
						<?php echo $value; ?>
						<option value="<?php echo $year; ?>" ><?php echo $year;?></option>
					<?php endforeach ?>

					</select>
					<input type="submit" name="submit" value="Search" />

				</div>
				 <?php get_post_type( $post ) ?> 



				 <?php
		
				 	$args = array( 'post_type' => 'press_releases', 'posts_per_page' => 30, 'meta_key' => 'year', 'meta_value' => $_REQUEST['years'] );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						echo '<div>';
						
						echo '<a href="#">';
						the_title();
						echo '</a>';

						echo '</div>';
						
						//echo '<div class="entry-content">';
						//the_content();
						//echo '</div>';
					endwhile;
						//var_dump($_REQUEST['years']);
					?>


				</form>

	</div>

	<!-- Sidebar -->
	<div class="rail pull_right">
		<?php get_template_part('sidebar', 'cf-contact-form'); ?>
	</div>

</div>
	


<?php get_footer(); ?>