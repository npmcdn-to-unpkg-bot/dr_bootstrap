<?php
/**
 * Template Name: Template resources
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

<style type="text/css">

#template_j{
	line-height:1;
}

#template_j a {
  color: #009ad7;
  display: inherit;
  font-family: Verdana, sans-serif;
  font-size: 13px;
  font-style: normal;
  font-weight: normal;
  margin: 2px 0;
  text-decoration: none;
}
.left_border{width:100% !important;}
.section{width:100%; height:280px; overflow:hidden; margin-top:5px;}
.section:first-child{margin-top:75px;}
.section:last-child{margin-bottom:75px;}
.section .big-side{margin-right:3px; margin-left:3px;}
.section .big-side{width:650px; padding: 20px; height:240px;  float:left; }
.section .big-side .icon{width:100px; height:50px;  padding:0px; 
padding-bottom:20px;}
.section .big-side .header{width:auto; height:auto; overflow:hidden; font-size:26px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase; margin-top:15px; color:#FFF;}
.section .big-side .subhead{font-family:"HelveticaNeueW01-55Roma"; width:270px; height:auto; overflow:hidden; margin-top:10px; color:#FFF;}
.section .big-side .CTA{margin-top:20px;  width:300px; height:50px;}

.section .small-side{margin-right:3px; margin-left:3px;}
.section .small-side{width:438px; height:260px;  float:left;}
.section .small-side .top-container, .section .small-side .bottom-container{width:408px; height:108px; padding:15px;  }
.section .small-side .top-container{margin-bottom:5px; background-color: #009ad7;}
.section .small-side .bottom-container{margin-top:5px; background-color:#a8ca1f; }
.section .small-side .top-container .icon, .section .small-side .bottom-container .icon{
	width:100px;
	height:50px;
	padding:0px;
	padding-top:20px;
	padding-bottom:20px;
	float:left;
}
.section .small-side .top-container .header, .section .small-side .bottom-container .header{
	width:297px; height:auto; float:right; color:#fff; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase;  font-size: 27px; margin-top: 5px;
}

.section .small-side .top-container .CTA, .section .small-side .bottom-container .CTA{
	width:255px; height:40px; float:right; margin-top:10px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase; 
}

.CTA .CTA-icon{height:50px; width:50px; float:left;}
.CTA .CTA-tag{width:150px; height:50px; float:left; font-size:20px; color:#FFF; margin-top:5px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase;}



.top-container .CTA .CTA-tag{color:#a8ca1f;}
.bottom-container .CTA .CTA-tag{color:#009ad7;}


.resource-links{width:1140px; height:175px; background-color: #F4F4F4; border-bottom: solid 1px #a8ca1f; border-top: solid 1px #a8ca1f; margin-top:40px; margin-bottom:75px; }
.resource-links .left-side,.resource-links .right-side{width:auto; height:auto; overflow:hidden;}
.resource-links .left-side{float:left; padding:20px; padding-top:30px; padding-bottom:30px;}
.resource-links .right-side{float:right; margin-right:140px; padding:20px; padding-top:30px; padding-bottom:30px;}

.resource-links .header{font-size:30px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase; margin-bottom:15px; letter-spacing:-1; color:#807E82;}
.resource-links ul{height:auto; width:auto; float:left; margin-left:60px; margin-right:60px;}
.resource-links .left-side  .first{margin-left:0px;}
.resource-links .left-side  .last{margin-right:0px;}
.resource-links .right-side .first{margin-right:0px; margin-left:0px;}
.resource-links li{padding:5px; width:auto; height:auto;}

	@media only screen 
	and (max-width : 1180px)
	and (min-width : 624px){
		.section .small-side {
			width: 31%;
			min-width:200px;
		}

		.section .big-side {
			width: 62%;
			padding: 20px 2%;
		}	

		.section .small-side .top-container {
			padding-left: 10%;
			padding-right: 10%;
		}
		
		.section .small-side .top-container .icon, .section .small-side .bottom-container .icon {
			display: none;
		}
		
		.section .small-side .top-container .CTA, .section .small-side .bottom-container .CTA, .section .small-side .top-container .header, .section .small-side .bottom-container .header  {
			float: left;
		}
		
		.section .small-side .top-container, .section .small-side .bottom-container {
			width: 94%;
			height: 108px;
			padding: 15px 3%;
		}
		
		
		.section .small-side .top-container .header, .section .small-side .bottom-container .header {
			width: 95%;
			height: auto;
			float: right;
			color: #FFF;
			font-family: "DIN 1451 W01 Engschrift";
			text-transform: uppercase;
			font-size: 22px;
			margin-top: 5px;
			margin-left: 5%;
		}
		
		.CTA .CTA-icon {
			height: 34px;
			width: 34px;
			float: left;
			margin-left:5px;
		}
		.CTA .CTA-tag {
			height: 34px;
			margin-left:5px;
		}
		
		.section .big-side .icon {
			width: 100px;
			height: 50px;
			padding: 0px 0px 20px;
			margin-top:0px;
		}
		
		.section .big-side .header {
    		width: 275px;
		}
		
				
		.resource-links {
			width: 100%;
		}
		
		.resource-links .left-side {
			float: left;
			padding-left: 5%;
			padding-right: 5%;
			width: 90%;
			height: auto;
			overflow: hidden;
		}
		
		.resource-links .header {
			margin-top: 15px;
		}
		
		.resource-links ul {
			height: auto;
			width: 30%;
			float: left;
			margin-left: 2%;
			margin-right: 2%;
		}
		
		.resource-links {
			height: auto;
			overflow: hidden;
		}
		
		.resource-links .right-side {
			margin-right: 0px;
			padding: 30px 20px 30px 0px;
			margin-left: 0px;
			float: left;
			margin-left: 5%;
			margin-right: 5%;
		}
		
		.resource-links .right-side .first {
				width:100%;
		}

	}
	
	@media only screen 
	and (max-width : 624px)
	and (min-width : 425px){
		.section .small-side {
			width: 96%;
			min-width: 200px;
			margin-left: 2%;
			margin-right: 2%;
		}
		
		.section .small-side .top-container, .section .small-side .bottom-container {
			width: 43%;
			height: 108px;
			padding: 15px 3%;
			float: left;
		}

		.section .big-side {
			width: 92%;
			padding: 20px 2%;
			margin-right: 2%;
			margin-left: 2%;
		}	
		
		.section .small-side .top-container {
			margin-left: 0%;
			margin-right: 1%;
			margin-top:8px;
		}
		
		.section .small-side .bottom-container {
			margin-top: 0px;
			margin-left: 1%;
			margin-top:8px;
		}


		
		.section .small-side .top-container .icon, .section .small-side .bottom-container .icon {
			display: none;
		}
		
		.section .small-side .top-container .CTA, .section .small-side .bottom-container .CTA, .section .small-side .top-container .header, .section .small-side .bottom-container .header  {
			float: left;
		}
		
		.section {
			width: 100%;
			height: 425px;
			overflow: hidden;
			margin-top: 5px;
		}
		
		.section .small-side {
			height: 154px;
			float: left;
		}
		
		.section .small-side .top-container .header, .section .small-side .bottom-container .header {
			width: 95%;
			height: auto;
			float: right;
			color: #FFF;
			font-family: "DIN 1451 W01 Engschrift";
			text-transform: uppercase;
			font-size: 22px;
			margin-top: 5px;
			margin-left: 5%;
		}
		
		.CTA .CTA-icon {
			height: 34px;
			width: 34px;
			float: left;
			margin-left:5px;
		}
		.CTA .CTA-tag {
			height: 34px;
			margin-left:5px;
		}
		
		.section .big-side .icon {
			width: 100px;
			height: 50px;
			padding: 0px 0px 20px;
			margin-top:0px;
		}
		
		.section .big-side .header {
    		width: 275px;
		}
		
		.resource-links {
			width: 100%;
		}
		
		.resource-links .left-side {
			float: left;
			padding-left: 5%;
			padding-right: 5%;
			width: 90%;
			height: auto;
			overflow: hidden;
		}
		
		.resource-links .header {
			margin-top: 15px;
		}
		
		.resource-links ul {
			height: auto;
			width: 30%;
			float: left;
			margin-left: 2%;
			margin-right: 2%;
		}
		
		.resource-links {
			height: auto;
			overflow: hidden;
		}
		
		.resource-links .right-side {
			margin-right: 0px;
			padding: 30px 20px 30px 0px;
			margin-left: 0px;
			float: left;
			margin-left: 5%;
			margin-right: 5%;
		}
		
		.resource-links .right-side .first {
				width:100%;
		}

	}
	
		@media only screen 
	and (max-width : 425px){
		.section .small-side {
			width: 96%;
			min-width: 200px;
			margin-left: 2%;
			margin-right: 2%;
		}
		
		.section .small-side .top-container, .section .small-side .bottom-container {
			width: 94%;
			height: 108px;
			padding: 15px 3%;
			float: left;
		}

		.section .big-side {
			width: 92%;
			padding: 20px 2%;
			margin-right: 2%;
			margin-left: 2%;
		}	
		
		.section .small-side .top-container {
			margin-left: 0%;
			margin-right: 1%;
			margin-top:4px;
		}
		
		.section .small-side .bottom-container {
			margin-top: 0px;
			margin-left: 1%;
			margin-top:0px;
		}


		
		.section .small-side .top-container .icon, .section .small-side .bottom-container .icon {
			display: none;
		}
		
		.section .small-side .top-container .CTA, .section .small-side .bottom-container .CTA, .section .small-side .top-container .header, .section .small-side .bottom-container .header  {
			float: left;
		}

		.section {
			width: 100%;
			height: 550px;
			overflow: hidden;
			margin-top: 0px;
		}
		
		.section .small-side {
			height: 290px;
			float: left;
		}
		
		.section .small-side .bottom-container, .section .small-side .top-container {
			margin-left: 0%;
			margin-right:0%
		}
		
		.section .big-side .subhead {
			width: 221px;
			font-size: 15px;
		}
		
		.section .small-side .top-container .header, .section .small-side .bottom-container .header {
			width: 95%;
			height: auto;
			float: right;
			color: #FFF;
			font-family: "DIN 1451 W01 Engschrift";
			text-transform: uppercase;
			font-size: 22px;
			margin-top: 5px;
			margin-left: 5%;
		}
		
		.CTA .CTA-icon {
			height: 34px;
			width: 34px;
			float: left;
			margin-left:5px;
		}
		.CTA .CTA-tag {
			height: 34px;
			margin-left:5px;
		}
		
		.section .big-side .icon {
			width: 100px;
			height: 50px;
			padding: 0px 0px 20px;
			margin-top:0px;
		}
		
			.section .big-side .header {
				width: 215px;
			}
			
			.section .big-side {
			width: 92%;
			padding: 10px 2% 15px;
			margin-right: 2%;
			margin-left: 2%;
		}
		
		.resource-links {
			width: 100%;
		}
		
		.resource-links .left-side {
			float: left;
			padding-left: 5%;
			padding-right: 5%;
			width: 90%;
			height: auto;
			overflow: hidden;
		}
		
		.resource-links .header {
			margin-top: 15px;
		}
		
.resource-links ul {
    height: auto;
    width: 100%;
    float: left;
    clear: left;
    margin-left: 0px;
    margin-right: 0px;
}
		
		.resource-links {
			height: auto;
			overflow: hidden;
		}
		
		.resource-links .right-side {
			margin-right: 0px;
			padding: 30px 20px 30px 0px;
			margin-left: 0px;
			float: left;
			margin-left: 5%;
			margin-right: 5%;
		}
		
		.resource-links .right-side .first {
				width:100%;
		}

	}


	
	
</style>
<div class="subtitle">Ecommerce is a complex business. Take a deeper dive into our solutions and meet some of our customers. </div>
<script type="text/javascript">

jQuery(document).ready(function(){
		jQuery(".content .subtitle").remove();
		jQuery(".subtitle").appendTo(".content");
})
</script>

<!-- Content Container -->
<section id="template_j" class="content_container">
    <div class="left_border"></div>
    <div class="container">
        <div class="row">
			
            <div class="section">
            	<div class="big-side" style="background-image:url( <?php echo get_image_path('Google%20Shopping%20Webinar.jpg'); ?> )">
                            <div class="header">ECommerce in Brazil</div>
                    <div class="subhead">On-Demand Webinar: The Power of Google Shopping</div>
                    <div class="CTA">
                                <a href="http://info.digitalriver.com/FY14Q2_Webinar_Google-Shopping_June_View-On-Demand.html?campaign_source=OnDemand_Website&campaign_medium">         
                        	<div class="CTA-icon"><img src="<?php echo get_image_path('download-icon.png'); ?> " /></div>
                           <div class="CTA-tag">Download</div>
                           
                           </a>
                    
                    </div>
                </div>
                <div class="small-side">
                	<div class="top-container">
                    	<div class="icon"><img src="<?php echo get_image_path('paper.png'); ?> " /></div>
                        <div class="header">Be Direct White Paper</div>
                        <div class="CTA">
                            <a href="<?php echo get_image_path('Digital_River_Why_Direct-to-Consumer_is_Right_for_Your_Business_White Paper.pdf'); ?>">        
                        	<div class="CTA-icon"><img src="<?php echo get_image_path('download-icon.png'); ?> " /></div>
                            <div class="CTA-tag">Download</div>
                       </a>
                        </div>
                    </div>
                    <div class="bottom-container">
                    	<div class="icon"><img src="<?php echo get_image_path('play.png'); ?> " /></div>
                        <div class="header">be direct webinar</div>
                        <div class="CTA">
                              <a href="http://info.digitalriver.com/FY14Q2_Webinar_Forrester_View-On-Demand.html?campaign_source=Website_Events_and_Webinars_Page&campaign_medium">
                        	<div class="CTA-icon"><img src="<?php echo get_image_path('play-icon.png'); ?> " /></div>
                            <div class="CTA-tag">Watch</div>
                            </a>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section">
                        
                    <div class="small-side">
                	<div class="top-container">
                    	<div class="icon"><img src="<?php echo get_image_path('paper.png'); ?> " /></div>
                        <div class="header">China Infographic</div>
                        <div class="CTA">
                        	<a href="http://55x6d1oo46s209smp10ge1wlsl.wpengine.netdna-cdn.com/wp-content/uploads/2014/05/Digital-River-China-Infographic.pdf">
                        	<div class="CTA-icon"><img src="<?php echo get_image_path('download-icon.png'); ?> " /></div>
                            <div class="CTA-tag">Reserve Your Copy</div>
                            </a>
                        </div>
                    </div>
                    <div class="bottom-container">
                    	<div class="icon"><img src="<?php echo get_image_path('play.png'); ?> " /></div>
                        <div class="header">WildTangent Video</div>
                        <div class="CTA">
                             <a href="http://vimeo.com/93173407">       
                        	<div class="CTA-icon"><img src="<?php echo get_image_path('play-icon.png'); ?> " /></div>
                            <div class="CTA-tag">Watch</div>
                            </a>
                     
                        </div>
                    </div>
                </div>
            	<div class="big-side" style="background-image:url( <?php echo get_image_path('Global-Strategy-Image.jpeg'); ?> )">
                    <div class="CTA">
                                  <a href=" <http://info.digitalriver.com/FY14Q2_Drip_LP-global-strategies.html?campaign_source=&campaign_medium=website&Lead_source=website>">
                        	<div class="CTA-icon"><img src="<?php echo get_image_path('download-icon.png'); ?> " /></div>
                            <div class="CTA-tag">Download</div>
                            </a>
                 
                    </div>
                </div>

            </div>
			
            <div class="resource-links">
            	<div class="left-side">
                	<div class="header">Thought Leadership</div>
                	<ul class="first">
                    	<li><a href="<?php echo site_url('/resources/commerce/','http'); ?>">Commerce</a></li>
                        <li><a href="<?php echo site_url('/resources/payments/','http'); ?>">Payments</a></li>
                        <li><a href="<?php echo site_url('/resources/marketing/','http'); ?>">Marketing</a></li>
                    </ul>
                    <ul>
                    	<li><a href="<?php echo site_url('/resources/global-markets/','http'); ?>">Global Markets</a></li>
                        <li><a href="<?php echo site_url('/resources/client-success-stories/','http'); ?>">Client Stories</a></li>
                    </ul>
                    <ul class="last">
                    	<li><a href="<?php echo site_url('/resources/events-and-webinars/','http'); ?>">Events and Webinars</a></li>
                        <li><a href="<?php echo site_url('/resources/blog/','http'); ?>">Blog</a></li>
                    </ul>
                </div>
                <div class="right-side">
                	<div class="header">Developers Resources</div>
                    <ul class="first">
                    	<li><a href="https://developers.digitalriver.com/user">Developers Portal</a></li>
                        <li><a href="<?php echo site_url('/resources/developers-resources/demos/','http'); ?>">Demos</a></li>
                        <li><a href="<?php echo site_url('/resources/developers-resources/developers-toolkits/','http'); ?>">Developers Toolkits</a></li>
                    </ul>
                </div>
            </div>

	


           
        </div>
    </div>
</section>
<?php get_footer(); ?>