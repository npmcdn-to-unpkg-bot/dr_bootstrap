<?php
/**
 * Template Name: Template WHY DR
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>
 <style type="text/css">

    </style> 

   



    <script type="text/javascript">


    function getUrlParameter(sParam){
	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return sParameterName[1];
	        }
	    }
	}         

    jQuery(document).ready(function(){

    	jQuery(".embed-container iframe").css("width","101%");
    	setTimeout(function(){
    		jQuery(".embed-container iframe").css("width","100%");
    	},3000)
    	
    	var videoToPlay = getUrlParameter('video');
    	if(videoToPlay == 1){

    		jQuery(window).scrollTop(jQuery("#toVideo").offset().top-100);
    		jQuery("#video_1").vimeo("play");
    	}
    });


	var firstClick = false;
	var animationReady =false;
	jQuery(document).on("click","input",function(){


			var clickedId = jQuery(this).attr("id");
			var clickedService = clickedId.replace("-button","")
			var serviceHeight = jQuery("#"+clickedService).height()+150;
			jQuery("#third").animate({height:"770px"},200);
				 var leftPosition = jQuery("#"+clickedService).css("left");
						var selectedBorderTopColor = jQuery("#"+clickedService).css("border-top-color");
								jQuery("#third .service .header").animate({fontSize:"28px"},1000);
							jQuery("#third #infrastructure .header").css({marginTop:"8px"});
							jQuery("#third #payments .header").css({marginTop:"36px"});
				jQuery("#third .service .icon, #third .service  .button-wrapper").animate({opacity:0, height:"0px", marginTop:"0px",padding:"0px"},1000, function(){
						jQuery("#third .service .icon, #third .service  .button-wrapper").css({display:"none"});
				});


				jQuery("#third .service").animate({height:"100px", top:serviceHeight},1000 );
				jQuery("#"+clickedService).animate({borderTopWidth:"15px",top:"-=10px"})



					jQuery("."+clickedService+"-expanded").css({display:"block"});

	/*				jQuery("#"+clickedService +" .header").appendTo(".expansion");
					jQuery("#"+clickedService +" .icon").appendTo(".expansion");
					jQuery("#"+clickedService +" .button-wrapper").appendTo(".expansion");*/


									jQuery("."+clickedService+"-expanded").delay(1000).animate({height:"445px",top:"0px",width:"100%", opacity:1},1000, function(){
						jQuery("."+clickedService+"-expanded").animate({width:"auto", left:"0px"},1000);
						jQuery("."+clickedService+"-expanded .service-content").delay(1000).animate({opacity:1},500);

						jQuery("#third .service").css({cursor:"pointer"});
						 firstClick = true;
						 animationReady = true;
					});





		})

		jQuery(document).on("mouseenter",".service",function(){
			var color = jQuery(this).css("border-top-color");
			var thisId = jQuery(this).attr("id");
				if(firstClick == true){

					jQuery("#"+thisId).animate({backgroundColor:color},100);
					jQuery("#"+thisId+" .header").animate({ color:"#FFF"},100);
				}
		})

			jQuery(document).on("mouseleave",".service",function(){
				var thisId = jQuery(this).attr("id");
			if(firstClick == true){
				jQuery("#"+thisId).animate({backgroundColor:"#F4F4F4"},100);
				jQuery("#"+thisId+" .header").animate({ color:"#807e82"},100);
			}
		})

		jQuery(document).on("click",".service",function(){
				var nextId = jQuery(this).attr("id");

			if(firstClick == true && animationReady == true){
				animationReady = false;
				jQuery(".marketing-expanded,  .experience-expanded,  .infrastructure-expanded,  .payments-expanded").each(function(){

					if(jQuery(this).css('display') != 'none'){
						var thisClass = jQuery(this).attr("class");



						var thisService = thisClass.replace("-expanded","");
						if(thisService != nextId){
							var leftPosition = jQuery("#"+thisService).css("left");
							leftPosition = leftPosition.replace("px","");
							leftPosition = Number(leftPosition)
							if(leftPosition != 0){leftPosition += 5;}
							jQuery("."+thisService+"-expanded .service-content").animate({opacity:0},1);
							jQuery("."+thisClass).animate({width:"276px", left:leftPosition},1000, function(){
							jQuery("#"+thisService).delay(500).animate({borderTopWidth:"5px",top:"+=10px"},500)
								jQuery("."+thisClass).animate({height:"0",top:"650px", opacity:0},1000, function(){

										jQuery("."+thisClass).css({display:"none"});
										jQuery("."+nextId+"-expanded").css({display:"inline"});

									jQuery("#"+nextId).animate({borderTopWidth:"15px",top:"-=10px"},500)
								jQuery("."+nextId+"-expanded").animate({height:"445px",top:"0px",width:"100%", opacity:1},1000, function(){
									jQuery("."+nextId+"-expanded .service-content").delay(1000).animate({opacity:1},500);
									jQuery("."+nextId+"-expanded").animate({width:"1135px", left:"0px"},1000, function(){
										animationReady = true;
									})

								});
							})
						});
						}else{animationReady = true;}
					}
				})
			}
		})





</script>


<!-- Content Container -->
<section  class="container why-digital-river">
        <div class="row">


    <div class="col-md-4">
<h3 class="eyebrow"><?php _e('Our Story','digital-river');?></h3>
		<p>
        	<?php _e( 'We offer ecommerce, payments and top online marketing services to companies of all sizes, in nearly every corner of the world. Digital River is the leading global provider of Commerce-as-a-Service solutions, supporting a best-in-class shopper experience across all devises and complete order management. Our scalable cloud-based multi-tenant SaaS ecommerce platform is backed by more than 20 years of ecommerce experience with a low up-front investment and enables speed to market.', 'digital-river' ); ?>
        </p>
<br>																																		
    	<p>
 <?php _e( 'Our expertise enables clients to maximize revenue as well as reduce the costs and risks of running an online business. We provide top payment solutions to support a local shopping experience in global markets and more payment options than any other company. Our digital marketing agency drives additional growth through advanced analytics and online marketing services, as well as our modular pricing model and growing partner network.', 'digital-river' ); ?>
 		</p>
          
            
<?php icl_link_to_element(27,'page',__('Learn More About Us', 'digital-river' )) ?>
          </div>
        <div class="col-md-8">

            <div class="snapshot-wrapper ">
                <div class="row">
                <div class="col-md-12">
            	<div class="header"> <?php _e( 'An Average Day', 'digital-river' ); ?></div>
                <div class="tag"> <?php _e( 'Here’s a snapshot of an average day supported by Digital River teams and systems:', 'digital-river' ); ?></div>
                    </div></div>
                <div class="row">
                <div class="col-md-6">
                	<ul>
                    	<li> <?php _e( 'Support 1.5 billion API calls', 'digital-river' ); ?></li>
                        <li> <?php _e( 'Send over 3 million emails', 'digital-river' ); ?></li>
                        <li> <?php _e( 'Create 5 transaction authorizations per second', 'digital-river' ); ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                	<ul>
                    	<li> <?php _e( 'Serve 60 million pages', 'digital-river' ); ?></li>
                        <li> <?php _e( 'Process 300,000 orders', 'digital-river' ); ?></li>
                        <li> <?php _e( 'Host more than 6 TB of digital content', 'digital-river' ); ?></li>
                        <li> <?php _e( 'Ship products into 170+ countries', 'digital-river' ); ?></li>
                    </ul>
                </div>
                    </div>
            </div>
<div class="row row-eq-height five-columns">
                <div class="col-md-2">
                    <div class="header"> <?php _e( 'Online Transactions', 'digital-river' ); ?></div>
                    <div class="copy"><p><?php _e( 'Our world-class ecommerce and payments platforms process $34 billion in online transactions each year.', 'digital-river' ); ?></p></div>
                    <div class="columns-number"><span style='font-size: 22px; display: block; width: 14px; float: left; margin-left: 38px; margin-top: 10px;'>$</span><span style='font-size: 53px; display: block; width: 72px; float: left; letter-spacing:-3px;'>34</span><span style='font-size: 22px; float: left; display: block;margin-top: 10px;'>B</span></div>
                </div>
    
                <div class="col-md-2">
                    <div class="header"> <?php _e( 'Site Display Languages', 'digital-river' ); ?></div>
                    <div class="copy"> <p><?php _e( 'We’re not just multilingual - we speak global. Our enterprise global commerce platform hosts client websites in 30 different languages.', 'digital-river' ); ?></p></div>
                    <div class="columns-number"><span style='font-size: 53px; margin-left: 45px; display: block; width: 100px; float: left; letter-spacing:-3px;'>30</span></div>
                </div>
                <div class="col-md-2" id="currencies">
                    <div class="header" > <?php _e( 'Top Payments', 'digital-river' ); ?></div>
                    <div class="copy"><p> <?php _e( 'We can support 175 global currencies and over 200 global payment methods.', 'digital-river' ); ?></p></div>
                    <div class="columns-number"><span style='font-size: 53px; margin-left: 25px; display: block; width: 100px; float: left; letter-spacing:-3px;'>200</span></div>
                </div>
                <div class="col-md-2" >
                    <div class="header"> <?php _e( 'Ecommerce Experts', 'digital-river' ); ?></div>
                    <div class="copy"><p> <?php _e( 'We have 1,300+ ecommerce experts in 27 offices around the world to enable you operate in 243 countries and territories.', 'digital-river' ); ?></p></div>
                    <div class="columns-number"><span style='font-size: 53px; margin-left: 8px; display: block; width: 100px; float: left; letter-spacing:-3px;'>1300</span></div>
                </div>
                <div class="col-md-2"  id="subscriptions">
                    <div class="header"> <?php _e( 'Subscriptions', 'digital-river' ); ?></div>
                    <div class="copy"> <p><?php _e( 'Digital River manages 11M+ active online product subscriptions with 8M active subscribers.', 'digital-river' ); ?></p></div>
                    <div class="columns-number"><span style='font-size: 53px; display: block; width: 58px; float: left; letter-spacing:-3px; margin-left:56px;'>11</span><span style='font-size: 22px; float: left; display: block;margin-top: 10px;'>M</span></div>
                </div>
        

            </div>

</div>
    </div>
<div class="row">
    <div class="eyebrow col-md-4"> <?php _e( 'Commerce as a Service', 'digital-river' ); ?></div>
</div>
    <div class="row row-eq-height four-up-sliders" id="third">

<div class="service col-md-3" id="marketing">
            	<div class="icon"><img src="<?php echo get_image_path('marketing.png'); ?>" /></div>
                <div class="header"> <?php _e( 'Marketing <br /> Services', 'digital-river' ); ?></div>
                <div class="button-wrapper"><input id="marketing-button" value="<?php _e('Learn More','digital-river'); ?>" type="button" /></div>
            </div>
            <div class="service col-md-3" id="experience">
            	<div class="icon"><img src="<?php echo get_image_path('Experience.png'); ?>" /></div>
                <div class="header"> <?php _e( 'Commerce <br /> Experience', 'digital-river' ); ?></div>
                <div class="button-wrapper"><input id="experience-button" value="<?php _e('Learn More','digital-river'); ?>" type="button" /></div>

            </div>
            <div class="service col-md-3" id="infrastructure">
           		<div class="icon"><img src="<?php echo get_image_path('Infrastructure.png'); ?>" /></div>
                <div class="header"> <?php _e( 'Commerce <br />Business<br /> Infrastructure', 'digital-river' ); ?></div>
                <div class="button-wrapper"><input id="infrastructure-button" value="<?php _e('Learn More','digital-river'); ?>" type="button" /></div>
            </div>
            <div class="service col-md-3" id="payments">
            	<div class="icon"><img src="<?php echo get_image_path('payments.png'); ?>" /></div>
                <div class="header"> <?php _e( 'Payments', 'digital-river' ); ?></div>
                <div class="button-wrapper" ><input id="payments-button" value="<?php _e('Learn More','digital-river'); ?>" type="button" /></div>
            </div>


        	<div class="marketing-expanded ">
            <div class="service2" >
                         <div class="icon"><img src="<?php echo get_image_path('marketing.png'); ?>" /></div>
                        <div class="header"><?php _e( 'Marketing <br /> Services', 'digital-river' ); ?></div>
                    <div class="links-wrapper">
                    	<?php icl_link_to_element(651,'page', __( 'All Marketing Solutions ', 'digital-river' ).'>'); ?>
                        <?php 
                        	if(ICL_LANGUAGE_CODE == 'en'):
                        		icl_link_to_element(11239,'page',__('Request A Demo ', 'digital-river' ).'>'); 
                        	else:
                        		icl_link_to_element(8144,'page',__('Request A Demo ', 'digital-river' ).'>'); 
                        	endif;
                        ?>
                        <?php icl_link_to_element(27,'page', __( 'Contact Us ', 'digital-river' ).'>'); ?>
                    </div>

                </div>
                 <div class="service-content">
                            <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(1431, 'page', __('Site Search','digital-river'))?></div>
                                <div class="copy"> <?php _e( 'Manage your pay-per-click ads to get the most out of your marketing budget.', 'digital-river' ); ?></div>
                            </div>
                            <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(665,'page',__('Email', 'digital-river' )); ?></div>
                                <div class="copy"> <?php _e( 'Create highly targeted and relevant messages that connect with your customers.', 'digital-river' ); ?></div>
                            </div>
                           <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(1435,'page',__('Affiliate', 'digital-river' )); ?></div>
                                <div class="copy"> <?php _e( 'Leverage a marketplace of pay-for-performance publishers to drive revenue.', 'digital-river' ); ?></div>
                            </div>

                         <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(1909,'page',__('Display', 'digital-river' )); ?></div>
                                <div class="copy"> <?php _e( 'Drive brand awareness and incremental conversions through targeted ad campaigns.', 'digital-river' ); ?></div>
                            </div>
                            <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(655,'page',__('Analysis', 'digital-river' )); ?></div>
                                <div class="copy"> <?php _e( 'Monitor key performance indicators to identify optimization opportunities.', 'digital-river' ); ?></div>
                            </div>
                           <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(669,'page',__('Site Optimization', 'digital-river' )); ?></div>
                                <div class="copy"> <?php _e( 'Use statistically-valid testing to form a foundation for continuous improvement.', 'digital-river' ); ?></div>
                            </div>
                        </div>

            </div>
            <div class="experience-expanded">
               <div class="service2" >
                   <div class="icon"><img src="<?php echo get_image_path('Experience.png'); ?>" /></div>
                    <div class="header"> <?php _e( 'Commerce <br /> Experience', 'digital-river' ); ?></div>
                    <div class="links-wrapper">
                    	<?php icl_link_to_element(673,'page',__('All Commerce Solutions ', 'digital-river' ).'>'); ?>
                        <?php 
                        	if(ICL_LANGUAGE_CODE == 'en'):
                        		icl_link_to_element(11239,'page',__('Request A Demo ', 'digital-river' ).'>'); 
                        	else:
                        		icl_link_to_element(8144,'page',__('Request A Demo ', 'digital-river' ).'>'); 
                        	endif;
                        ?>
                        <?php icl_link_to_element(27,'page',__('Contact Us ', 'digital-river' ).'>'); ?>
                    </div>
                </div>



                 <div class="service-content">
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Shopping Cart', 'digital-river' ); ?></div>
                                <div class="copy">
                                	<ul>
                                    	<li> <?php _e( 'Optimized for conversion', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Supports digital and physical', 'digital-river' ); ?></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'WCMS', 'digital-river' ); ?></div>
                                <div class="copy">
                                	<ul>
                                    	<li> <?php _e( 'Flexible framework', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Device detection', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Responsive design', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Catalog', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                           <div class="sub-service">
                                <div class="header"> <?php _e( 'Virtual products', 'digital-river' ); ?></div>
                                <div class="copy">
                                	  <ul>
                                    	<li> <?php _e( 'Compare pages', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Configure-to-order', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>

                         <div class="sub-service">
                                <div class="header"> <?php _e( 'Searchandising', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Sponsored products', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Faceted navigation', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(1405,'page',__('Merchant and Promotions', 'digital-river' )); ?></div>
                                <div class="copy">
                                	<ul>
                                    	<li> <?php _e( 'Supports most promotion types', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Social integration', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                           <div class="sub-service">
                                <div class="header"> <?php _e( 'Localization', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'GEO/IP detection', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Support for any language', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Optimized for local consumer', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Recommendation and Personalization', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Related items', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Private stores', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"><?php _e( 'A/B Testing', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Merchandising, pricing, design, user experience,  effectiveness testing', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Pricing', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Volume discounts', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Tiered pricing', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Purchase plans', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Admin Tools', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Intuitive web-based toolset manages commerce experience', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>


                        </div>



            </div>
            <div class="infrastructure-expanded">
               <div class="service2" >
            	<div class="icon"><img src="<?php echo get_image_path('Infrastructure.png'); ?>" /></div>
                <div class="header"> <?php _e( 'Commerce <br />Business<br />Infrastructure', 'digital-river' ); ?></div>
                <div class="links-wrapper">
                    	<?php icl_link_to_element(8131,'page',__('Find Out More ', 'digital-river' ).'>'); ?>
                        <?php icl_link_to_element(27,'page',__('Contact Us ', 'digital-river' ).'>'); ?>
                </div>
                </div>


         <div class="service-content">
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Merchant and Seller of Record', 'digital-river' ); ?></div>
                                <div class="copy">
                                	<ul>
                                    	<li> <?php _e( 'MOR and SOR solutions available', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Digital River assumes risk', 'digital-river' ); ?></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(753,'page',__('Local Legal Entities', 'digital-river' )); ?></div>
                                <div class="copy">
                                	<ul>
                                    	<li> <?php _e( 'In complex countries', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Local expertise and payment methods', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                           <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(739,'page',__('Proactive Fraud Management', 'digital-river' )); ?></div>
                                <div class="copy">
                                	  <ul>
                                    	<li> <?php _e( 'In-house fraud system learns over time', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>

                         <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(725,'page',__('Full-Service Tax Solution', 'digital-river' )); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Manage audit risk', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Day-to-day compliance', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Offshore tax structure', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(683,'page',__('Order Management', 'digital-river' )); ?></div>
                                <div class="copy">
                                	<ul>
                                    	<li> <?php _e( 'Order and financial data managements', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Fulfillment and logistics', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                           <div class="sub-service">
                                <div class="header"><?php icl_link_to_element(677,'page',__('Cloud Enablement', 'digital-river' )); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Subscriptions', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Usage-based billing', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Inter-term billing', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Cloud billing', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Business Intelligence', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Analytics', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Reporting', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Predictive modeling', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Security and Compliance', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'PCI', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'SOX', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'SSAE16', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'WEEE', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Customer Service', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Call center support', 'digital-river' ); ?></li>
                                        <li> <?php _e( 'Escalation management', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="sub-service">
                                <div class="header"> <?php _e( 'Integrated Services', 'digital-river' ); ?></div>
                                <div class="copy">
                                	 <ul>
                                    	<li> <?php _e( 'Consultative client service through site launch', 'digital-river' ); ?></li>
                                    </ul>
                                </div>
                            </div>


                        </div>


            </div>
            <div class="payments-expanded">
               <div class="service2" >
            	<div class="icon"><img src="<?php echo get_image_path('payments.png'); ?>" /></div>
                <div class="header"> <?php _e( 'Payments', 'digital-river' ); ?></div>
                <div class="links-wrapper">
                    	<?php icl_link_to_element(735,'page',__('All Payment Solutions', 'digital-river' ).' >'); ?> 
                        <?php 
                        	if(ICL_LANGUAGE_CODE == 'en'):
                        		icl_link_to_element(11239,'page',__('Request A Demo ', 'digital-river' ).'>'); 
                        	else:
                        		icl_link_to_element(8144,'page',__('Request A Demo ', 'digital-river' ).'>'); 
                        	endif;
                        ?>
                        <?php icl_link_to_element(27,'page',__('Contact Us ', 'digital-river' ).'>'); ?>
                </div>
                </div>

                  <div class="service-content">
                                                    <div class="sub-service">
                                        <div class="header"><?php icl_link_to_element(2576,'page',__('Gateway Services', 'digital-river' )); ?></div>
                                        <div class="copy">
                                            <ul>
                                                <li> <?php _e( 'Facilitate global transactions', 'digital-river' ); ?></li>
                                                <li> <?php _e( 'Settlement and reconciliation', 'digital-river' ); ?></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="sub-service">
                                        <div class="header"> <?php _e( 'Full-Service Acquiring', 'digital-river' ); ?></div>
                                        <div class="copy">
                                            <ul>
                                                <li> <?php _e( 'Transaction management', 'digital-river' ); ?></li>
                                                <li> <?php _e( 'Merchant solutions', 'digital-river' ); ?></li>
                                                <li> <?php _e( 'Shared risk', 'digital-river' ); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                   <div class="sub-service">
                                        <div class="header"> <?php _e( 'PSP Services', 'digital-river' ); ?></div>
                                        <div class="copy">
                                              <ul>
                                                <li> <?php _e( 'Sub-merchant relationships through world payments', 'digital-river' ); ?></li>
                                                <li> <?php _e( 'Shared risk', 'digital-river' ); ?></li>
                                            </ul>
                                        </div>
                                    </div>

                                 <div class="sub-service">
                                        <div class="header"> <?php _e( 'IN-COUNTRY MERCHANT', 'digital-river' ); ?></div>
                                        <div class="copy">
                                             <ul>
                                                <li> <?php _e( 'Merchant of record', 'digital-river' ); ?></li>
                                                <li> <?php _e( 'Transaction management', 'digital-river' ); ?></li>
                                                <li> <?php _e( 'Assumed risk', 'digital-river' ); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                </div>
            </div>


    </div>



    <div class="row section" id="fourth">
    <h4><?php _e( 'Total Cost of Ownership', 'digital-river' ); ?></h4>

        <div class="copy">
        	<p>
        <?php _e( 'Maintaining an agile ecommerce system that is easy to implement, run, and support, while meeting customer, regulatory, and fiduciary requirements involves highly complex expertise and significant operational costs. This type of integrated Commerce-as-a-Service operation requires management of a broad range of day-to-day functions for the technology platform, website integration, marketing solutions, payment processing, and related complex business infrastructure needs—operations that increase your total cost of business.', 'digital-river' ); ?> 
       	</p>
       </div>

       <div class="copy">
       	<p>
        <?php _e( 'Digital River’s multitenant SaaS-based global ecommerce platform, combined with our end-to-end solution offerings, enables customers to easily manage all maintenance, support and execution capabilities for a successful ecommerce business. Enjoy the privilege and flexibility of outsourcing your ecommerce operations so you can focus on other areas of your business. With Digital River’s flexible business model, and expertise in global commerce, your entry into new markets will increase your annual revenue and lower your costs.', 'digital-river' ); ?>
       	</p>
       </div>

    </div>
    <div class="row section" id="five">
        <h4><?php _e( 'A Mobile Approach', 'digital-river' ); ?></h4>

        <div class="copy">
        <p>
        <?php _e( 'Across our commerce, payments and marketing offerings there is a cohesive strategy around mobile technology. We offer responsive, adaptive, device-specific web design solutions based on client need—all new websites we create are responsive out of the box. Digital River continues to invest in mobile-specific APIs to integrate with customer apps and partner applications. We’ve expanded our partner relationships in the app development and design community to facilitate comprehensive services to our clients.', 'digital-river' ); ?>
       	</p>
       </div>

       <div class="copy">
        <p>
        <?php _e( 'Our portfolio of leading mobile payments offerings continues to expand, providing our clients with a variety of payment options to choose from. As the mobile app landscape continues to evolve, you can rely on Digital River to stay ahead of the curve and provide all the right solutions to keep you competitive in the market.', 'digital-river' ); ?></div>
    	</p>
    </div>

        <div class="section row" id="six">
            <h4> <?php _e( 'Client Success', 'digital-river' ); ?></h4>
  	
        <div class="copy">
      	<p>
 		<?php _e( 'Client satisfaction and success is paramount to our business model. Digital River’s client-centric approach focuses on maintaining long-term client relationships through dedicated and experienced account managers to help your ecommerce business reach its full potential. Digital River’s Client Service Team—comprised of dedicated client marketing and account managers—offers you ecommerce expertise to optimize your marketing and promotions, and manage product information and store operations. We focus on enhancing your customers’ shopping experience to build and maintain a strong customer base. Your account team will ensure your unique business needs are being met and managed to the highest standard.', 'digital-river' ); ?>
 		</p>
 		<?php if(ICL_LANGUAGE_CODE == 'en') : ?>
 			<p>
            	 <!-- Translated Content -->
            	 <a href="/wp-content/uploads/2014/08/Digital-River-Client-Success-Value-Brief.pdf"><?php _e('Read more.','digital-river'); ?></a>
        	</p>
         <?php endif; ?>
      </div>

       <div class="copy" id='toVideo'>
       		<p>
       		<?php icl_link_to_element(27,'page',__('Contact Us', 'digital-river' )); ?> <?php _e( 'today to start your relationship with Digital River.', 'digital-river' ); ?> 
       		</p>
       </div>

        </div>
    

	<div class='featured_wrapper row'>
		<div class='featured_area'>
			<div class='featured' id='featured_1'>
				<div class='video_wrapper'>
					<div class='embed-container'>

						<?php

							if(ICL_LANGUAGE_CODE == 'de'):
								$videoId = "129235671";
							elseif(ICL_LANGUAGE_CODE == 'ja'):
								$videoId = "133778569";
							elseif(ICL_LANGUAGE_CODE == 'zh-hans'):
								$videoId = "133777861";
							else:
								$videoId = "129235671";
							endif;

						?>


						<iframe id="video_1" src="https://player.vimeo.com/video/<?php echo $videoId; ?>?api=1&amp;player_id=video_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
					</div>
				</div>
				<div class='copy_wrapper' style='margin-top: 150px;'>
					<div class='quote'>As the leading global provider of Commerce-as-a-Service solutions, our scalable solutions are backed by 20+ years of ecommerce experience and offer low up-front investment and quick time to market.</div>
				</div>
				<div class='clear'></div>
			</div>
			
			<div class='clear'></div>
		</div>
		<div class='clear'></div>
	</div>
	
</section>

<?php get_footer(); ?>
