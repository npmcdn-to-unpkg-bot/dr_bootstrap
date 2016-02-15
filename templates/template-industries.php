<section id="industries" class="content_container">
    <div class="container">
        <div class="row clients-wrapper">

                <div class="col-sm-6 col-md-4 client">
					<div class="client-logo-wrapper">
						<?php
						$image = "<img alt='".__( 'Branded Manufacturing Industry Icon', 'digital-river' )."' class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/Branded.png' />";
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
								_e('<a href="'.echo get_permalink(icl_object_id(8881, 'page', true)).'" class="brackets">Learn More</a>');
							endif;
						?>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 client">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Entertainment Industry Icon', 'digital-river' )."'  class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/Entertainment.png' />";
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
                    		_e('<a href="'.echo get_permalink(icl_object_id(11257, 'page', true)).'" class="brackets">Learn More</a>');
                    	endif;
                    	?>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 client">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Gaming Industry Icon', 'digital-river' )."' class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/Gaming.png' />";
						if(!$_GET['lang']):	
							icl_link_to_element(11911,'page',$image); 
						else:
							echo $image;
						endif;
						?>
                	</div>
                    <div class="header"><?php _e( 'Gaming', 'digital-river' ); ?></div>
                    <div class="copy">
                    	<?php _e( 'Get your games in front of new players, strengthen loyalty with current gamers and expand into new global markets.', 'digital-river' ); ?>
                    </div>
                    <div class="cta-wrapper">
                    	<?php
						if(!$_GET['lang']):
                    		_e('<a href="'.echo get_permalink(icl_object_id(11911, 'page', true)).'" class="brackets">Learn More</a>');
                    	endif;
                    	?>
					</div>
                </div>
            
                <div class="col-sm-6 col-md-4 client">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Retail Industry Icon', 'digital-river' )."' class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/Retail.png' />";
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
							_e('<a href="'.echo get_permalink(icl_object_id(9158, 'page', true)).'" class="brackets">Learn More</a>');
						endif;
						?>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 client">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Software Industry Icon', 'digital-river' )."' class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/Software.png' />";
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
							_e('<a href="'.echo get_permalink(icl_object_id(9109, 'page', true)).'" class="brackets">Learn More</a>');
						endif;
						?>
					</div>
                </div>

                <div class="col-sm-6 col-md-4 client">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Travel and Leisure Industry Icon', 'digital-river' )."' class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/Travel.png' />";
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
                    		icl_link_to_element(11261,'page', __( 'Learn More', 'digital-river' ));
                    		_e('<a href="'.echo get_permalink(icl_object_id(11261, 'page', true)).'" class="brackets">Learn More</a>');
                    	endif;
                    	?>
					</div>
                </div>
            
                <div class="col-sm-6 col-md-4 client">
                	<div class="client-logo-wrapper">
                		<?php
						$image = "<img alt='".__( 'Direct Selling Industry Icon', 'digital-river' )."' class='img-responsive client-logo' src='".get_template_directory_uri()."/img/Industries/DirectSelling.png' />";
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
							_e('<a href="'.echo get_permalink(icl_object_id(8472, 'page', true)).'" class="brackets">Learn More</a>');
						endif;
						?>
					</div>
                </div>

        </div>
    </div>
</section>

