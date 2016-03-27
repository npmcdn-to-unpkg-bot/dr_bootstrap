<?php
/**
 * Template Name: Template Branded
 */
?>
<?php get_header(); ?>

<?php
/**
 * Functions hooked in to homepage action
 *
 * @hooked advanced_master_header   - 10
 * @hooked lists - 20
 * @hooked four_boxes - 30
 * @hooked display_tags    - 40
 */
?>
<?php /* do_action( 'branded' );  */ ?>
<?php
$sub_heading = "Take Control of your Destiny";
$supporting_copy = "Transform your brand with a direct to consumer experience.";
advanced_master_header($sub_heading, $supporting_copy);


$headline = "Key Segments We Support";
$boxes[] = array(
				"title" => '<span color="black">Consumer</span> <span color="blue">Electronics</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);
$boxes[] = array(
				"title" => '<span color="black">Housewares</span><br><span color="blue">and Appliances</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);
$boxes[] = array(
				"title" => '<span color="black">Consumer</span> <span color="blue">Goods</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);
$boxes[] = array(
				"title" => '<span color="black">Sporting</span> <span color="blue">Goods</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);
boxes($headline, $boxes);


$sub_heading = "Increase customer satisfaction. Reduce channel conflict.";
$supporting_copy = "There is a misperception that a direct to consumer channel will compete with your retail channel. In fact, these two channels can coexist in harmony and support each other. To generate the greatest revenue opportunity, global brand growth and customer lifetime value, it’s important to define the specific purposes and implement sales strategies for both. Read the following materials for insights on how to own your brand experience and control a positive relationship with your shoppers through your direct channel, while fostering a healthy relationship with your retailers.";
$tags[] = array(
			'title' => 'Brands Learn More by Selling Direct',
			'new_tab' => false,
			'link' => '#'
		);

$tags[] = array(
			'title' => 'Unintended Consequences of a Channel Friendly Approach',
			'new_tab' => false,
			'link' => '#'
		);

$tags[] = array(
			'title' => 'Why Branded Manufacturers Are Starting a D2C Channel',
			'new_tab' => false,
			'link' => '#'
		);

$tags[] = array(
			'title' => 'Be Direct – Why A D2C Channel is Right for Your Business',
			'new_tab' => false,
			'link' => '#'
		);

$tags[] = array(
			'title' => 'Direct to Consumer Opportunities & Challenges',
			'new_tab' => false,
			'link' => '#'
		);
display_tags($sub_heading, $supporting_copy, $tags);


$headline = "Key Segments We Support";
$grid[] = array(
				"height" => 'double-height',
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
						<li>Merchant and Seller of Record<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-merchant-and-seller-of-record-value-brief/">Learn more</a></li>
						<li>Local entities</li>
						<li>Risk management<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/risk-management-value-brief-page/">Learn more</a></li>
						<li>Financial reconciliation</li>
						<li>Tax collection & filing<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-global-tax-services-value-brief/">Learn more</a></li>
						<li>Foreign exchange<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-foreign-exchange-value-brief/">Learn more</a></li>
						<li>Legal compliance</li>
						<li>Global payment processing<a class="pull-right" href="http://www.digitalriver.com/marketing_material/global-commerce-payment-capabilities-infographic/">Learn more</a></li>
				</ul>',
				"title" => 'Commerce-driven<br>Digital Marketing',
				"background_image" => get_template_directory_uri()."/img/grid/working_on_a_laptop.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
						<li>Merchant and Seller of Record<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-merchant-and-seller-of-record-value-brief/">Learn More</a></li>
						<li>Local entities</li>
						<li>Risk management<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/risk-management-value-brief-page/">Learn more</a></li>
						<li>Financial reconciliation</li>
						<li>Tax collection & filing<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-global-tax-services-value-brief/">Learn more</a></li>
						<li>Foreign exchange<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-foreign-exchange-value-brief/">Learn More</a></li>
						<li>Legal compliance</li>
						<li>Global payment processing<a class="pull-right" href="http://www.digitalriver.com/marketing_material/global-commerce-payment-capabilities-infographic/">Learn More</a></li>

				</ul>',
				"title" => 'Order Management<br>&amp; Fulfillment',
				"background_image" => get_template_directory_uri()."/img/grid/global_fulfillment.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
					<li>Store administrative tools</li>
					<li>Advanced shopping cart features</li>
					<li>Product information management</li>
					<li>User management</li>
					<li>Data asset management</li>
					<li>Configurable pricing</li>
					<li>Channel partner management<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/smartchannel-overview-value-brief/">Learn More</a></li>
					<li>Where to buy retailer referrals<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/channel-lead-management/">Learn More</a></li>
					<li>Comprehensive reporting</li>
				</ul>',
				"title" => 'Commerce-driven<br>Digital Marketing',
				"background_image" => get_template_directory_uri()."/img/grid/meeting.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-4 col-xs-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
									<li>Advanced merchandising tools</li>
									<li>Promotions</li>
									<li>Dynamic web content management </li>
									<li>Localization</li>
									<li>Product recommendation& personalization</li>
									<li>Searchandizing </li>
									<li><a href="http://www.digitalriver.com/solutions/commerce/private-stores-value-brief/">Private stores</a></li>
									<li>Search engine optimization</li>
									<li>A/B testing</li>
								</ul>',
				"title" => 'Shopper Experience<br>Optimization',
				"background_image" => get_template_directory_uri()."/img/grid/working_together.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-4 col-xs-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
									<li>Order orchestration</li>
									<li>Tax calculations</li>
									<li>Fraud management<a class="pull-right" href="http://www.digitalriver.com/solutions/payments/risk-management-and-fraud/">Learn more</a></li>
									<li>Inventory management</li>
									<li>Physical fulfillment<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/physical-fulfillment-ecosystem-value-brief/">Learn More</a></li>
									<li>Customer service support plans<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/customer-service-value-brief/">Learn more</a></li>
									<li>Subscriptions & recurring billing<a class="pull-right" href="http://www.digitalriver.com/solutions/commerce/subscription-solutions/">Learn more</a></li>
								</ul>',
				"title" => 'Commerce Business<br>Infrastructure',
				"background_image" => get_template_directory_uri()."/img/grid/working_on_a_laptop.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-4 col-xs-6 col-xxs-12',
				"description" => '<ul>
									<li>Conversion & customer LTV strategies<a class="pull-right" href="http://www.digitalriver.com/marketing_material/marketforce-customer-journey-2/">Learn more</a></li>
									<li>Advanced analytics</li>
									<li>Creative design & UX services</li>
									<li>Site optimization </li>
									<li>Usability testing</li>
									<li>Search engine marketing</li>
									<li>Targeted emails</li>
									<li>Affiliate marketing</li>
									<li>Display & retargeting advertising</li>
									<li>CRM strategies</li>
									<li>Loyalty programs</li>
								</ul>',
				"title" => 'Self-service<br>commerce managment',
				"background_image" => get_template_directory_uri()."/img/grid/tablet.jpg",
			);

create_grid($headline, $grid);


?>
<?php get_footer(); ?>

