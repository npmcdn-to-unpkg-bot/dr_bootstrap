<?php
/**
 * Template Name: Template Industries
 */
?>
<?php get_header(); ?>
<?php get_template_part('masthead'); ?>

<style type="text/css">


	.top-wrapper, .clients-wrapper, .bottom-wrapper{font-family:Arial, sans-serif;}
	.left_border{width:100% !important;}

	.clients-wrapper{width:100%; height:auto; border-left: solid 1px #b1b1b1; margin-top:75px; margin-bottom:75px;}
	.clients-wrapper .row{width: 100%; height: auto; overflow:hidden;}
	.clients-wrapper .row:first-child{border:none; }
	#template_j .clients-wrapper .row .client{width:33.3333%; height:auto; float:left; overflow:hidden;}
	#template_j .client .client-logo {height: inherit; margin: 0 auto;}
#template_j .clients-wrapper .row .client .cta-wrapper {
    margin: 15px auto 30px;
}
	.clients-wrapper .row.first .client{ border-top: 1px solid #B1B1B1;}
	.clients-wrapper .row.middle .client{ border-top: 1px solid #B1B1B1; border-bottom: 1px solid #B1B1B1;}
	.clients-wrapper .row .client .header{width:100%; height:auto;   text-align:center; font-size:26px; font-family: 'DIN 1451 W01 Engschrift'; text-transform:uppercase;}
	.clients-wrapper .row .client .copy{width: 306px;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		margin-top: 10px;
		font-family:Arial,sans-serif;
		font-size: 14px;
		line-height: 1.2;
		height: 60px;
	}
	#template_j	.clients-wrapper .row .client .cta-wrapper{ text-align:center;}
  	#template_j	.clients-wrapper .row .client .cta-wrapper a{font-family: "DIN 1451 W01 Engschrift", sans-serif; text-transform: uppercase; font-style: inherit; font-size: inherit; font-weight: inherit; color: #009ad7; font-size:1.2em; }



	.clients-wrapper .row .client .client-logo-wrapper{width: 100px; height:100px; margin-left:auto; margin-right:auto; margin-top: 35px;}
	.clients-wrapper .row .client .client-logo-wrapper .client-logo{width:auto; height:auto; max-width:100px; max-height:100px; margin:0 auto;}
	.clients-wrapper .row .client .client-action{width:200px; height:auto; margin-left:auto; margin-right:auto; margin-top:5px; margin-bottom:5px; text-align:center;}
	.clients-wrapper .row .client .client-action a{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row .client .client-action a:hover{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row .client .client-action a:visited{text-decoration:none; color:#009ad7;}
	.clients-wrapper .row .client-right{border-right:solid 1px #b1b1b1; }
	.clients-wrapper .row .client-middle{border-left:solid 1px #b1b1b1; border-right:solid 1px #b1b1b1;}

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
	and (max-width : 1180px)
	and (min-width : 700px){
		.clients-wrapper .row .client-right{border-right:none; }
		.clients-wrapper .row .client-middle{border-left:none; border-right:none;}
		.clients-wrapper .row{border-top: none;}
		.clients-wrapper{border-top:none; border-left:none;}
		.even{background-color:#EEEEEE;}
		.clients-wrapper .row .client{border-bottom:none !important; }
		.clients-wrapper .row .client {
			width: 33%;
		}
		.clients-wrapper .row .client .copy {
			width: 225px;
		}
		.clients-wrapper .row .client{ border:none !important;}
	}


	@media only screen
	and (max-width : 700px){
		.clients-wrapper .row .client-right{border-right:none; }
		.clients-wrapper .row .client-middle{border-left:none; border-right:none;}
		.clients-wrapper .row{border-top: none;}
		.clients-wrapper{border-top:none; border-left:none;}
		.even{background-color:#EEEEEE;}
		.clients-wrapper .row .client{border-bottom:none !important; width:100%;}
		.clients-wrapper .row .client{ border:none !important;}
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

    <div class="clients-wrapper">
            <div class="row first">
                <div class="client client-left even">
					<div class="client-logo-wrapper">
						<?php
						$image = "<img alt='".__( 'Branded Manufacturing Industry Icon', 'digital-river' )."' class='client-logo' src='".get_template_directory_uri()."/img/Industries/Branded.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(8881,'page',$image); 
						else:
							echo $image;
						endif;
						?>
					</div>
                    <div class="header"><?php _e( 'Branded Manufacturers', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'Drive direct-to-consumer sales and complement existing channel relationships with our multichannel strategies.', 'digital-river' ); ?>
                    </div>
					<div class="cta-wrapper">
						<?php
							if(!$_GET['lang']):
								icl_link_to_element(8881,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
							endif;
						?>
					</div>
                </div>
                <div class="client client-middle odd">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Entertainment Industry Icon', 'digital-river' )."'  class='client-logo' src='".get_template_directory_uri()."/img/Industries/Entertainment.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(11257,'page',$image);
						else:
							echo $image;
						endif;
						?>
                		
                	</div>
                    <div class="header"><?php _e( 'Entertainment', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'Stay well ahead of industry trends to generate more revenue from your music, movies, games and toys.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
                    	<?php
						if(!$_GET['lang']):
                    		icl_link_to_element(11257,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
                    	endif;
                    	?>
					</div>
                </div>
                 <div class="client client-right even">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Gaming Industry Icon', 'digital-river' )."' class='client-logo' src='".get_template_directory_uri()."/img/Industries/Gaming.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(11911,'page',$image); 
						else:
							echo $image;
						endif;

						?>
                	</div>
                    <div class="header"><?php _e( 'Gaming', 'digital-river' ); ?></a></div>
                    <div class="copy">
                    	<?php _e( 'Get your games in front of new players, strengthen loyalty with current gamers and expand into new global markets.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
                    	<?php
						if(!$_GET['lang']):
                    		icl_link_to_element(11911,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
                    	endif;
                    	?>
					</div>
                </div>
            </div>

            <div class="row middle">
                <div class="client client-left odd">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Retail Industry Icon', 'digital-river' )."' class='client-logo' src='".get_template_directory_uri()."/img/Industries/Retail.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(9158,'page',$image); 
						else:
							echo $image;
						endif;
						?>
                	</div>
                    <div class="header"><?php _e( 'Retail', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'Drive retail sales and enhance your existing relationships with our multichannel strategies.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
						<?php
						if(!$_GET['lang']):
							icl_link_to_element(9158,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
						endif;
						?>
					</div>
                </div>
                 <div class="client client-middle even">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Software Industry Icon', 'digital-river' )."' class='client-logo' src='".get_template_directory_uri()."/img/Industries/Software.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(9109,'page',$image); 
						else:
							echo $image;
						endif;
						
						?>
                	</div>
                    <div class="header"><?php _e( 'Software &amp; Services', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'We understand the nuances of today’s on-demand software marketplace to drive greater global sales for clients.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
						<?php
						if(!$_GET['lang']):
							icl_link_to_element(9109,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
						endif;
						?>
					</div>
                </div>
                <div class="client client-right odd">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Travel and Leisure Industry Icon', 'digital-river' )."' class='client-logo' src='".get_template_directory_uri()."/img/Industries/Travel.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(11261,'page',$image); 
						else:
							echo $image;
						endif;
						?>
                	</div>
                    <div class="header"><?php _e( 'Travel &amp; Leisure', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'Global reach and payment options to effectively manage end-to-end traveler experience.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
                    	<?php
						if(!$_GET['lang']):
                    		icl_link_to_element(11261,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
                    	endif;
                    	?>
					</div>
                </div>
            </div>



            <div class="row">
                  <div class="client client-left even" style='border-right:solid 1px #b1b1b1;'>
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Direct Selling Industry Icon', 'digital-river' )."' class='client-logo' src='".get_template_directory_uri()."/img/Industries/DirectSelling.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(8472,'page',$image);
						else:
							echo $image;
						endif;
						?>
                	</div>
                    <div class="header"><?php _e( 'Direct Selling', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'Tailored solutions that increase speed to market, enable localization, and optimize revenue for businesses who sell direct.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
						<?php
						if(!$_GET['lang']):
							icl_link_to_element(8472,'page', "&#91;".__( ' Learn More ', 'digital-river' )."&#93;");
						endif;
						?>
					</div>
                </div>

            </div>







    </div>








        </div>
    </div>
</section>
<?php get_footer(); ?>

<script type="text/javascript">

	jQuery(document).ready(function(){

		var client;
		var winner = 0;

		jQuery(".clients-wrapper").children('.row').each(function (){
			jQuery(this).children('.client').each(function (){
				client = jQuery(this).height();
				if(client > winner){
					winner = client;
				}

			})
			//adding some padding to the bottom of each .client
			winner += 5;
			jQuery(".clients-wrapper").children('.row').children('.client').css({height:winner+"px"});
			winner = 0;

		})

		var lastRow = jQuery(".clients-wrapper").children('.row').last();
		var lastClientClass = jQuery(lastRow).children('.client').last().attr("class");
		jQuery(lastRow).children('.client').css({borderBottom:"solid 1px #b1b1b1"})

		if( lastClientClass == "client client-left" ){
				jQuery(jQuery(lastRow).children('.client').last()).css({borderRight:"solid 1px #b1b1b1" });
		}
	})

</script>
