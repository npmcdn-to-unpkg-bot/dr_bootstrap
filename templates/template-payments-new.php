<?php
/**
 * Template Name: Template NEW Payments
 */
?>
<?php get_header(); ?>


<div class="payments-wrapper">
	<div class="top custom custom-payments slide">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-5 col-sm-6">
					<h1 class="eyebrow option no-margin"><?php echo get_the_title(); ?></h1>
					<h2><?php _e("No limits. No boundaries.", "digital-river"); ?></h2>
					<p><?php _e("Digital River World Payments has the deepest portfolio of local processing solutions around the world and the global expertise to help you expand into emerging markets.", "digital-river"); ?></p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="white-bg  slide text-center">
		<div class="container">
			<h2><?php _e( 'Go Global With Digital River World Payments', 'digital-river' ); ?></h2>
			<p><?php _e( 'As you look to expand into new markets, put your business in a position to maximize profitability with a world-class payments partner. Digital River World Payments (DRWP) will help you go to market fast, with the right local payment options to be successful wherever you sell. Partnering with DRWP for your global payment processing is a smart choice, enabling you to easily navigate the complexities and risks of doing business across borders. We are your one-stop shop for accepting payments in new markets around the world. With our reliable, secure, and flexible payments platform, there’s no limit to your success.', 'digital-river' ); ?></p>
			
			<p class="col-lg-offset-1 col-lg-10 ">

				<img class="img-responsive visible-lg" src="<?php echo get_template_directory_uri()."/img/payments/grid-lines-lg.png"; ?>" />
				<img class="img-responsive visible-md" src="<?php echo get_template_directory_uri()."/img/payments/grid-lines-md.png"; ?>" />
			</p>

			<div class="row med-gray-color">
				<div class="col-sm-4">
					<div><i class="dr-cards x10"></i></div>
					<h3 class="h4 option uppercase"><?php _e("Global Payment Methods","digital-river"); ?></h3>
				</div>
				<div class="col-sm-4">
					<div><i class="dr-globe x10"></i></div>
					<h3 class="h4 option uppercase"><?php _e("Global Gateway","digital-river"); ?></h3>
				</div>
				<div class="col-sm-4">
					<div><i class="dr-payments x10"></i></div>
					<h3 class="h4 option uppercase"><?php _e("Multi-National Card Acquiring", "digital-river"); ?></h3>
				</div>
			</div>
		</div>
	</div>
	<div class="lgray-bg slide ">
		<div class="container">
			<div class="row">
				<h2 class="text-center option xtra-margin-btm"><?php _e("Featured Capabilities","digital-river"); ?></h2>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-md-3">
							<img width="50px" class="img-responsive" src="<?php echo get_template_directory_uri()."/img/payments/brazil.png"; ?>" />
						</div>
						<div class="col-md-9 ">
							<h3 class="h4 option no-top-margin"><?php _e("Don’t Miss Out On The Booming Business in Brazil", "digital-river"); ?></h3>
						</div>
					</div>
					<p><?php _e("Whether you have a local entity in Brazil or not, we can increase your revenue potential substantially in the largest ecommerce market in Latin America. We’ll provide a turn-key solution that enables local card processing and popular local payment methods such as Boleto Bancario. Our team of local experts will help you understand the Brazilian payments landscape and maximize your profit potential.", "digital-river"); ?></p>
					<p><a target="_blank" href="/marketing_material/brazil-infographic/"><?php _e("Read More","digital-river"); ?></a></p>
				</div>

				<div class="col-sm-4">
					<div class="row">
						<div class="col-md-3">
							<img width="50px" class="img-responsive" src="<?php echo get_template_directory_uri()."/img/payments/union_pay.png"; ?>" />
						</div>
						<div class="col-md-9 ">
							<h3 class="h4 option no-top-margin"><?php _e("Increase Global Profitability By Offering UnionPay", "digital-river"); ?></h3>
						</div>
					</div>
					<p><?php _e("UnionPay is the largest card network in the world and is growing rapidly. UnionPay represents an enormous revenue opportunity for any global merchant seeking to maximize sales from the trillion dollar Asia ecommerce market. Digital River World Payments is a certified global acquirer capable of accepting UnionPay in any local currency where the card is issued. We also offer flexible options for settlement currency. As one of the first international acquirers of UnionPay cards globally, we give you a direct connection so you don’t have to go through third party networks.", "digital-river"); ?>
					</p>
					<p><a href="/solutions/payments/digital-river-world-payments-unionpay-value-brief/"><?php _e("Read More","digital-river"); ?></a></p>
				</div>

				<div class="col-sm-4">
					<div class="row">
						<div class="col-md-3 ">
							<img width="95px" class="img-responsive" src="<?php echo get_template_directory_uri()."/img/payments/alipay_logo.png"; ?>" />
						</div>
						<div class="col-md-9 ">
							<h3 class="h4 option no-top-margin"><?php _e("Connecting You to the Powerful Alipay Network", "digital-river"); ?></h3>
						</div>
					</div>
					<p><?php _e("Nearly half of all online payments made in China are made through the ewallet service provider Alipay. Whether you have an Asian entity or not, we can give you a direct connection into the powerful Alipay network. We can provide a customized, cost-effective, and reliable solution without the overhead costs and risks of developing and maintaining your own local entity.", "digital-river"); ?></p>
				</div>
			</div>
			
							
			<h3 class="option no-margin"><i class="fa fa-cogs x4 option margin-right"></i><?php _e("Flexible Integration Methods for Optimizing the Consumer Experience", "digital-river"); ?></h3>
			<p><?php _e("To offer online and mobile shoppers a fast, secure, and seamless purchasing experience, we offer powerful integration methods and convenient features:", "digital-river"); ?></p>
			<div class="row">
				<div class="col-md-4">
					<h4 class="inline no-margin option"><?php echo _e("Full-Feautured API", "digital-river"); ?></h4><?php _e(": Direct access to all payment features with one simple API.", "digital-river"); ?>
					<h4 class="inline no-margin option"><?php echo _e("Tokenization API", "digital-river"); ?></h4><?php _e(": An easy-to-integrate solution that will support alternative payment methods in future releases.", "digital-river"); ?>
				</div>
				<div class="col-md-4">
					<h4 class="inline no-margin option"><?php echo _e("Account Updater", "digital-river"); ?></h4><?php echo __(": A valuable feature for recurring and subscription billing, the Account Updater prevents payment disruptions when changes are made to card holder accounts. Account Updater is currently used in select markets—please ", "digital-river")."<a href='/contact-us'>".__("contact us","digital-river")."</a>".__(" to inquire about availability in your part of the world.", "digital-river"); ?>
				</div>
				<div class="col-md-4">
					<h4 class="inline no-margin option"><?php echo _e("Hosted Payment Page", "digital-river"); ?></h4><?php _e(": With our customizable, ready-made payment page templates, we completely manage sensitive card data for different countries. Our payment pages come ready with locally preferred alternative payment types.", "digital-river"); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="gray-bg map-bg slide">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<h2><?php _e( 'Global Payment Processing', 'digital-river' ); ?></h2>
					<p class="white"><?php _e( 'Providing local payment options is necessary to enter in global markets—and to create the right local shopping experience to be successful. Digital River can provide more payment options in more countries than any other company. We support 175+ currencies, 200+ payment methods, and have relationships with 35+ global card acquiring banks.', 'digital-river' ); ?></p>
					<p>
					<a href="/solutions/payments/drwp-global-payment-processing/" class="btn btn-opposite text-center"><?php _e( 'View our global payment methods', 'digital-river' ); ?></a>
					<p>
				</div>
			</div>
		</div>
	</div>

	<div class="lgray-bg slide">
		<div class="container">
			<h2 class="text-center option xtra-margin-btm"><?php _e("Businesses We Support", "digital-river"); ?></h2>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/entertainment.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Digital Solutions","digital-river"); ?></h3>
					<p><?php _e("Increase profitability by offering flexible billing options, a personalized shopping experience, advanced order management capabilities, and everything you need to sell your product around the world.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We support subscription and one-off billing models and work with many of the world’s leading providers of music, software, and digital goods.", "digital-river"); ?>
					</p>
					<p>
						<a href="/clients/industries/entertainment/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
				<div class="col-md-3  col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/travel_leisure.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Travel & Leisure","digital-river"); ?></h3>
					<p><?php _e("Expand your customer base and accommodate travelers from around the world by simplifying the buying experience and offering the language, currency and payment methods they prefer.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We help airlines, hotels, travel agencies, cruise lines, car rentals, and other travel businesses manage their unique payment processing needs.", "digital-river"); ?>
					</p>
					<p>

						<a href="/clients/industries/travel/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
				<div class="clear visible-sm"></div>
				<div class="col-md-3 col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/retail.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Retail","digital-river"); ?></h3>
					<p><?php _e("Increase profitability by offering flexible billing options, a personalized shopping experience, advanced order management capabilities, and everything you need to sell your product around the world.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We’ll help retail businesses reduce cart abandonment and simplify the complexities of global expansion.", "digital-river"); ?></p>
					<p>
						<a href="/solutions/payments/industry-spotlight-retail-value-brief/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<p class="text-center">
						<img width="200" height="200" class="img-circle" src="<?php echo get_template_directory_uri()."/img/payments/direct_selling.jpg"; ?>" />
					</p>
					<h3 class="text-center"><?php _e("Direct Selling","digital-river"); ?></h3>
					<p><?php _e("Take your direct selling enterprise to the next level with seamless and rapid international expansion into dozens of emerging markets.", "digital-river"); ?></p>
					<strong>Experience:</strong>
					<p><?php _e("We are uniquely equipped to handle payment acceptance and commission payouts. We provide true local card processing to ensure that local distributor payment cards are processed without cross-border fees.", "digital-river"); ?>
					</p>
					<p>
						<a href="/solutions/payments/industry-spotlight-direct-selling-value-brief/"><?php _e("Read More", "digital-river"); ?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="blue-bg slide text-center">
		<div class="container">
			<h2><?php _e( 'Our Value-Added Services', 'digital-river' ); ?></h2>
			<p class="white"><?php _e( 'We measure success by more than just the number of credit card payment methods offered at checkout. DRWP combines proven, trusted payment systems with value-added tools and services to offer comprehensive payment solutions for your global business.', 'digital-river' ); ?></p>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div><i class="fa fa-check-square-o x10"></i></div>
					<h3 class="h4"><?php _e( 'Secured Payment Credentials Through Tokenization', 'digital-river' ); ?></h3>
				</div>
				<div class="col-md-3 col-sm-6">
					<div><i class="dr-money x10"></i></div>
					<h3 class="h4"><?php _e( 'PCI Compliance', 'digital-river' ); ?></h3>
				</div>
				<div class="col-md-3 col-sm-6">
					<div><i class="dr-phone x10"></i></div>
					<h3 class="h4"><?php _e( 'Payouts to Suppliers &amp; Partners', 'digital-river' ); ?></h3>
				</div>
				<div class="col-md-3 col-sm-6">
					<div><i class="dr-lock x10"></i></div>
					<h3 class="h4"><?php _e( 'Flexible Solution for Mobile Experience', 'digital-river' ); ?></h3>
				</div>
			</div>
		</div>
	</div>

    <?php initResourcesSection(); ?>

    <!-- ecommerce 
    <div style="background:#b3d334;  padding: 30px 0;">
		<div class="row2">
			<div class="span_12" style="text-align:center">
				<h2 class="med heading white"><?php _e( 'Also looking for an ecommerce platform?', 'digital-river' ); ?></h2>
				<p class="white"><?php _e( 'Digital River offers end-to-end commerce and payment processing solutions.', 'digital-river' ); ?></p>
				<a href="/solutions/commerce/commerce-business-infrastructure/" class="button opposite btn-white"><?php _e( 'Click Here', 'digital-river' ); ?></a>
			</div>

			<div class="clear"></div>
		</div>
	</div>

-->
</div>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
 	<script type='text/javascript' src='http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/js/owl.carousel.min.js?ver=1'></script>
 	<script src="http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/js/payments.js"></script>
</body>
</html> 

<?php get_footer(); ?>

