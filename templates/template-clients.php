<?php
/**
 * Template Name: Template Clients
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

<style type="text/css">
	.left_border{width:100% !important;}
	.content_container{font-family:"HelveticaNeueW01-55Roma"; overflow:hidden;}
	.quote-wrapper{width:100%; height:auto; margin-top:75px; margin-bottom:75px;}
	.quote-wrapper .client-logo-wrapper{width: 200px; height:70px; margin-left:auto; margin-right:auto; margin-top:30px; margin-bottom:15px;}
	.quote-wrapper .client-logo-wrapper .client-logo{width:auto; height:auto; max-width:200px; max-height:70px; margin:0 auto; } 
	.quote-wrapper .quote{width:700px; height:auto; margin-left:auto; margin-right:auto; padding:5px; color:#807e82; font-size:20px;  line-height:1.3;}
	.quote-wrapper .button-wrapper{width:170px; height:40px; margin-left:auto; margin-right:auto; padding: 20px;}
	/* .quote-wrapper .button-wrapper #action{width:100%; height:100%; background-color:rgb(151,215,0); color:#FFF;} */
	
	.quote-wrapper .button-wrapper #action{
		  position: relative;
		  vertical-align: top;
		  width: 100%;
		  height: 100%;
		  padding: 0;
		  font-size: 14px;
		  color: white;
		  text-align: center;
		  background: rgb(151,215,0);
		  border: 0;
		  cursor: pointer;
		  border-radius:3px;
	 }
	
	.clients-wrapper{width:100%; height:auto; border:solid 1px #b1b1b1; margin-bottom:100px;}
	.clients-wrapper .row{width:100%; height:180px; border-top:solid 1px #b1b1b1; }
	.clients-wrapper .row:first-child{border:none; }
	.clients-wrapper .row .client{width:33%; height:100%; float:left;}
	.clients-wrapper .row .client .client-logo-wrapper{width: 200px; height:70px; margin-left:auto; margin-right:auto; margin-top:30px;}
	.clients-wrapper .row .client .client-logo-wrapper .client-logo{width:auto; height:auto; max-width:200px; max-height:70px; margin:0 auto;}
	.clients-wrapper .row .client .client-action{width:200px; height:auto; margin-left:auto; margin-right:auto; margin-top:30px; margin-bottom:30px; text-align:center;}
	.clients-wrapper .row .client .client-action a{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row .client .client-action a:hover{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row .client .client-action a:visited{text-decoration:none; color:#009ad7;}

	.clients-wrapper .row .client-middle{border-left:solid 1px #999; border-right:solid 1px #b1b1b1;}
	
	
	
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

	
	@media only screen 
	and (max-width : 700px){
		.clients-wrapper .row, .clients-wrapper .row:first-child{
			height: auto;
			border-right: 1px solid #B1B1B1;
			width: 300px;
			margin-left: auto;
			margin-right: auto;
			overflow: hidden;
			border-left: 1px solid #b1b1b1;
			border-top:none;
		}
		
		.clients-wrapper .row:last-child{
			border-bottom: 1px solid #b1b1b1;
		}
		
		.clients-wrapper .row .client {
			height: 100%;
			float: left;
			width: 100%;
			border-top: 1px solid #999;
			border-left:none !important;
			border-right:none !important;
		}
		
		.clients-wrapper {
			border: none;
		}
		
		.quote-wrapper .quote {
			width: 80%;
			margin-left: 10%;
			margin-right: 10%;
		}
	}

	

</style>

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




<!-- Content Container -->
<section id="template_j" class="content_container">
    <div class="left_border"></div>
    <div class="container">
        <div class="row">


	
    <div class="quote-wrapper">
    	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Kaspersky_lab_logotipo.png'); ?>" /></div>
        <div class="quote">Since 2000, Kaspersky has relied on Digital River to manage their global ecommerce operation. This includes providing marketing services, website development, transaction processing, tax management, product fulfillment and risk management services.</div>
        <div class="button-wrapper"><input type="button" id="action" value="Read Success Story" onClick="window.open('http://info.digitalriver.com/rs/digitalriver/images/Digital%20River%20Kaspersky%20Case%20Story.pdf')" /></div>
    </div>
	
    <div class="clients-wrapper">
            <div class="row">
                <div class="client client-left">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Kaspersky_lab_logotipo.png'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="http://info.digitalriver.com/rs/digitalriver/images/Digital%20River%20Kaspersky%20Case%20Story.pdf">Read Success Story</a></div>
                </div>
                <div class="client client-middle">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Microsoft_4.23.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                 <div class="client client-right">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Lenovo_logo.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
            </div> 
            
                        <div class="row">
                <div class="client client-left">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Logitech_4.23.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                <div class="client client-middle">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/WildTangent_logo.png'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="http://vimeo.com/93173407">Watch Success Story</a></div>
                </div>
                 <div class="client client-right">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/spotify_150x150.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
            </div> 
            
                        <div class="row">
                <div class="client client-left">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/pacsun.png'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="http://info.digitalriver.com/rs/digitalriver/images/Pacsun_CaseStory.pdf">Read Success Story</a></div>
                </div>
                <div class="client client-middle">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Citrix_4.23.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                 <div class="client client-right">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Adobe-.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
            </div> 
            
                      <div class="row">
                <div class="client client-left">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/vmware_resized.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                <div class="client client-middle">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Autodesk_4.23.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                 <div class="client client-right">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Ubisoft.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
            </div> 
            
                      <div class="row">
                <div class="client client-left">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/Trend_Micro_Logo.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                <div class="client client-middle">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/esg-logo-2012small.png'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="https://www.youtube.com/watch?v=YdaIiFa-yhs">Watch Success Story</a></div>
                </div>
                 <div class="client client-right">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/AE_MktgLogo_Vert_Blk.png'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="http://info.digitalriver.com/rs/digitalriver/images/Allen_Edmonds_CaseStory.pdf">Read Success Story</a></div>
                </div>
            </div> 
            
                                  <div class="row">
                <div class="client client-left">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/TTR-Logo.jpg'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="https://www.youtube.com/watch?v=4x33OR2BLJI">Watch Success Story</a></div>
                </div>
                <div class="client client-middle">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/cnet-logo.png'); ?>" /></div>
                    <div class="client-action"></div>
                </div>
                 <div class="client client-right">
                	<div class="client-logo-wrapper"><img class="client-logo" src="<?php echo get_image_path('clients/her-interactivev2.jpg'); ?>" /></div>
                    <div class="client-action"><a target="_blank" href="https://www.youtube.com/watch?v=HhBth3wSlPY">Watch Success Story</a></div>
                </div>
            </div> 
            
            
    
    </div>

	
   
	


           
        </div>
    </div>
</section>
<?php get_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function(){
	console.log("works");
	jQuery(".subtitle").appendTo(".content");
})
</script>