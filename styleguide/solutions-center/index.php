<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Digital River Online Style Guide</title>

<link rel="shortcut icon" href="/wp-content/themes/digital-river-translated/favicon.png" />
<link rel='stylesheet' id='fonts-css'  href='http://55x6d1oo46s209smp10ge1wlsl.wpengine.netdna-cdn.com/wp-content/themes/digital-river-translated/css/fonts/fonts.css?ver=1' type='text/css' media='all' />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel='stylesheet' id='dr-docs-css' href='http://55x6d1oo46s209smp10ge1wlsl.wpengine.netdna-cdn.com/wp-content/themes/digital-river-translated/css/stylesheets/_bootstrap.css?ver=7' type='text/css' media='all' />
</head>
<body>

<style>

	.interactive-grid-wrapper.container .interactive-grid .row .grid-item-wrapper.active.active-video {
	    top: 50% !important;
	    transform: translateY(-50%);
	    width: 60% !important;
	    left: 20% !important;
	    position: fixed !important;
	}

	
	.dr-mid-banner{
		border-bottom: solid 10px #f89921;
	}

	.dr-mid-banner img{
		width:100%;
	}

	.days {
	    width: 710px;
	    margin: 50px auto 20px;
	    overflow: hidden;
	    border:none;
	}

	.days .day {
	    float: left;
	    border-top: 1px solid #646469;
	    border-bottom: 1px solid #646469;
	    border-right: 1px solid #646469;
	    cursor: pointer;
	    font-family: 'DIN 1451 W01 Engschrift';
	}

	.days .day:hover{
		background:#EEE;
	}

	.days .day:first-child {
	    border-left: 1px solid #646469;
	}
	.days .day a{
		text-decoration: none;
	    padding: 10px 0;
	    display: block;
	}

	.days .day.active a{
		margin:0;
	}

	.days .day.active a .day-title{
		color:#FFF;
	}

	.days .day.active {
	    background: #00a7e1;
	    border-color:#007eb5;
	}

	.days .day.active:hover {
		background: #00a7e1;
		cursor: auto;
	} 

	.days .day .day-title {
	    width: 201px;
	    font-size: 27px;
	    text-align: center;
	    display: block;
	    color: #646469;
	}

	.close{
	    color: #000;
    	opacity: 1;
	    filter: alpha(opacity=100);
	}

	.close .fa{
		text-shadow: 0px 0px 2px #FFF;
	}

</style>



<?php

// error_reporting(E_ALL);
// ini_set("display_errors", 1);

function create_grid($headline, $grid){
 
    echo '<div class="slide">';
        echo '<div class="interactive-grid-wrapper container">';
            echo '<div class=" interactive-grid">';
                echo '<div class="row">';
                foreach ($grid as $key => $grid_item):
                	if($grid_item['url']):
                		echo '<a target="_blank" href="'.$grid_item['url'].'">';
                	endif;
                    echo '<div class=" ';
                    echo ($grid_item['video'])? ' active-video ':' active-md ';
                    echo $grid_item['width'] . ' interact-wrapper ';
                	if($grid_item['description'] || $grid_item['video']){
        	            echo ' interact ';
					}            
                    echo ' grid-item-wrapper" >';
                        echo '<div class="grid-item option ' . $grid_item['height'];
                        echo ($grid_item['video'])? ' embed-responsive embed-responsive-16by9 ':'';
                        echo ' ">';
                            if($grid_item['icon']):
                                echo '<div class="expand hide-on-expand"><i class="'.$grid_item['icon'].'"></i></div>';
                            endif;

                            echo '<div class="background-image" style="background-image:url('.$grid_item['background_image'].');"></div>';
                            echo '<div class="close"><i class="fa fa-times"></i></div>';


                            if($grid_item['video']){
                                  echo '<i class="video-play dr-player x15"></i>';
                                  echo '<iframe class="video embed-responsive-item" style="width: 100%; height: 100%;" id="'.$grid_item['video_pretty_id'].'" src="https://player.vimeo.com/video/'.$grid_item['video_id'].'?api=1&amp;player_id='.$grid_item['video_pretty_id'].'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
                            }else{
                                  echo "<div class='headline-wrapper'>";
                                      echo "<div class='headline'>";
                                          echo $grid_item['title'];
                                      echo "</div>";
                                  echo "</div>";
                            	if($grid_item['description']){
                                	echo "<div class='description'>";
                                    	  echo $grid_item['description'];
                                  	echo "</div>";
	                            }
                            }
                        echo '</div>';
                    echo '</div>';
                	if($grid_item['url']):
                		echo '</a>';
                	endif;
                endforeach;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
}
?>
<div class="dr-mid-banner"><img src="http://www.goglobalocity.com/wp-content/uploads/2016/01/1920-x-351.jpg" alt=""></div>
<div class="container">
	<div class="row">



<?php
$grid = array();

$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '63328700',
				"video_pretty_id" => 'greater-possibilities',
				"background_image" => "img/greaterpossibilities.jpg",
			);

$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Forrester<br>Accelerate Global Growth While<br>Reducing Risk Report',
				"url" => 'http://www.digitalriver.com/solutions/payments/mobile-payments-value-brief/',
				"background_image" => "img/china.jpg",
			);
$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Strategies to Maximize the Effectiveness of<br>your Online Merchandising and Promotions Plan',
				"url" => 'http://info.digitalriver.com/rs/digitalriver/images/White_Paper_Digital_River_Effective_Merchandising_and_Promotions.pdf',
				"background_image" => "img/online_shopping4.jpg",
			);



$grid["commerce"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Empowering International Expansion',
				"url" => 'http://info.digitalriver.com/rs/348-QUY-258/images/Empowering International eCommerce Expansion 100915.pdf',
				"background_image" => "img/global_fulfillment.jpg",
			);


$grid["commerce"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Global Strategies<br>for Your Online Business<br>Whitepaper',
				"url" => 'http://info.digitalriver.com/rs/348-QUY-258/images/Commerce - Digital River White Paper Global Strategies for Your Online Business.pdf',
				"background_image" => "img/thinking.jpg",
			);

$grid["commerce"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Be Direct<br>Why a Direct to Consumer Online<br>Channel is Right for Your Business',
				"url" => 'http://info.digitalriver.com/rs/348-QUY-258/images/Be Direct - Why A Direct To Consumer Online Channel Is Right For Your Business.pdf',
				"background_image" => "img/online_shopping5.jpg",
			);


$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '129235671',
				"video_pretty_id" => 'gc-cababilities',
				"background_image" => "img/global.jpg",
			);

$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '158673309',
				"video_pretty_id" => 'smartchannel',
				"background_image" => "img/smartchannel.jpg",
			);




$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Direct to Consumer<br>Opportunities and Challenges<br>Whitepaper',
				"url" => 'http://info.digitalriver.com/rs/348-QUY-258/images/Direct to Consumer Challenges.pdf',
				"background_image" => "img/using_tablet.jpg",
			);

$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Strategies to Support<br>Customer Centricity and<br>Reduce Channel Conflict',
				"url" => 'http://www.digitalriver.com/solutions/commerce/d2c-retail-strategies-guide/',
				"background_image" => "img/meeting2.jpg",
			);


$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '160607511',
				"video_pretty_id" => 'branded-manufacturing',
				"background_image" => "img/branded_manufacturing.jpg",
			);


$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Channel Lead Management<br>Value Brief',
				"url" => 'http://www.digitalriver.com/solutions/commerce/channel-lead-management-value-brief/',
				"background_image" => "img/working_together.jpg",
			);

$grid["commerce"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Commerce Business Infrastructure<br>Infographic',
				"url" => 'http://www.digitalriver.com/marketing_material/cbi-infographic/',
				"background_image" => "img/online_shopping5.jpg",
			);


$grid["commerce"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Digital River<br>Brands Go Global<br>2015 Report',
				"url" => '#',
				"background_image" => "img/meeting_4.jpg",
			);






$grid["commerce"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Roadmap to Take Your<br>Brand Online',
				"url" => 'http://www.digitalriver.com/marketing_material/roadmap-to-taking-your-brand-online/',
				"background_image" => "img/working.jpg",
			);


$grid["commerce"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'MyCommerce:<br>The right ecommerce solution for your digital business',
				"url" => 'http://www.digitalriver.com/solutions/mycommerce-value-brief/',
				"background_image" => "img/collaboration.jpg",
			);



$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '160008827',
				"video_pretty_id" => 'mycommerce-self-service',
				"background_image" => "img/mycommerce.jpg",
			);

$grid["commerce"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Grow revenue by<br>extending ecommerce to<br>your partner channel',
				"url" => 'http://www.digitalriver.com/solutions/commerce/smartchannel-overview-value-brief/',
				"background_image" => "img/meeting.jpg",
			);



$headline ="";


$grid["payments"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '63328700',
				"video_pretty_id" => 'greater-possibilities',
				"background_image" => "img/greaterpossibilities.jpg",
			);


$grid["payments"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Mobile Device Payment Page<br>Value Brief',
				"url" => 'http://www.digitalriver.com/solutions/payments/mobile-payments-value-brief/',
				"background_image" => "img/using_phone.jpg",
			);

$grid["payments"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Many Ways to Pay<br>Whitepaper',
				"url" => 'http://info.digitalriver.com/rs/348-QUY-258/images/Payments - Digital River White Paper Many Ways to Pay.pdf',
				"background_image" => "img/online_shopping3.jpg",
			);

$grid["payments"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'DRWP Payment Capabilities<br>Infographic',
				"url" => 'http://www.digitalriver.com/marketing_material/drwp-capabilities-infographic-2/',
				"background_image" => "img/online_shopping4.jpg",
			);

$grid["payments"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Subscription Solutions<br>Flexible Term Renewals<br>Value Brief',
				"url" => 'http://www.digitalriver.com/solutions/commerce/subscription-solutions-flexible-term-renewals-value-brief/',
				"background_image" => "img/online_shopping5.jpg",
			);

$grid["payments"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Subscription Solutions<br>Metered Renewals<br>Value Brief',
				"url" => 'http://www.digitalriver.com/solutions/commerce/subscription-solutions-metered-renewals-value-brief/',
				"background_image" => "img/working.jpg",
			);



$grid["payments"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Subscription Solutions Overview<br>Value Brief',
				"url" => 'http://www.digitalriver.com/solutions/commerce/subscription-solutions-overview-value-brief/',
				"background_image" => "img/online_shopping.jpg",
			);



$grid["payments"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Forrester Wave<br>Subscription Billing',
				"url" => 'http://info.digitalriver.com/rs/348-QUY-258/images/Payments -Forrester Wave_Subscription Billing.pdf',
				"background_image" => "img/meeting.jpg",
			);


$grid["payments"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '160275550',
				"video_pretty_id" => 'billing-solutions',
				"background_image" => "img/billingsolutions.jpg",
			);

$grid["payments"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '129235671',
				"video_pretty_id" => 'gc-cababilities',
				"background_image" => "img/global.jpg",
			);


$grid["payments"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'World Payments Overview<br>Value Brief',
				"url" => 'http://www.digitalriver.com/solutions/payments/digital-river-world-payments-overview-value-brief/',
				"background_image" => "img/cityscape.jpg",
			);



$grid["payments"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Accelerate Payment Program Profitability',
				"url" => 'http://www.digitalriver.com/solutions/payments/accelerate-payment-program-profitability-value-brief/',
				"background_image" => "img/meeting2.jpg",
			);


$grid["payments"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Transforming the Payment<br>Experience Into a Sales Tool',
				"url" => 'http://www.digitalriver.com/marketing_material/payment-experience-white-paper/',
				"background_image" => "img/meeting_3.jpg",
			);

$grid["payments"][] = array(
				"width" => 'col-lg-4 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Drive Conversion<br>with Page Optimizer',
				"url" => 'http://www.digitalriver.com/solutions/payments/page-optimizer-value-brief/',
				"background_image" => "img/online_shopping3.jpg",
			);

$grid["marketing"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '129235671',
				"video_pretty_id" => 'gc-cababilities',
				"background_image" => "img/global.jpg",
			);



$grid["marketing"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'MarketForce Customer<br>Centricity Infographic',
				"url" => 'http://www.digitalriver.com/marketing_material/marketforce-customer-centricity-infographic/',
				"background_image" => "img/online_shopping5.jpg",
			);

$grid["marketing"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Search Marketing',
				"url" => 'http://www.digitalriver.com/solutions/marketing/search-marketing-value-brief/',
				"background_image" => "img/online_shopping4.jpg",
			);



$grid["marketing"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '159538403',
				"video_pretty_id" => 'digital-marketing-services',
				"background_image" => "img/marketforce.jpg",
			);
$grid["marketing"][] = array(
				"width" => ' col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'MarketForce Overview',
				"url" => 'http://www.digitalriver.com/solutions/marketing/marketforce-overview-value-brief/',
				"background_image" => "img/meeting2.jpg",
			);

$grid["marketing"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'MarketForce Customer<br>Journey Infographic',
				"url" => 'http://www.digitalriver.com/marketing_material/marketforce-customer-journey-2/',
				"background_image" => "img/using_tablet.jpg",
			);



$grid["marketing"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Effective Merchandising<br>and Promotions Whitepaper',
				"url" => 'http://digitalriver.staging.wpengine.com/marketing_material/htc-success-story/',
				"background_image" => "img/working_together.jpg",
			);



$grid["marketing"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '159354924',
				"video_pretty_id" => 'private-stores',
				"background_image" => "img/private_stores.jpg",
			);

$grid["marketing"][] = array(
				"width" => 'col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"height" => 'double-height',
				"video" => true,
				"video_id" => '63328700',
				"video_pretty_id" => 'greater-possibilities',
				"background_image" => "img/greaterpossibilities.jpg",
			);




$grid["marketing"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Client Success Team',
				"url" => 'http://www.digitalriver.com/solutions/commerce/client-success-team-value-brief/',
				"background_image" => "img/meeting_2.jpg",
			);




$grid["marketing"][] = array(
				"width" => 'col-lg-3 col-sm-6 col-xxs-12',
				"icon" => 'fa fa-plus',
				"title" => 'Email Marketing',
				"url" => 'http://www.digitalriver.com/solutions/marketing/email-marketing-value-brief/',
				"background_image" => "img/online_shopping3.jpg",
			);







?>
<ul class="days">
	<li class="day <?php echo ( $_GET['category'] == "commerce" || !isset($_GET['category']) )? " active " : null; ?>" data-number="0"><a href="?category=commerce"><span class="day-title">Commerce</span></a></li>
	<li class="day <?php echo ( $_GET['category'] == "payments")? " active " : null; ?>" data-number="1"><a href="?category=payments"><span class="day-title">Payments</span></a></li>
	<li class="day <?php echo ( $_GET['category'] == "marketing")? " active " : null; ?>" data-number="2"><a href="?category=marketing"><span class="day-title">Marketing</span></a></li>
</ul>

<?php create_grid($headline, $grid[$_GET['category']]); ?>


			
<script type='text/javascript' src='http://digitalriver.staging.wpengine.com/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://digitalriver.staging.wpengine.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='http://digitalriver.staging.wpengine.com/wp-content/plugins/video_slider//js/jquery.vimeo.api.js?ver=1.0.0'></script>
<script>

  jQuery(document).ready(function($){

    $('.interactive-grid').packery({
	  itemSelector: '.interact-wrapper',
	  gutter: 0
	});
    

	$(document).on("click", ".interact", function(){
		var $this = $(this);
		var $this_grid = $this.parents(".interactive-grid");

		$this.parents(".interactive-grid-wrapper").addClass("active");

		if($this_grid.find(".grid-item-wrapper.active").length > 0){
		  close_grid_item($this_grid.find(".grid-item-wrapper.active"));
		  $this.parents(".interactive-grid-wrapper").addClass("active");
		}

		$(".grid-item-wrapper").not(this).each(function(){
		  if($(this).hasClass("active")){
		      $(this).removeClass("active");
		  }
		});
		$this.clone().insertAfter($this).addClass("placeholder").find(".grid-item").empty();

		$this.addClass("active");
		$this.toggleClass("interact");
	});

  var close_grid_item = function($this_grid_item){

      $this_grid_item.parents(".interactive-grid-wrapper").removeClass("active");

      var left = $(".interactive-grid").find(".placeholder").css("left");
      var top = $(".interactive-grid").find(".placeholder").css("top");

      $this_grid_item.css({left:left, top:top});
      $this_grid_item.removeClass("active");
      $this_grid_item.addClass("interact");

      $("iframe.video").each(function(){
        $("#"+$(this).attr("id")).vimeo("pause");
      });

      $(".interactive-grid").find(".placeholder").remove();
      $grid.packery('reloadItems');

  }
  $(document).on("click",".interactive-grid .active .close", function(){
      close_grid_item($(this).parents(".grid-item-wrapper"));
  });

  var resizeTimer;
  $(window).on('resize', function(e) {

    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      $grid.packery("layout");
    }, 250);

  });

});

</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script type='text/javascript' src='https://npmcdn.com/packery@2.0/dist/packery.pkgd.min.js?ver=1'></script>
</body>
</html>