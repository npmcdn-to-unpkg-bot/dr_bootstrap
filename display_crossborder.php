<?php

$counties = array();

$counties[] = array(
		"img" => "canada.png",
		"index-score" => 65,
		"name" => "Canada"
	);


$counties[] = array(
		"img" => "australia.png",
		"index-score" => 52,
		"name" => "Australia"
	);


$counties[] = array(
		"img" => "japan.png",
		"index-score" => 49,
		"name" => "Japan"
	);


$counties[] = array(
		"img" => "unitedStates.png",
		"index-score" => 52,
		"name" => "United States"
	);
$counties[] = array(
		"img" => "china.png",
		"index-score" => 49,
		"name" => "China"
	);

$counties[] = array(
		"img" => "unitedKingdom.png",
		"index-score" => 65,
		"name" => "United Kingdom"
	);

$counties[] = array(
		"img" => "spain.png",
		"index-score" => 65,
		"name" => "Spain"
	);


$counties[] = array(
		"img" => "france.png",
		"index-score" => 52,
		"name" => "France"
	);


$counties[] = array(
		"img" => "netherlands.png",
		"index-score" => 49,
		"name" => "Netherlands"
	);

$counties[] = array(
		"img" => "brazil.png",
		"index-score" => 49,
		"name" => "Brazil"
	);



$things = array();

$things[] = array(
	"heading" => "Speak the language",
	"description" => "Highly optimized mechant sites present a breadth of language options – and the highest scoring sites offer at least 6 languages."
);

$things[] = array(
	"heading" => "Do the math",
	"description" => "Time is a currency that all consumers shopping the web pay attention to. The top scoring merchants provide a multitude of currencies with the best offering 11 or more currency options – the lowest ranking sites offer only a single currency."
);

$things[] = array(
	"heading" => "Play the global card game",
	"description" => "You can’t just accept local, in-country payment schemes. At a minimum, you must accept the “big 5” globally recognized and accepted payment methods: Visa, Master Card, American Express, PayPal and Diners Club."
);

$things[] = array(
	"heading" => "Keep help alive",
	"description" => "The most optimized sites gave global visitors an intuitive, easy to access way to have their questions answered on simple issues regarding product information such as clothes size conversions. Our research found that the best sites had rich online FAQ content that was easily available via search."
);

$things[] = array(
	"heading" => "Slim down checkout",
	"description" => "The sites most optimized for cross-border commerce helped customers get through checkout fast – without a lengthy, painful, page intensive process – and requiring as little data as possible."
);


				$rankings = array();

				$rankings[] = array(
					"label" => "The percentage of sites that allow for country-specific address fields",
					"percent" => true,
					"industries" => array(
							"toys" => 44,
							"travel" => 24,
							"jewelry" => 54,
							"computers" =>74,
							"health" => 94,
							"mass" => 34,
							"media" => 24,
							"apparel" => 74,
							"star" => 84
						)
				);

				$rankings[] = array(
					"label" => "The percentage of sites with 6 or more languages",
					"percent" => true,
					"industries" => array(
							"toys" => 44,
							"travel" => 54,
							"jewelry" => 54,
							"computers" =>74,
							"health" => 94,
							"mass" => 34,
							"media" => 14,
							"apparel" => 74,
							"star" => 84
						)
				);

				$rankings[] = array(
					"label" => "The percentage of sites with online help",
					"percent" => true,
					"industries" => array(
							"toys" => 44,
							"travel" => 64,
							"jewelry" => 54,
							"computers" =>74,
							"health" => 94,
							"mass" => 34,
							"media" => 24,
							"apparel" => 74,
							"star" => 84
						)
				);

				$rankings[] = array(
					"label" => "The pages to checkout",
					"percent" => false,
					"industries" => array(
							"toys" => 6,
							"travel" => 3,
							"jewelry" => 5,
							"computers" =>4,
							"health" => 9,
							"mass" => 4,
							"media" => 5,
							"apparel" => 8,
							"star" => 4
						)
				);

				$rankings[] = array(
					"label" => "The global recognized payment methods accepted",
					"percent" => false,
					"industries" => array(
							"toys" => 12,
							"travel" => 23,
							"jewelry" => 12,
							"computers" =>23,
							"health" => 18,
							"mass" => 16,
							"media" => 32,
							"apparel" => 13,
							"star" => 15
						)
				);

				$rankings[] = array(
					"label" => "The percentage of sites with 11 or more currencies",
					"percent" => true,
					"industries" => array(
							"toys" => 44,
							"travel" => 64,
							"jewelry" => 54,
							"computers" =>74,
							"health" => 94,
							"mass" => 34,
							"media" => 24,
							"apparel" => 74,
							"star" => 84
						)
				);

				$industries = array();

				$industries[] = array(
					"label" => "Specialty",
					"img" => "star.png",
					"id" => "star"
				);

				$industries[] = array(
					"label" => "Apparel / Accessories",
					"img" => "apparel.png",
					"id" => "apparel"

				);

				$industries[] = array(
					"label" => "Books / Music / Video",
					"img" => "media.png",
					"id" => "media"

				);

				$industries[] = array(
					"label" => "Mass Merchant",
					"img" => "mass.png",
					"id" => "mass"

				);

				$industries[] = array(
					"label" => "Health / Beauty",
					"img" => "health.png",
					"id" => "health"

				);

				$industries[] = array(
					"label" => "Computers / Electronics",
					"img" => "computers.png",
					"id" => "computers"

				);

				$industries[] = array(
					"label" => "Jewelry",
					"img" => "jewelry.png",
					"id" => "jewelry"

				);

				$industries[] = array(
					"label" => "Travel",
					"img" => "travel.png",
					"id" => "travel"

				);

				$industries[] = array(
					"label" => "Toys / Hobbies",
					"img" => "toys.png",
					"id" => "toys"

				);

 ?>




<div style="padding-bottom:45px; background:#00a7e1;">
	<div class="row2">
		<div class="span_12 last" style="margin-top:15px;">
			<h2 class="med white heading">Overview</h2>
		</div>
		<div class="clear"></div>
		<div class="span_4">
			<div class="section">
				<div class="white med subheading">Conducting business across borders is complex</div>
				<p class="white">It is critical to understand the local cultures and preferences of the customer — as well as the regulatory and business requirements within those countries to do business and stay compliant. The more you know about cross-border payments, the better your chances for global ecommerce success.</p>
			</div>
		</div>
		<div class="span_4">
			<div class="section">
				<div class="white med subheading">What was measured?</div>
				<p class="white">X-Border Payments Optimization Index quantifies the degree to which ecommerce companies are prepared to do business with a global customer base. This index will provide important insight into the things that merchants must do in order to be successful on a global commerce stage.</p>
			</div>
		</div>
		<div class="span_4 last">
			<div class="section">
				<div class="white med subheading">Methodology</div>
				<p class="white">This index includes in-depth research on more than 160 such players based in 10 countries. including those developed to emerging economies and spanning multiple continents. Over 60 attributes were evaluated for each and every site, covering details related to shopping, payment, shipping, information access, pricing, product and level of effort required to checkout.</p>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div style="background:#FFF; padding-bottom:30px;">
	<div class="row2">
		<div class="span_12 last" style="margin-top: 45px;">
			<h2 class="med heading">Five things every merchant needs to do</h2>
		</div>
		<?php $color = array("#007eb5", "#a8c628", "#ff5b00", "#00a7e1","#81b315"); ?>
		<div class="span_12" style="margin-top:50px;">
 			<?php foreach ($things as $key => $thing): ?>
 				<?php if($key % 2 == 0): ?>
					<div class="span_6 thing" style=" background: <?php echo $color[$key]; ?>; margin-bottom:50px;">
						<div class="number med white"><?php echo $key+1; ?></div>
						<div class="description-wrapper">
							<h3 class="white med"><?php echo $thing['heading']; ?></h3>
							<p class="white"><?php echo $thing['description']; ?></p>
						</div>
						<div class="clear"></div>
					</div>
 				<?php endif; ?>
				<?php if($key % 2 != 0): ?> 				
					<div class="span_6 thing last" style="margin-bottom:50px; background: <?php echo $color[$key]; ?>;">
						<div class="number med white"><?php echo $key+1; ?></div>
						<div class="description-wrapper">
							<h3 class="white med"><?php echo $thing['heading']; ?></h3>
							<p class="white"><?php echo $thing['description']; ?></p>
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
		<div class="clear"></div>
			<div style="margin-top:0px; padding: 30px 0px 0px; border-top: 1px solid rgba(0, 0, 0, 0.5);">
		<div class="row2" style="position:relative;">
			<div class="span_12 last" style="text-align:center;">
				<p style="margin-bottom:15px;" class="">Want to get more detailed information about the Index?</p>
				<a href="#" class="button opposite btn-gray" style="margin:0;" class="med">View the full report</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
		<div class="clear"></div>
	</div>
</div>

<div style="background:#00a7e1; padding-bottom:30px;">
<div class="row2">
	<div class="span_12 last" style="margin-top: 45px;">
		<h2 class="med white heading">Cross-border online commerce readiness and engagement by country</h2>
	</div>
	
	<div class="clear"></div>
	
 	<div class="country-wrapper" >
 	<?php foreach ($counties as $key => $country): ?>

		<div class="span_4 country" style="<?php if($key % 3 == 2){ echo "margin-right:0px;";} ?>">
			<div class='country-img-wrapper'>
				<img src="http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/img/crossborder/<?php echo $country['img']; ?>" />
			</div>
			<div class="label">
				<div class="index-score med dark-gray"><?php echo $country['index-score']; ?></div>
				<div class="country-heading med dark-gray"><?php echo $country['name']; ?></div>
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
				<a href="#" class="button opposite btn-blue" style="margin:0;" class="med white">View the full report</a>
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

			<script>var rankings = JSON.parse( '<?php echo json_encode($rankings) ?>' );</script>


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

					<?php foreach($industries as $industry): ?>

						<div class="icon">
							<img src="http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/img/crossborder/<?php echo $industry['img']; ?>" />
							<span><?php echo $industry['label']; ?></span>
							<span data-barid="<?php echo $industry['id']; ?>" class="score"></span>
						</div>

					<?php endforeach; ?>
			
					<div class="clear"></div>
				</div>


				<div class="bargraph-wrapper">


					<div class="x-val-high med">100%</div>
					<div class="x-val-medium-high med">100%</div>
					<div class="x-val-medium-low med">100%</div>
					<div class="x-val-low med">0%</div>

					<?php foreach($industries as $industry): ?>
						<div class="bar-wrapper" data-barid="<?php echo $industry['id']; ?>" ></div>
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
				<a href="#" class="button opposite btn-gray" style="margin:0;" class="med">View the full report</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>

</div>
