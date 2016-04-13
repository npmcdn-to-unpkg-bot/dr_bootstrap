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
$sub_heading = "Take Control of Your Destiny";
$supporting_copy = "Transform your brand with a direct to consumer experience.";
advanced_master_header($sub_heading, $supporting_copy);


$headline = "Go Direct. Go Global.";
$descriptions = array();
$descriptions[] = "For more than 20 years, Digital River has partnered with consumer electronics, housewares and appliances, apparel and other consumer goods brands to launch and maintain successful ecommerce sites. We support leading manufacturers like Microsoft, Samsung, Lenovo, HTC, Jabra, BlackBerry, Furla and Electrolux to help them control their brand experience, amplify their customer relationships, and drive significant revenue from direct to consumer online transactions around the world.";
$descriptions[] = "Rise above the rest—expand into any region to build your global brand. Deliver the right localized experience for each region with local payment methods, tailored content, regional promotions and marketing campaigns to sell effectively for each locale. There are no limits to your global reach and revenue potential.";

$boxes = array();
$boxes[] = array(
				"heading" => "Expand into new global markets",
				"description" => 	'<ul class="bullet-list">
										<li>244 countries and territories where we do business</li>
										<li>18 local entities to support local payment processing</li>
										<li>190+ bank connections around the world</li>
									</ul>'
			);
$boxes[] = 	array(
				"heading" => "Localize the shopper experience",
				"description" => 	'<ul class="bullet-list">
										<li>26 display languages</li>
										<li>108 display currencies &amp; 46 transactable currencies</li>
										<li>1,100+ experts in 22 offices around the world</li>
									</ul>'
			);
$boxes[] = 	array(
				"heading" => "Deliver physical merchandise around the world",
				"description" => 	'<ul class="bullet-list">
										<li>65+ pre-integrated global warehouse locations</li>
										<li>Multi-sourcing cross-border infrastructure</li>
										<li>2.5 million shipments to over 100 countries a year</li>
									</ul>'
			);

three_column_boxes($headline, $descriptions, $boxes);


$headline = "Key Segments We&nbsp;Support";

$boxes = array();
$boxes[] = array(
				"alt" => 'Consumer Electronics',
				"background_image" => get_template_directory_uri()."/img/grid/consumer-electronics.jpg",
				"description" => 'Expand your sales opportunity beyond the walls of big box retailers. Control your brand experience and sell your phones, televisions, laptops, tablets, cameras, stereos, digital fitness trackers, headsets and other electronics directly to customers.'
			);
$boxes[] = array(
				"alt" => 'Housewares and Appliances',
				"background_image" => get_template_directory_uri()."/img/grid/housewares-appliances.jpg",
				"description" => 'Tap into key market segments to expand brand awareness and exposure to your products. Increase sales of your home appliances, cookware, décor and furnishings, gardening equipment and other household items with a direct to consumer online channel.'
			);
$boxes[] = array(
				"alt" => 'Consumer Goods',
				"background_image" => get_template_directory_uri()."/img/grid/consumer-goods.jpg",
				"description" => 'Harness the power of selling direct to escalate sales growth of watches, apparel, handbags, sunglasses, containers, durable goods and other popular consumer items from nearly anywhere in the world. Stand out from your competition by creating a superior brand experience.'
			);
$boxes[] = array(
				"alt" => 'Sporting Goods',
				"background_image" => get_template_directory_uri()."/img/grid/sporting-goods.jpg",
				"description" => 'Own the relationship with your shoppers and gain a deeper understanding of consumer behavior for your sporting and fitness equipment, athletic apparel and outdoors outfitter merchandise to offer your shoppers access to your brand with the convenience of purchasing online.'
			);
boxes($headline, $boxes);


$sub_heading = "Increase customer satisfaction. Reduce channel conflict.";
$descriptions = array();
$descriptions[] = "There is a misperception that a direct to consumer channel will compete with your retail channel. In fact, these two channels can coexist in harmony and support each other. To generate the greatest revenue opportunity, global brand growth and customer lifetime value, it’s important to define the specific purposes and implement sales strategies for both. Read the following materials for insights on how to own your brand experience and control a positive relationship with your shoppers through your direct channel, while fostering a healthy relationship with your retailers.";
$tags[] = array(
			'title' => 'Brands Learn More by Selling Direct',
			'new_tab' => false,
			'link' => '/brands-learn-more-by-selling-direct/'
		);

$tags[] = array(
			'title' => 'Unintended Consequences of a Channel Friendly&nbsp;Approach',
			'new_tab' => false,
			'link' => '/the-unintended-consequences-of-a-channel-friendly-approach/'
		);

$tags[] = array(
			'title' => 'Why Branded Manufacturers Are Starting a D2C&nbsp;Channel',
			'new_tab' => false,
			'link' => '/our-company/newsroom/press-release/digital-river-commissioned-study-explores-why-more-branded-manufacturers-are-opening-direct-to-consumer-ecommerce-channels/'
		);

$tags[] = array(
			'title' => 'Be Direct – Why A D2C Channel is Right for Your&nbsp;Business',
			'new_tab' => false,
			'link' => 'http://info.digitalriver.com/FY14Q2_Drip_Misc-assets_LP-whitepaper_Forrester_Why-Going-Direct-Benefits-Every-Channel.html?campaign_source=&campaign_medium=Website&Lead_source=Website&_ga=1.163542453.825245199.1454351169'
		);

$tags[] = array(
			'title' => 'Direct to Consumer Opportunities &amp;&nbsp;Challenges',
			'new_tab' => false,
			'link' => 'http://info.digitalriver.com/FY14Q2_Drip_Misc-assets_LP-whitepaper_Forrester_Why-Going-Direct-Benefits-Every-Channel.html?campaign_source=&campaign_medium=Website&Lead_source=Website&_ga=1.163542453.825245199.1454351169'
		);
display_tags($sub_heading, $descriptions, $tags);


$headline = "Solutions Tailored to Your Business";
// $grid[] = array(
// 				"height" => 'double-height',
// 				"width" => 'col-sm-6 col-xxs-12',
// 				"icon" => 'fa fa-plus',
// 				"description" => '<ul>
// 						<li>Merchant and Seller of Record <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-merchant-and-seller-of-record-value-brief/">Learn more</a></li>
// 						<li>Local entities</li>
// 						<li>Risk management <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/risk-management-value-brief-page/">Learn more</a></li>
// 						<li>Financial reconciliation</li>
// 						<li>Tax collection &amp; filing <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-global-tax-services-value-brief/">Learn more</a></li>
// 						<li>Foreign exchange <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-foreign-exchange-value-brief/">Learn more</a></li>
// 						<li>Legal compliance</li>
// 						<li>Global payment processing <a target="_blank" href="http://www.digitalriver.com/marketing_material/global-commerce-payment-capabilities-infographic/">Learn more</a></li>
// 				</ul>',
// 				"title" => 'Commerce-driven<br> Digital Marketing',
// 				"background_image" => get_template_directory_uri()."/img/grid/working_on_a_laptop.jpg",
// 			);


$grid[] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '160607511',
				"video_pretty_id" => 'branded',
				"background_image" => get_template_directory_uri()."/img/grid/branded_video.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
						<li>Merchant and Seller of Record <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-merchant-and-seller-of-record-value-brief/">Learn More</a></li>
						<li>Local entities</li>
						<li>Risk management <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/risk-management-value-brief-page/">Learn more</a></li>
						<li>Financial reconciliation</li>
						<li>Tax collection &amp; filing <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-global-tax-services-value-brief/">Learn more</a></li>
						<li>Foreign exchange <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/commerce-business-infrastructure-foreign-exchange-value-brief/">Learn More</a></li>
						<li>Legal compliance</li>
						<li>Global payment processing <a target="_blank" href="http://www.digitalriver.com/marketing_material/global-commerce-payment-capabilities-infographic/">Learn More</a></li>
				</ul>',
				"title" => 'Order Management<br> &amp; Fulfillment',
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
					<li>Channel partner management <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/smartchannel-overview-value-brief/">Learn More</a></li>
					<li>Where to buy retailer referrals <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/channel-lead-management/">Learn More</a></li>
					<li>Comprehensive reporting</li>
				</ul>',
				"title" => 'Commerce-driven<br> Digital Marketing',
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
									<li>Product recommendation &amp; personalization</li>
									<li>Searchandizing </li>
									<li>Private stores <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/private-stores-value-brief/">Learn more</a></li>
									<li>Search engine optimization</li>
									<li>A/B testing</li>
								</ul>',
				"title" => 'Shopper Experience<br> Optimization',
				"background_image" => get_template_directory_uri()."/img/grid/working_together.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-4 col-xs-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
									<li>Order orchestration</li>
									<li>Tax calculations</li>
									<li>Fraud management <a target="_blank" href="http://www.digitalriver.com/solutions/payments/risk-management-and-fraud/">Learn more</a></li>
									<li>Inventory management</li>
									<li>Physical fulfillment <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/physical-fulfillment-ecosystem-value-brief/">Learn More</a></li>
									<li>Customer service support plans <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/customer-service-value-brief/">Learn more</a></li>
									<li>Subscriptions &amp; recurring billing <a target="_blank" href="http://www.digitalriver.com/solutions/commerce/subscription-solutions/">Learn more</a></li>
								</ul>',
				"title" => 'Commerce Business<br> Infrastructure',
				"background_image" => get_template_directory_uri()."/img/grid/working_on_a_laptop.jpg",
			);

$grid[] = array(
				"width" => 'col-sm-4 col-xs-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"description" => '<ul>
									<li>Conversion &amp; customer LTV strategies <a target="_blank" href="http://www.digitalriver.com/marketing_material/marketforce-customer-journey-2/">Learn more</a></li>
									<li>Advanced analytics</li>
									<li>Creative design & UX services</li>
									<li>Site optimization </li>
									<li>Usability testing</li>
									<li>Search engine marketing</li>
									<li>Targeted emails</li>
									<li>Affiliate marketing</li>
									<li>Display &amp; retargeting advertising</li>
									<li>CRM strategies</li>
									<li>Loyalty programs</li>
								</ul>',
				"title" => 'Self-service<br> commerce managment',
				"background_image" => get_template_directory_uri()."/img/grid/tablet.jpg",
			);

create_grid($headline, $grid);


$headline = "We Support Some of the World’s Leading Brands";

$clients = array();
$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/lenovo.png",
				"alt" => "Lenovo Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/samsung.png",
				"alt" => "Samsung Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/western-digital.png",
				"alt" => "Western Digital Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/logitech.png",
				"alt" => "Logitech Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/microsoft.png",
				"alt" => "Microsoft Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/panasonic.png",
				"alt" => "Panasonic Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/seagate.png",
				"alt" => "Seagate Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/pmi.png",
				"alt" => "PMI Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/htc.png",
				"alt" => "HTC Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/Blackberry.png",
				"alt" => "BlackBerry Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/Furla.png",
				"alt" => "Furla Logo"
			);

$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/electrolux.png",
				"alt" => "Electrolux Logo"
			);


$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/jabra.png",
				"alt" => "Jabra Logo"
			);


$clients[] = array(
				"src" => get_template_directory_uri()."/img/grid/clients/razer.png",
				"alt" => "Razer Logo"
			);

clients_section($headline, $clients);
?>
<style>
.client_quote_box.flexslider, .owl-stage, .owl-stage-outer {
    height: 255px !important;
}
</style>
<style>
	.resources-wrapper{overflow:hidden;}
</style>
<?php
initResourcesSection();
$headline = 'Ready to go direct?';
$copy = array();
$copy[] = 'Every brand is unique. We look forward to talking to you about yours. Together, we will tailor your ecommerce experience for the right go-to-market approach.';
contact_us($headline, $copy);

?>
<?php get_footer(); ?>

