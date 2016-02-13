<?php
/**
 * Template Name: Template Crossborder
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>



<?php //$year = 2015; ?>
<?php
if(isset($_GET['quarter']) && in_array($_GET['quarter'], array("1","2","3","4"))){
	$quarter = $_GET['quarter'];	
}else{
	$quarter = "4";
}
?>



<div id="quarterSelectorSection" style="padding:30px 0;">
	<div class="row2">
		<div class="med" style="font-size: 2em; float:left; margin-top: 7px; margin-right: 5px;">2015</div>
		<!--
		<div class="med select-style">
		  <select class="med">
		    <option value="2015" <?php if($year == "2015" || $year == ""){echo " selected ";} ?> >2015</option>
		    <option value="2014" <?php if($year == "2014"){echo " selected ";} ?> >2014</option>
		  </select>
		</div>
		-->
		<div class="item med <?php if($quarter == "2"){ echo " active ";} ?> ">
			<a href="?quarter=2"><span>Q2</span></a>
		</div>
		<div class="item med <?php if($quarter == "3"){ echo " active ";} ?> ">
			<a href="?quarter=3"><span>Q3</span></a>
		</div>
		<div class="item med <?php if($quarter == "4"){ echo " active ";} ?> ">
			<a href="?quarter=4"><span>Q4</span></a>
		</div>
		<div class="clear"></div>
	</div>
</div>


<div class="crossborder-wrapper">

<?php

$args = 	array('post_type' => array( 'crossborder_report' ), 'showposts' => -1);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if($quarter == get_field("quarter", get_the_ID())):
			$fields = get_fields(get_the_ID());

			break;
		endif;
	}
}
wp_reset_postdata();


$orderedCoutries = $fields['countries'];


class Industries{

	private $industries = array(
		"specialty" => array(
				"label" => "Specialty",
				"img" => "star.png",
				"id" => "star"
		),
		"apparel" => array(
			"label" => "Apparel / Accessories",
			"img" => "apparel.png",
			"id" => "apparel"
		),
		"books" => array(
			"label" => "Books / Music / Video",
			"img" => "media.png",
			"id" => "media"
		),
		"mass-merchant" => array(
			"label" => "Mass Merchant",
			"img" => "mass.png",
			"id" => "mass"
		),
		"health" => array(
			"label" => "Health / Beauty",
			"img" => "health.png",
			"id" => "health"
		),
		"computer" => array(
			"label" => "Computers / Electronics",
			"img" => "computers.png",
			"id" => "computers"
		),
		"jewelry" => array(
			"label" => "Jewelry",
			"img" => "jewelry.png",
			"id" => "jewelry"
		),
		"travel" => array(
			"label" => "Travel",
			"img" => "travel.png",
			"id" => "travel"
		),
		"toys" => array(
			"label" => "Toys / Hobbies",
			"img" => "toys.png",
			"id" => "toys"
		),
		"housewares" => array(
				"label" => "Housewares / Home Furnishing",
				"img" => "housewares.png",
				"id" => "housewares"
		),

		// Countries //

		"australia-bar" => array(
				"label" => "Australia",
				"img" => "australia-cb.png",
				"id" => "australia-bar"
		),

		"brazil-bar" => array(
				"label" => "Brazil",
				"img" => "brazil-cb.png",
				"id" => "brazil-bar"
		),

		"canada-bar" => array(
				"label" => "Canada",
				"img" => "canada-cb.png",
				"id" => "canada-bar"
		),

		"china-bar" => array(
				"label" => "China",
				"img" => "china-cb.png",
				"id" => "china-bar"
		),

		"france-bar" => array(
				"label" => "France",
				"img" => "france-cb.png",
				"id" => "france-bar"
		),

		"germany-bar" => array(
				"label" => "Germany",
				"img" => "germany-cb.png",
				"id" => "germany-bar"
		),

		"italy-bar" => array(
				"label" => "Italy",
				"img" => "italy-cb.png",
				"id" => "italy-bar"
		),

		"japan-bar" => array(
				"label" => "Japan",
				"img" => "japan-cb.png",
				"id" => "japan-bar"
		),

		"mexico-bar" => array(
				"label" => "Mexico",
				"img" => "mexico-cb.png",
				"id" => "mexico-bar"
		),

		"netherlands-bar" => array(
				"label" => "Netherlands",
				"img" => "netherlands-cb.png",
				"id" => "netherlands-bar"
		),

		"spain-bar" => array(
				"label" => "Spain",
				"img" => "spain-cb.png",
				"id" => "spain-bar"
		),

		"united-kingdom-bar" => array(
				"label" => "United Kingdom",
				"img" => "united-kingdom-cb.png",
				"id" => "united-kingdom-bar"
		),

		"united-states-bar" => array(
				"label" => "United States",
				"img" => "united-states-cb.png",
				"id" => "united-states-bar"
		),
	);



	function getIndustryList($industry){
		return $this->industries[$industry];
	}

}
 ?>




<div style="padding-bottom:45px; background:#F5F5F5;">
	<div class="row2">
		<div class="span_12 last" style="margin-top:15px;">
			<h2 class="med gray heading">Overview</h2>
		</div>
		<div class="clear"></div>
		<div class="col-md-4">
			<div class="section">
				<div class=" med gray subheading">Conducting business across borders is complex</div>
				<p class="gray">It is critical to understand the local cultures and preferences of the customer — as well as the regulatory and business requirements within those countries to do business and stay compliant. The more you know about cross-border payments, the better your chances for global ecommerce success.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="section">
				<div class="gray med subheading">What was measured?</div>
				<p class="gray">X-Border Payments Optimization Index quantifies the degree to which ecommerce companies are prepared to do business with a global customer base. This index will provide important insight into the things that merchants must do in order to be successful on a global commerce stage.</p>
			</div>
		</div>
		<div class="col-md-4 last">
			<div class="section">
				<div class=" med gray subheading">Methodology</div>
				<p class="gray">This index includes in-depth research on more than 160 such players based in 10 countries. including those developed to emerging economies and spanning multiple continents. Over 60 attributes were evaluated for each and every site, covering details related to shopping, payment, shipping, information access, pricing, product and level of effort required to checkout.</p>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div style="background:#FFF; padding-bottom:30px;">
	<div class="row2">
		<div class="span_12 last" style="margin-top: 45px;">
			<?php $thingsHeading = $fields['key_points_heading']; ?>
			<h2 class="med gray heading"><?php echo $thingsHeading; ?></h2>
		</div>
		<?php $color = array("#007eb5", "#a8c628", "#ff5b00", "#00a7e1","#81b315"); ?>
		<div class="span_12" style="margin-top:50px;">
 			<?php foreach ($fields['key_points'] as $key => $key_point): ?>
 				<?php if($key % 2 == 0): ?>
					<div class="col-md-6 thing animate beforeAnimate" style=" background: <?php echo $color[$key]; ?>; margin-bottom:50px;">
						<div class="number med white"><?php echo $key+1; ?></div>
						<div class="description-wrapper">
							<h3 class="white med"><?php echo $key_point['heading']; ?></h3>
							<p class="white"><?php echo $key_point['description']; ?></p>
						</div>
						<div class="clear"></div>
					</div>
 				<?php endif; ?>
				<?php if($key % 2 != 0): ?> 				
					<div class="col-md-6 thing animate beforeAnimate last" style="margin-bottom:50px; background: <?php echo $color[$key]; ?>;">
						<div class="number med white"><?php echo $key+1; ?></div>
						<div class="description-wrapper">
							<h3 class="white med"><?php echo $key_point['heading']; ?></h3>
							<p class="white"><?php echo $key_point['description']; ?></p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				<?php endif; ?>

				<?php
				if($key == count($things)-1){
					if(count($things) % 2 != 0){
						?>
					
						<div class="clear"></div>
						</div>
						<?php
					}
				}
				?>
			<?php endforeach; ?>
		</div>
		</div>
		<div class="clear"></div>
			<div style="margin-top:0px; padding: 30px 0px 0px; border-top: 1px solid rgba(0, 0, 0, 0.5);">
		<div class="row2" style="position:relative;">
			<div class="span_12 last" style="text-align:center;">
				<p style="margin-bottom:15px;" class="">Want to get more detailed information about the Index?</p>
				<a href="<?php echo $fields['resource_url']; ?>" class="button opposite btn-gray" style="margin:0;" class="med">View the full report</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
		<div class="clear"></div>
</div>

<div style="background:#00a7e1; padding-bottom:30px;">
<div class="row2">
	<div class="span_12 last" style="margin-top: 45px;">
		<h2 class="med white heading">Cross-border online commerce readiness and engagement by country</h2>
	</div>
	
	<div class="clear"></div>
	
 	<div class="country-wrapper" >
 	<?php foreach ($orderedCoutries as $key => $country): ?>

		<div class="col-md-4 country animate beforeAnimate" style="<?php if($key % 3 == 2){ echo "margin-right:0px;";} ?>">
			<div class='country-img-wrapper'>
				<img src="/wp-content/themes/digital-river-translated/img/crossborder/<?php echo $country['country']; ?>.png" />
			</div>
			<div class="label">
				<div class="index-score med dark-gray" style="letter-spacing: -8px;"><?php echo $country['index_score']; ?></div>
				<?php $displayName = ucwords(str_replace("-", " ", $country['country'])); ?>
				<div class="country-heading med dark-gray"><?php echo $displayName; ?></div>
			</div>
		</div>

	<?php endforeach; ?>
	<div class="clear"></div>
	</div>
</div>
	<div style="padding: 30px 0px 0px; border-top: 1px solid rgba(255, 255, 255, 0.5);">
		<div class="row2" style="position:relative;">
			<div class="span_12 last" style="text-align:center;">
				<p style="margin-bottom:15px;" class="white">Want to get more detailed information about the Index?</p>
				<a href="<?php echo $fields['resource_url']; ?>" class="button opposite btn-blue" style="margin:0;" class="med white">View the full report</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="clear"></div>


</div>


<div id="industrySection" style="background:#FFF; padding-bottom:50px; ">

	<div class="row2">

			<div class="span_12 last" style="margin-top: 45px;">
				<h2 class="med heading" style="margin-bottom:7px;">Cross-border online commerce readiness and engagement by industry</h2>
				<p style="text-align:center; margin: 0px;">Select the different results below.</p>
			</div>
			<div class="clear"></div>
			<?php $rankings = $fields['charts']; ?>

			<script> var rankings = JSON.parse( '<?php echo json_encode($rankings) ?>' );</script>


			<div class="span_12 last" style="margin-top:15px;">

				<select class="cs-select">
				<?php foreach($rankings as $key => $ranking): ?>
					<option class=" arial <?php if($key == 0){echo "active";} ?>" data-value="<?php echo $key; ?>"><span><?php echo $ranking["label"]; ?></span></div>
				<?php endforeach; ?>
				</select>


				<?php foreach($rankings as $key => $ranking): ?>
					<div class="selector arial <?php if($key == 0){echo "active";} ?>" data-value="<?php echo $key; ?>"><span><?php echo $ranking["label"]; ?></span></div>
				<?php endforeach; ?>

				
		<div class="clear"></div>


		</div>


			<div class="overlay">
				<span class="percentage med"></span>
				<div class="tab"></div>
			</div>


			<div class="clear"></div>

			<div class="span_12 last" style="margin-top:15px;" >


				<div class="icon-wrapper">
					<?php $industries = $fields['charts'][0]['industries']; ?>
					<script> var barArray = JSON.parse( '<?php echo json_encode(array_column($industries, "industry")); ?>' );</script>

					<?php foreach($industries as $key => $industry): ?>
						<div class="icon">
							<?php
							$industriesClass = new Industries();
							$industryInfo = $industriesClass->getIndustryList($industry['industry']);
							?>
							<img src="/wp-content/themes/digital-river-translated/img/crossborder/<?php echo $industryInfo['img']; ?>" />
							<span><?php echo $industryInfo['label']; ?></span>
							<span data-barid="<?php echo $key; ?>" class="score"></span>
						</div>

					<?php endforeach; ?>
			
					<div class="clear"></div>
				</div>


				<div class="bargraph-wrapper">

					<div class="x-val-high med">100%</div>
					<div class="x-val-medium-high med">100%</div>
					<div class="x-val-medium-low med">100%</div>
					<div class="x-val-low med">0%</div>

					<?php foreach($industries as $key => $industry): ?>
						<div class="bar-wrapper" data-barid="<?php echo $industry['industry']; ?>" ></div>
						<div class="clear"></div>
					<?php endforeach; ?>

					<div class="clear"></div>
				</div>
			<div class="clear"></div>

			</div>
		
			<div class="clear"></div>

</div>
			<div class="clear"></div>

	<div style="margin-top:80px; padding: 30px 0px 0px; border-top: 1px solid rgba(0, 0, 0, 0.5);">
		<div class="row2" style="position:relative;">
			<div class="span_12 last" style="text-align:center;">
				<p style="margin-bottom:15px;" class="">Want to get more detailed information about the Index?</p>
				<a href="<?php echo $fields['resource_url']; ?>" class="button opposite btn-gray" style="margin:0;" class="med">View the full report</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>

</div>


</div>



<?php get_footer(); ?>