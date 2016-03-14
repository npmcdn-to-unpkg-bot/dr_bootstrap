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
				"width" => 'col-sm-6',
				"title" => '<span color="black">Consumer</span> <span color="blue">Goods</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);
$grid[] = array(
				"width" => 'col-sm-6',
				"title" => '<span color="black">Consumer</span> <span color="blue">Electronics</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);

$grid[] = array(
				"width" => 'col-sm-6',
				"title" => '<span color="black">Sporting</span> <span color="blue">Goods</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);

$grid[] = array(
				"width" => 'col-md-4 col-sm-6',
				"title" => '<span color="black">Consumer</span> <span color="blue">Electronics</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);

$grid[] = array(
				"width" => 'col-md-4 col-sm-6',
				"title" => '<span color="black">Sporting</span> <span color="blue">Goods</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);

$grid[] = array(
				"width" => 'col-md-4 col-sm-6',
				"title" => '<span color="black">Consumer</span> <span color="blue">Electronics</span>',
				"background_image" => "Transform your brand with a direct to consumer experience.",
			);

create_grid($headline, $grid);


?>
<?php get_footer(); ?>

