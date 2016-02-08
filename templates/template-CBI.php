<?php
/**
 * Template Name: Template CBI
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

<style type="text/css">

	
	.top-wrapper, .clients-wrapper, .bottom-wrapper{font-family:Arial,sans-serif;}
	.left_border{width:100% !important;}
	
.top-wrapper {
    height: 180px;
    margin-top: 75px;
    margin-bottom: 0;
    float: left;
    width: 66.44%;
}


	.top-wrapper .copy-space{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
width: 100%;
padding: 0px 10%;  float:left; line-height:1.3;
    }



	   #template_j .clients-wrapper .row2 .client{width:33.2%; height:auto; float:left; overflow:hidden;}
    #template_j .client .client-logo {height: inherit; margin: 0 auto;}

	.clients-wrapper{width:100%; height:auto; border-bottom:solid 1px #b1b1b1;}
	.clients-wrapper .row2{width: 100%; height: auto; overflow:hidden;}
    .clients-wrapper .row2.third{}
    .clients-wrapper .row2.fourth{}
	.clients-wrapper .row2:first-child{border:none; }
	.clients-wrapper .row2 .client{width:378px; height:auto; float:left; overflow:hidden; border-top: 1px solid #B1B1B1;}
	.clients-wrapper .row2 .client .header{width:100%; height:auto;   text-align:center; font-size:26px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase;}
    .clients-wrapper .row2.third .client{border-bottom: 1px solid #B1B1B1;}
    .clients-wrapper .row2.fourth .client{border-top: none;}
    .clients-wrapper .row2 .client ul {
        margin: 10px auto 0px;
        padding-left: 17px;
        line-height: 1;
        max-width: 50%;
    }

 #template_j .clients-wrapper .row2 .client .cta{margin: 20px auto 0; text-align: center;}
  #template_j .clients-wrapper .row2 .client .cta {
        cursor: pointer;
        font-family: "DIN 1451 W01 Engschrift",sans-serif;
        font-style: inherit;
        font-weight: inherit;
        color: #009AD7;
        font-size: 1em;
        text-decoration: none;
    }

   #template_j .clients-wrapper .row2 .client .cta::after {
            content: " ]";
        }
   #template_j .clients-wrapper .row2 .client .cta::before {
            content: "[ ";
        }
	.clients-wrapper .row2 .client ul li{list-style-type: disc; padding:5px; line-height:1 ;}
	.clients-wrapper .row2 .client .client-logo-wrapper{width: 100px; height:100px; margin-left:auto; margin-right:auto; margin-top: 35px;}
	.clients-wrapper .row2 .client .client-logo-wrapper .client-logo{width:auto; height:auto; max-width:100px; max-height:100px; margin:0 auto;}
	.clients-wrapper .row2 .client .client-action{width:200px; height:auto; margin-left:auto; margin-right:auto; margin-top:5px; margin-bottom:5px; text-align:center;}
	.clients-wrapper .row2 .client .client-action a{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row2 .client .client-action a:hover{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row2 .client .client-action a:visited{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row2 .client-right{border-right:none;}
	.clients-wrapper .row2 .client-middle{border-left:solid 1px #b1b1b1; border-right:solid 1px #b1b1b1;}
	
	
	
	.client-logo-wrapper {
    height: 25px;      /* equals max image height */
    width: 160px;

    white-space: nowrap;
    
    text-align: center; margin: 1em 0;
}

.client-logo-wrapper:before,
.client-logo-wrapper_before {
    content: "";
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

	.client-logo-wrapper img {

    vertical-align: middle;
    max-height: 25px;
    max-width: 160px;
}

.bottom-wrapper{width: 100%; height: auto; overflow:hidden; margin-bottom:50px;  }
.bottom-wrapper .column1, .bottom-wrapper .column2{width: 520px; float:left; height:auto; margin:25px;}
.bottom-wrapper .header{/* font engscrift */ font-size:30px; text-transform:uppercase; color: #000; margin-top:20px; margin-left:25px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase;}
.bottom-wrapper .sub-header{margin-top:15px; font-size:26px; font-family: 'DIN 1451 W01 Engschrift'; }
.bottom-wrapper .copy{margin-top:5px; line-height:1.3;}
.bottom-wrapper .copy ul{margin-left:20px; margin-top:5px; margin-bottom:5px; }
.bottom-wrapper .copy li{list-style-type: disc;}


.featured_area .copy_wrapper .quote {
    font-size: 38px;
    line-height: 1.2;
}


#template_j{background: #FFF;}

.container{max-width: 1238px;}
.row{max-width: 1264px;}


#template_j .clients-wrapper .row2.first{
  width: 33.33%;
}

#template_j .clients-wrapper .row2.first .client {
  width: 100%;
}


	@media only screen	and (max-width : 1180px) and (min-width : 700px){

        .bottom-wrapper .column1, .bottom-wrapper .column2 {
            width: 90%;
        }
		.clients-wrapper .row2 .client-right{border-right:none; }
		.clients-wrapper .row2 .client-middle{border-left:none; border-right:none;}
		.clients-wrapper .row2{border-top: none;}
		.clients-wrapper{border-top:none; border-left:none;}
		.even{background-color:#EEEEEE;}
		.clients-wrapper .row2 .client{border-bottom:none !important; }
		.clients-wrapper .row2 .client {
			width: 33%;
		}
		.clients-wrapper .row2 .client .copy {
			width: 225px;

		}
		
		.top-wrapper {
			height: auto;
			overflow: hidden;
		}
		
		.clients-wrapper .row2 .client {
			height: 386px !important;
			border-right: none !important;
		}
		
		.clients-wrapper .row2{
			height: 386px !important;
		}

				
	}
	

    /*
    *
    *
    *   Video Section
    *
    *
    */


    .featured_wrapper{margin-bottom: 50px;}


    .go_global{
  background:#00a7e1;
  padding: 35px 0px 40px;
}

.go_global .heading{
    font-size: 3.5em;
    margin: 11px 0px 10px 40px;
    font-family: "DIN 1451 W01 Engschrift",sans-serif; 
    color:#FFF;
    float:left;
}

.go_global .contact_wrapper{
  color: #FFF;
  margin-top: 23px;
  float: right;
  width: 62%;
}

.go_global .contact_wrapper span{
  float: left;
  padding-top: 17px;
  font-size: 1.5em;
  margin-right: 48px;
  font-family:"DIN Next W01 Light";
}
.go_global .contact_wrapper a{    text-decoration: none;}
.go_global .contact_wrapper .contact_button{
    padding: 9px 18px 8px;
    background: none repeat scroll 0% 0% #FFF;
    color: rgb(179, 211, 52);
    font-family: "DIN 1451 W01 Engschrift",sans-serif;
    float: left;
    font-size: 1.2em;
    margin: 8px 0px 0px;
    border-radius: 2px;
    cursor: pointer;

}

.translated .go_global .contact_wrapper .contact_button {
    font-size: 1.3em;
}

.go_global .contact_wrapper .contact_button:hover{
    background: rgb(179, 211, 52);
    color:#FFF;
}






	@media only screen and (max-width : 700px){

                #template_j .clients-wrapper .row2 .client {
            height: 464px !important;
        }

		.clients-wrapper .row2 .client-right{border-right:none; }
		.clients-wrapper .row2 .client-middle{border-left:none; border-right:none;}
		.clients-wrapper .row2{border-top: none; float: left;}
        .clients-wrapper .row2.first{width: 30%;}
        .clients-wrapper .row2.first .client{width: 100%;}
		.clients-wrapper{border-top:none; border-left:none;}
		.even{background-color:#EEEEEE;}
		.clients-wrapper .row2 .client{border-bottom:none !important; width:100%; border-right: none !important;}


		.clients-wrapper .row2 .client .copy{
				width: 90%;
				margin-left: 5%;
				margin-right: 10%;
		}
		
		.bottom-wrapper .column1, .bottom-wrapper .column2 {

			width: 90%;
			margin:0px;
			margin-left: 5%;
		}
		
		.bottom-wrapper .sub-header {
			margin-top: 30px;

		}
		
		.top-wrapper {
			height: auto;
			overflow: hidden;
		}

        #template_j .clients-wrapper .row2.first .client {
            width: 100%;
        }
	
	}


        
	
@media only screen  and (max-width : 575px){


#template_j .clients-wrapper .row2.first{
  width: 100%;
}



    .clients-wrapper .row2.first {
        width: 100%;
    }

    .top-wrapper {
        width: 100%;
    }

    .top-wrapper .copy-space{
        width: 100%;
box-sizing: border-box;
    }


    .go_global .heading {width: 100%; margin: 25px 0; text-align: center; line-height: 1;}
    .go_global .contact_wrapper {width: 100%; margin: 0px auto; float: none; padding-bottom: 30px;}
    .go_global .contact_wrapper span { margin-right: 0px; clear: left; float: left; text-align: center; width: 100%; padding: 7px 0 13px;}
    .go_global .contact_wrapper .contact_button { margin: 15px auto 0px; float: none; clear: left; width: 63px;}

    #template_j .clients-wrapper .row2 .client {
        width: 100%;
        height: auto !important;
        padding-bottom: 20px !important;
        border: none;
    }

}



</style>

<script>

    jQuery(document).ready(function(){
        jQuery(".embed-container iframe").css("width","101%");
        setTimeout(function(){
            
            jQuery(".embed-container iframe").css("width","100%");
        },3000)
        // jQuery("#video_1").vimeo("play");
    });



</script>


<!-- Content Container -->
<section id="template_j" class="">
 

    <div style='position:relative;'>
    <div class="clients-wrapper">

            <div class="top-wrapper">
                <div class="copy-space">
                <?php _e('Our Commerce Business Infrastructure empowers you to sell your products in countries around the world. This robust yet flexible offering helps remove barriers of entry into challenging global markets and protects you from risk.','digital-river') ?>
                <br>
                <br>
                 <?php _e('Backed by 20 years of commerce experience and powered by our proprietary software, technology and intellectual property, Digital River’s Commerce Business Infrastructure is a core differentiator in the marketplace. We’ll help you get there – virtually anywhere you want to do business.','digital-river') ?>
                </div>
            </div>
            <div class="row2 first">


                    <div class="client client-left odd">
                        <div class="client-logo-wrapper">
                            <img alt=' <?php _e('Integrated Services Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Integrated.png'); ?>" />
                        </div>
                        <div class="header"> <?php _e('Integrated Services','digital-river') ?></div>
                        <div class="copy">
                            <ul>
                                <li> <?php _e('Consultative client service through site launch','digital-river') ?></li>
                            </ul>
                        </div>
                    </div>
               
            </div>  


            <div class="row2 second">
                <div class="client client-left even">
                	<div class="client-logo-wrapper">
                        <img alt=' <?php _e('Merchant and Seller of Record Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Merchant.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Merchant &amp; Seller of Record','digital-river') ?></div>
                    <div class="copy">
                    	<ul>
                        	<li> <?php _e('MOR &amp; SOR solutions available','digital-river') ?></li>
                            <li> <?php _e('Digital River assumes risk','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="client client-middle odd">
                	<div class="client-logo-wrapper">
                        <img alt=' <?php _e('Local Legal Entities Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Local-Entities.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Local Legal Entities','digital-river') ?></div>
                    <div class="copy">
                    	<ul>
                        	<li> <?php _e('In complex countries','digital-river') ?></li>
                            <li> <?php _e('Local expertise and payment methods','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
                 <div class="client client-right even">
                	<div class="client-logo-wrapper">
                        <img alt=' <?php _e('Fraud Management Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Fraud.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Proactive Fraud Management','digital-river') ?></div>
                    <div class="copy">
                    	 <ul>
                        	<li> <?php _e('In-house fraud system learns over time','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
            </div> 
            
            <div class="row2 third">
                <div class="client client-left odd">
                	<div class="client-logo-wrapper">
                        <img alt='<?php _e('Tax Solutions Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Tax-Solution.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Full-Service Tax Solution','digital-river') ?></div>
                    <div class="copy">
                    	<ul>
                        	<li> <?php _e('Manage audit risk','digital-river') ?></li>
                            <li> <?php _e('Day-to-day compliance','digital-river') ?></li>
                            <li> <?php _e('Offshore tax structure','digital-river') ?></li>
                        </ul>
                        <div class='cta'>Watch Tax Solutions Video</div>
                    </div>
                </div>
                <div class="client client-middle even">
                	<div class="client-logo-wrapper">
                        <img alt=' <?php _e('Order Management Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Order-Management.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Order Management','digital-river') ?></div>
                    <div class="copy">
                    	<ul>
                        	<li> <?php _e('Order and financial data management','digital-river') ?></li>
                            <li> <?php _e('Fulfillment and logistics','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
                 <div class="client client-right odd">
                	<div class="client-logo-wrapper">
                        <img alt=' <?php _e('Cloud Enablement Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Cloud.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Cloud Enablement','digital-river') ?></div>
                    <div class="copy">
                    	 <ul>
                        	<li> <?php _e('Subscriptions','digital-river') ?></li>
                            <li> <?php _e('Usage-based billing','digital-river') ?></li>
                            <li> <?php _e('Inter-term billing','digital-river') ?></li>
                            <li> <?php _e('Cloud billing','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
                        
            <div class="row2 fourth">
                <div class="client client-left even">
                	<div class="client-logo-wrapper">
                        <img alt='<?php _e('Analytics and Reporting Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Intellegence.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Business Intelligence','digital-river') ?></div>
                    <div class="copy">
                    	<ul>
                        	<li> <?php _e('Analytics','digital-river') ?></li>
                            <li> <?php _e('Reporting','digital-river') ?></li>
                            <li> <?php _e('Predictive modeling','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="client client-middle odd">
                	<div class="client-logo-wrapper">
                        <img alt='<?php _e('Security and Compliance Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Security-Compliance.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Security &amp; Compliance','digital-river') ?></div>
                    <div class="copy">
                    	<ul>
                        	<li> <?php _e('PCI','digital-river') ?></li>
                            <li> <?php _e('SOX','digital-river') ?></li>
                            <li> <?php _e('SSAE16','digital-river') ?></li>
                            <li> <?php _e('WEEE','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
                 <div class="client client-right even">
                	<div class="client-logo-wrapper">
                        <img alt=' <?php _e('Customer Service Icon','digital-river') ?>' class="client-logo" src="<?php echo get_image_path('cbi-page-assets/Customer-Service.png'); ?>" />
                    </div>
                    <div class="header"> <?php _e('Customer Service','digital-river') ?></div>
                    <div class="copy">
                    	 <ul>
                        	<li> <?php _e('Call center support','digital-river') ?></li>
                            <li> <?php _e('Escalation Management','digital-river') ?></li>
                        </ul>
                    </div>
                </div>
            </div> 
            
            


            
            
            <div class='clear'></div>
    </div>
</div>


           
      

    <div class='featured_wrapper'>
        <div class='featured_area'>
            <div class='featured' id='featured_1'>
                <div class='video_wrapper'>
                    <div class='embed-container'>
                        <iframe id="video_1" src="https://player.vimeo.com/video/132367280?api=1&amp;player_id=video_1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
                    </div>
                </div>
                <div class='copy_wrapper'>
                    <div class='quote'><div>Watch this video to learn how Digital River helps brands navigate the complexities of tax management.</div></div>
                    <?php $upload_dir = wp_upload_dir(); ?>
                    <style>
                         #template_j a .brackets{margin-top: 0; margin-left:0; background: transparent; color: #FFF; font-family: "DIN Next W01 Medium"; font-style: normal; font-weight: normal; font-size: 1.4em; padding: 11px 0 9px 15px;}
                        #template_j a .brackets:hover{text-decoration: underline; color: #FFF;}
                        #template_j a .brackets:before{content: "[";}
                        #template_j a .brackets:after{content: "]";}
                    </style>
                    <a target='_blank' href='<?php echo $upload_dir['baseurl']; ?>/2014/11/Digital-River-Value-Brief-Global-Tax.pdf'><div class='brackets'>
                        Read More About Tax Management
                    </div></a>
                </div>
                <div class='clear'></div>
            </div>
            
            <div class='clear'></div>
        </div>
        <div class='clear'></div>
    </div>

    <div class='container'>
        <div class='row'>
            <div class="bottom-wrapper">
                <div class="header"> <?php _e('What does that mean?','digital-river') ?></div>
                
                <div class="column1">
                    <div class="sub-header"> <?php _e('Merchant of Record','digital-river') ?></div>
                    <div class="copy"> <?php _e('We assume the financial liability for all customer transactions, including tax and compliance risk, to ensure your administrative responsibilities are handled with precision and full compliance with local laws to protect you from risk.','digital-river') ?></div>
                    <div class="sub-header"> <?php _e('Increase Speed to Market','digital-river') ?></div>
                    <div class="copy"> <?php _e('Digital River’s CBI provides a complete solution to all global ecommerce needs. Our local expertise enables you to go to market faster, and easier.','digital-river') ?>
                     <?php _e('We provide the infrastructure to allow your business to be effective in each region across the globe.','digital-river') ?>
                     <ul>
                        <li> <?php _e('Expertise in local laws, regional languages and payment methods to guarantee success in complex countries','digital-river') ?></li>
                     </ul>
                     </div>
                    <div class="sub-header"><?php _e('Seller of Record','digital-river') ?></div>
                    <div class="copy"><?php _e('As the Seller of Record, Digital River assumes responsibility for maintaining and establishing returns policy and terms of conditions of sale to smoothly handle all title of product transactions.','digital-river') ?>
                    <ul>
                        <li><?php _e('Local entities enable localized collection methods, fulfillment and customer service','digital-river') ?></li>
                        <li><?php _e('Standardized financial set-up processes','digital-river') ?></li>
                    </ul>
                    </div>
                </div>
                <div class="column2">
                        <div class="sub-header"><?php _e('Global Tax Complexities','digital-river') ?></div>
                <div class="copy"><?php _e('We assume the financial liability for all customer transactions, including tax and compliance risk, to ensure your administrative responsibilities are handled with precision and full compliance with local laws to protect you from risk.','digital-river') ?></div>
                 <div class="sub-header"><?php _e('Security and Compliance','digital-river') ?></div>
                <div class="copy">
                    <?php _e('Digital River complies with all PCI standards to protect your customers—and your business reputation— to ensure a secure shopper experience.','digital-river') ?>
                    <ul>
                        <li><?php _e('Proactive fraud management using our in-house fraud system to identify potential fraud activity by leveraging a community database of past fraud experiences','digital-river') ?></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

    <section class='go_global'>
        <div class='row'>
        <div class='heading'><?php _e('Ready to go global?','digital-river'); ?></div>
        <div class='contact_wrapper'>
            <span><?php _e('Call us at +1-800-598-7450','digital-river'); ?></span>
            <span><?php _e('OR','digital-river'); ?></span>
            <?php
            $button = "<div class='contact_button'>".__('Contact Us','digital-river')."</div>";
            icl_link_to_element(27,'page', $button);
            ?>
            <div class='clear'></div>
        </div>
        <div class='clear'></div>
    </div>
    </section>
<?php get_footer(); ?>


<!--[if lte IE 8]>

<style type="text/css">
/* Move this to conditional comments */
.client-logo-wrapper {
    list-style:none;
    behavior: expression(
        function(t){
            t.insertAdjacentHTML('afterBegin','<span class="client-logo-wrapper_before"></span>');
            t.runtimeStyle.behavior = 'none';
        }(this)
    );
}
</style>

	<![endif]-->






<script type="text/javascript">

	jQuery(document).ready(function(){

		var client;
		var winner = 0;
		
		jQuery(".clients-wrapper").children('.row2').each(function (){
			jQuery(this).children('.client').each(function (){
				client = jQuery(this).height();	
				if(client > winner){
					winner = client;	
				}		

			})
					
		})

            winner += 20;   
        jQuery('.client').css({height:winner+"px"});

		
		var lastrow2 = jQuery(".clients-wrapper").children('.row2').last();
		var lastClientClass = jQuery(lastrow2).children('.client').last().attr("class");
		if (lastClientClass.indexOf("client-left") >= 0){
				jQuery(jQuery(lastrow2).children('.client').last()).css({borderRight:"solid 1px #b1b1b1"});
		}
        /*
		jQuery(".clients-wrapper").children('.row2').last().children().each(function() {
            jQuery(this).css({borderBottom:"solid 1px #b1b1b1"})
        });
        */		
		

        jQuery(".cta").on("click",function(e){
            jQuery(window).scrollTop((jQuery(".featured_area").offset().top-200));
             jQuery("#video_1").vimeo("play");
        })


	})
	

	
</script>