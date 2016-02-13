<?php
/**
 * Template Name: Template Payments
 */
?>
<?php get_header(); ?>


<div class="payments-wrapper">
	<div class="row2" id="intro" style="padding: 30px 0px;">
		<div class="span_12" style="margin-bottom:30px;">
			<h1 class="eyebrow"><?php echo get_the_title(); ?></h1>
			<p class="gray"><?php echo get_field('subtitle'); ?></p>
		</div>
		<div class="clear"></div>

		<div class="span_12 last" style="position:relative; ">
			<div class="left img-wrapper">
				<img src="/wp-content/themes/digital-river-translated/img/payments/laptop_left.png" alt="" />
			</div>

			<div class="middle img-wrapper">
				<img src="/wp-content/themes/digital-river-translated/img/payments/laptop_main.png" alt="" />
			</div>

			<div class="right img-wrapper">
				<img src="/wp-content/themes/digital-river-translated/img/payments/laptop_right.png" alt="" />
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div style="background:#F2F2F2;">
		<div class="row2" id="why" style="padding: 30px 0px;">

			<div class="span_12 last" style="padding:30px;">

				
				<h2 class="med gray heading"><?php _e( 'Why Choose Digital River World Payments', 'digital-river' ); ?></h2>

				<div class="section">
					<p class="gray"><?php _e( 'Digital River World Payments (DRWP) is our full-service enterprise payment processing solution. With DRWP you have the flexibility to choose a PSP, Gateway or IPO service model based on your business needs to integrate with your existing commerce operation. DRWP can support you through all stages of international payment optimization: cross-border, alternative payments and local entities. This robust, scalable payment engine offers everything you need to manage the entire payment lifecycle with clear business benefits.', 'digital-river' ); ?>
					</p>
				</div>
			</div>
			<div class="clear"></div>
			<div class="span_12 last" style="position:relative;">
	     			<div class="left-hitbox"></div>
	            	<div class="right-hitbox"></div>

	            	<div class="seperator left">+</div>
	            	<div class="seperator right">+</div>

        	     	<style>
		            	#why-slider li{margin-top: 5px;}

						.row2{
						    margin: 0px auto;
						    max-width: 1240px;
						    padding: 0px 30px;
						    box-sizing: border-box;
						}
	            	</style>

	            <div id="why-slider">
   	                <div class='item' data-index="1">
	                	<img src="/wp-content/themes/digital-river-translated/img/payments/security_icon.png" alt="<?php _e( 'payments security icon', 'digital-river' ); ?>" />
	                	<div class="label">
	                		<h3 class="med gray"><?php _e( 'Security', 'digital-river' ); ?></h3>
	                		<ul class="arial">
	                			<li><?php _e( 'Secured payment credentials through tokenization', 'digital-river' ); ?></li>
								<li><?php _e( 'PCI compliant', 'digital-river' ); ?></li>
	                		</ul>
	                	</div>
	                </div>
	                <div class='item' data-index="2">
	                	<img src="/wp-content/themes/digital-river-translated/img/payments/flexibility_icon.png" alt="<?php _e( 'payments flexibility icon', 'digital-river' ); ?>" />
	                	<div class="label">
	                		<h3 class="med gray"><?php _e( 'Flexibility', 'digital-river' ); ?></h3>
							<ul class="arial">
	                			<li><?php _e( 'Flexible API integration options', 'digital-river' ); ?></li>
								<li><?php _e( 'Mobile responsive', 'digital-river' ); ?></li>
	                		</ul>
	                	</div>
	                </div>
	                <div class='item' data-index="3">
	                	<img src="/wp-content/themes/digital-river-translated/img/payments/profitability_icon.png" alt="<?php _e( 'payments profitability icon', 'digital-river' ); ?>" />
	                	<div class="label">
	                		<h3 class="med gray"><?php _e( 'Profitability', 'digital-river' ); ?></h3>
	                		<ul class="arial">
	                			<li><?php _e( 'Speed to revenue', 'digital-river' ); ?></li>
								<li><?php _e( 'Higher authorization rates', 'digital-river' ); ?></li>
	                		</ul>
	                	</div>
	                </div>
	                <div class='item' data-index="4">
	                	<img src="/wp-content/themes/digital-river-translated/img/payments/reliability_icon.png" alt="<?php _e( 'payments reliability icon', 'digital-river' ); ?>" />
	                	<div class="label">
	                		<h3 class="med gray"><?php _e( 'Reliability', 'digital-river' ); ?></h3>
							<ul class="arial">
	                			<li><?php _e( 'Industry-leading uptime and platform stability', 'digital-river' ); ?></li>
								<li><?php _e( 'Multiple acquiring banks in each country', 'digital-river' ); ?></li>
	                		</ul>
	                	</div>
	                </div>

	             </div>

			</div>
		</div>
	</div>
	<div class="gray-map-bg">
		<div class="row2" style="text-align:center; padding: 30px 0px;">


			<div class="span_12" style="padding:30px;">
				<h2 class="med heading white"><?php _e( 'Global Payment Processing', 'digital-river' ); ?></h2>

				<div class="section">
					<p class="white"><?php _e( 'Providing local payment options is necessary to enter in global markets—and to create the right local shopping experience to be successful. Digital River can provide more payment options in more countries than any other company. We support 175+ currencies, 200+ payment methods, and have relationships with 35+ global card acquiring banks.', 'digital-river' ); ?></p>
				</div>

				<a href="/solutions/payments/drwp-global-payment-processing/" class="button opposite btn-white"><?php _e( 'View our global payment methods', 'digital-river' ); ?></a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="processingModels" style="padding: 30px 0px 60px;">
		<div class="row2" style="text-align:center; ">
			<div class="span_12" style="padding:30px;">
				<h2 class="med gray heading"><?php _e( 'Payment Processing Models', 'digital-river' ); ?></h2>
			</div>
			<div class="col-md-4">
				<div class="image-wrapper">
					<img style="margin-left:-90px; min-height:113%;" src="/wp-content/themes/digital-river-translated/img/payments/gateway_services.jpg" alt="<?php _e( 'Gateway services image', 'digital-river' ); ?>" />
				</div>
				<div class="copy-wrapper">
					<h3 class="eyebrow"><?php _e( 'Gateway Services', 'digital-river' ); ?></h3>
					<p><?php _e( 'Established relationships with financial institutions worldwide to ensure you gain the widest reach with more payment options in more local currencies.', 'digital-river' ); ?></p>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-md-4">
				<div class="image-wrapper">
					<img src="/wp-content/themes/digital-river-translated/img/payments/fullcard_services.jpg" alt="<?php _e( 'Full-Card acquiring image', 'digital-river' ); ?>" />
				</div>
				<div class="copy-wrapper"> 
					<h3 class="eyebrow"><?php _e( 'Full-Card Acquiring Services', 'digital-river' ); ?></h3>
					<p><?php _e( 'Customized payment page templates and the latest fraud protection technologies and checkout page optimization. Let us take on the time and labor intensive responsibilities.', 'digital-river' ); ?></p>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>

			</div>
			<div class="col-md-4 last">
				<div class="image-wrapper">
					<img style="position: relative; top: 0px;" src="/wp-content/themes/digital-river-translated/img/payments/incountry_services.jpg" alt="<?php _e( 'In-country merchant Image', 'digital-river' ); ?>" />
				</div>
				<div class="copy-wrapper">
					<h3 class="eyebrow"><?php _e( 'In-Country Merchant', 'digital-river' ); ?></h3>
					<p><?php _e( 'Our in-country merchants help you establish your business in new markets by simplifying the process – with us assuming the tax, fraud and merchant of record (MOR) duties.', 'digital-river' ); ?></p>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>

			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div style="background:#00a7e1; padding: 30px 0 60px;" id="value-added">
		<div class="row2" style="text-align:center;">
			<div class="span_12" style="padding:30px;">
				<h2 class="med white heading"><?php _e( 'Our Value-Added Services', 'digital-river' ); ?></h2>

				<div class="section">
					<p class="white"><?php _e( 'We measure success by more than just the number of credit card payment methods offered at checkout. DRWP combines proven, trusted payment systems with value-added tools and services to offer comprehensive payment solutions for your global business.', 'digital-river' ); ?></p>
				</div>
			</div>
			<div class="clear"></div>
			<div class="span_3 last">
				<div class="image-wrapper">
					<img src="/wp-content/themes/digital-river-translated/img/payments/lock_icon.png" alt="<?php _e( 'Tokenization Icon', 'digital-river' ); ?>" />
				</div>
				<h3 class="white arial"><?php _e( 'Secured Payment Credentials Through Tokenization', 'digital-river' ); ?></h3>
			</div>
			<div class="span_3">
				<div class="image-wrapper">
					<img src="/wp-content/themes/digital-river-translated/img/payments/checkmark_icon.png" alt="<?php _e( 'PCI Compliance Icon', 'digital-river' ); ?>" />
				</div>
				<h3 class="white arial"><?php _e( 'PCI Compliance', 'digital-river' ); ?></h3>
			</div>
			<div class="span_3">
				<div class="image-wrapper">
					<img src="/wp-content/themes/digital-river-translated/img/payments/cash_icon.png" alt="<?php _e( 'Payouts to Suppliers and Partners Icon', 'digital-river' ); ?>" />
				</div>
				<h3 class="white arial"><?php _e( 'Payouts to Suppliers &amp; Partners', 'digital-river' ); ?></h3>
			</div>
			<div class="span_3">
				<div class="image-wrapper">
					<img src="/wp-content/themes/digital-river-translated/img/payments/mobile_icon.png" alt="<?php _e( 'Mobile Experience Icon', 'digital-river' ); ?>" />
				</div>
				<h3 class="white arial"><?php _e( 'Flexible Solution for Mobile Experience', 'digital-river' ); ?></h3>
			</div>

			<div class="clear"></div>
		</div>
	</div>

	<div style="background:#EEE;  padding: 30px 0;">
		<div class="row2" style="text-align:center;">


			<div class="span_12" style="padding:30px;">
				<h2 class="med heading gray"><?php _e( 'Cross-Border Payments', 'digital-river' ); ?></h2>

				<div class="section">
					<p class="gray"><?php _e( 'Being knowledgeable about what your industry does best and what it can improve on is essential to making your business the best of the best. The PYMNTS.com X-Border Payments Optimization Index, sponsored by Digital River, is a product of in-depth research to better understand how a variety of industries and countries are prepared to provide a seamless shopping experience for cross-border customers. Every quarter, the index goes into detail of the trends that are occurring, the rankings of merchant cross-border preparedness and more.', 'digital-river' ); ?></p>
				</div>

				<a href="/solutions/payments/x-border-payments/" class="button opposite btn-blue"><?php _e( 'Preview the Cross-Border Index Report', 'digital-river' ); ?></a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php /* if(count(get_field('client_logos')) > 1): ?>
	 <section id="clients" style="text-align:center;">
		<div class="row2">
			<div class="span_12" style="padding:30px;">
	    	<div class="wrapper">
	        	
	            <h2 class='med heading white'><?php _e('Clients', 'digital-river'); ?></h2>
				<div class="section">
					<p class="white">Big brands trust Digital River to manage their payment processing.</p>
				</div>

	            <div id="clientsSlider" class="clients-wrapper">
	                <?php foreach(get_field('client_logos') as $client_logo) : ?>
	                    <div class='item'>
	                        <img src="<?php echo $client_logo['logo']['url']; ?>" alt="<?php echo $client_logo['logo']['alt']; ?>" />
	                    </div>
	                <?php endforeach; ?>
	         	</div> <!-- End of clients-wrapper -->
	        </div> <!-- End of wrapper -->
	    	</div>
		</div>
	</section> <!-- End of clients section -->
	<?php endif; */ ?>
	<div class="row2">
        <?php initResourcesSection(); ?>
    </div>

    <!-- ecommerce -->
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


</div>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
 	<script type='text/javascript' src='http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/js/owl.carousel.min.js?ver=1'></script>
 	<script src="http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/js/payments.js"></script>
</body>
</html> 

<?php get_footer(); ?>

