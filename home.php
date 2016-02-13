<?php
/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<style type="text/css">

#clients .title h2, #news .title h2, .icon .title h2{
	line-height: .5em !important;
	padding-top: 10px !important;
}

  #news .title h2 {
    padding-top: 10px !important;
    line-height: 1 !important;
    font-size: 20px !important;
    text-transform: uppercase;
    font-family: "DIN Next W01 Medium" !important;
    color: #343438;
    margin: 0 15px 0 0;
}

</style>


<div class="hero-wrapper" style="background: #017eb4;">

   <div class="hero flexslider owl-carousel owl-theme">
            <?php $count = 0; ?>
            <?php $slides = get_field('slides'); ?>
         
                <?php foreach($slides as $key => $slide) : ?>
                    <?php if(ICL_LANGUAGE_CODE != "en"): ?>

                        <div class='item'>
                        
    						<?php $link = ($slide['external_link'])?: $slide['link']; ?>
    						<a <?php if($slide['new_tab']) echo 'target="_blank"'; ?> href=" <?php  echo $link; ?>" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="span_10_slide slide">
                                            <?php
                                            if($slide['text-align'] == "right"){
                                                $style = " right: 0px; text-align: right; ";
                                                $buttonStyle = " float: right;";
                                            }else{
                                                $style = "";
                                                $buttonStyle = "";
                                            }
                                            ?>
                                            <section class="header" style=" color: <?php echo $slide['headingcolor']; ?>; <?php echo $style; ?> ">
                                                <?php 
                                                if(count($slide['heading']) > 0){
                                                    foreach ($slide['heading'] as $key => $line) { ?>
                                                    <?php
                                                    if($line['font'] == 'light'){
                                                        $fontStyle = 'font-family: "DIN Next W01 Light";';
                                                    }else{
                                                        $fontStyle = 'font-family: "DIN 1451 W01 Engschrift",sans-serif;';
                                                    }

                                                    if($line['new_line']){echo "<br>";}
                                                    ?>
                                                   
                                                    <span style='<?php echo $fontStyle; ?>' ><?php echo $line['line']; ?></span>
                                                   
                                                        
                                                <?php }
                                                }
                                                ?>
                                            </section>
    											<?php if($slide['button_display'][0] == "Add" || $slide['button_display'] == "Add") : ?>
    												<section class="link" style=" background-color: <?php echo $slide['button_color']; ?>; <?php echo $buttonStyle; ?>" ><?php echo $slide['link_title']; ?></section>
    											<?php endif ?>
    									</section>
                                    </div>
                                </div>
                            <?php if ($slide['background_image']) : ?>
                                <img id="<?php if ($count == 0) {echo 'firstImage';} ?>" src="<?php echo $slide['background_image']; ?>" class="not-mobile slide_image">
                                <img id="<?php if ($count == 0) {echo 'firstMobileImage';} ?>" src="<?php echo $slide['mobile_background_image']; ?>"  class="mobile slide_image">
                            <?php endif; ?>
    					</a>
                        </div>
                    <?php endif; ?>
                    <?php if($count == 0 && ICL_LANGUAGE_CODE == "en"): ?>
                         <div class='item'>
                            <a target="_blank" href="http://info.digitalriver.com/Forrester-Wave-Subscription-Billing_Forrester-Wave-LP.html?utm_source=games&utm_medium=email&utm_content=monetization_email_1&utm_campaign=nosteam" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="span_10_slide slide">
                                            <section class="header" style=" color: #646469;">
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >Digital River named one</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >of the most significant</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >subscription billing</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >vendors by Forrester</span>
                                            </section>
                                            <section class="link" style=" background-color: #B3D334;" >Get the Report</section>
                                        </section>
                                    </div>
                                </div>
                            <?php if ($slide['background_image']) : ?>
                                <img src="/wp-content/uploads/2016/02/Forrester-Sub-Report-Hero-Banner.jpg" class="not-mobile slide_image">
                                <img src="/wp-content/uploads/2016/02/Forrester_mobile.jpg"  class="mobile slide_image">
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class='item'>
                            <a target="_blank" href="/clients/industries/gaming/" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="span_10_slide slide">
                                            <section class="header" style=" color: #FFF;">
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; line-height:1.1 !important; ' >You build games.</span>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; line-height:1.1 !important; ' >We build empires.</span>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; display:block; line-height:1.4 !important; letter-spacing: -1px; font-size:.6em;  font-family: "DIN Next W01 Light";' >Integrated payment and commerce solutions</span>
                                            </section>
                                            <section class="link" style=" background-color: #B3D334;" >Learn More</section>
                                        </section>
                                    </div>
                                </div>
                            <?php if ($slide['background_image']) : ?>
                                <img src="/wp-content/uploads/2016/02/Gaming-Hero-Banner-desktop.jpg" class="not-mobile slide_image">
                                <img src="/wp-content/uploads/2016/02/Gaming-Mobile.jpg"  class="mobile slide_image">
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class='item'>
                            <a target="_blank" href="http://www.goglobalocity.com" class="slide_link">
                            <?php if ($slide['background_image']) : ?>
                                <img src="/wp-content/uploads/2016/01/DR-Globalocity-2016_72-DPI_Cropped-4.jpg" class="not-mobile slide_image">
                                <img src="/wp-content/uploads/2016/01/1000-x-750-mobile-banner-2.jpg"  class="mobile slide_image">
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class='item'>
                            <a target="_blank" href="/solutions/commerce/smartchannel/" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="span_10_slide slide">
                                            <section class="header" style=" color: #646469;">
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif;' >Enable partner channel</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif;' >and SMB ecommerce</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif;' >with SmartChannel<span style="font-size:.5em; position:relative; top:-.5em;">™</span></span>
                                            </section>
                                            <section class="link" style=" background-color: #B3D334;" >Learn More</section>
                                        </section>
                                    </div>
                                </div>
                            <?php if ($slide['background_image']) : ?>
                                <img src="/wp-content/uploads/2016/01/DR.com-SmartChannel-Hero-Banner_desktop.jpg" class="not-mobile slide_image">
                                <img src="/wp-content/uploads/2016/01/DR.com-SmartChannel-Hero-Banner_mobile.jpg"  class="mobile slide_image">
                            <?php endif; ?>
                            </a>
                        </div>

                      <?php endif; ?>

                    <?php $count++; ?>
                <?php endforeach; ?>



        </div>
</div>


    <div id="main_content">

    	<section id="why-work">
            <div class="blue-bg"></div>
        	<div class="wrapper">
                <div class="left_col">
					<?php while(have_rows('why_work_section') ) : the_row(); ?>
                        <h1 class='white eng'><?php the_sub_field('header'); ?></h1>
                        <p class='white'><?php the_sub_field('description'); ?></p>
                        <a class="button opposite" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_label'); ?></a>
                    <?php endwhile; ?>
                </div>

                <div class="right_col">
                   	<?php while(have_rows('capabilities') ) : the_row(); ?>
            				<div class="icon <?php the_sub_field('custom_css_classes'); ?> ">
                        	<div class="icon-wrapper">
                                <?php $icon = get_sub_field('icon'); ?>
                    			<img alt='<?php echo $icon['alt']; ?>' src=" <?php echo $icon['url']; ?> " />
                        	</div>
                            <div class="title">
                                <h2 class='eng'><?php the_sub_field('title'); ?></h2>
                                <a href=" <?php the_sub_field('link'); ?>">[ <?php the_sub_field('link_title'); ?> ]</a>
                            </div>
                            <p> <?php _e(get_sub_field('description'),'digital-river'); ?> </p>
                        </div>
                 	<?php endwhile; ?>
                </div> <!-- End of right_col -->
                <div class="clear"></div>
            </div> <!-- End of wrapper -->
        </section> <!-- End of why work section -->
        <section id="clients">
        	<div class="wrapper">
            	<div class="title">
                  <h2 class='eng white'><?php _e('Clients', 'digital-river'); ?></h2>
                  <a href="<?php echo site_url('/clients/' ,'http'); ?>">[ <?php _e('More Clients','digital-river'); ?> ]</a>
                </div>


                    <div id="owl-demo" class="clients-wrapper" style="max-height:115px;">

                        <?php foreach(get_field('client_logos') as $client_logo) : ?>
                            <div class='item'>
                                <img class="owl-lazy" data-src="<?php echo $client_logo['logo']; ?>" />
                            </div>
                        <?php endforeach; ?>

                 </div> <!-- End of clients-wrapper -->
            </div> <!-- End of wrapper -->
        </section> <!-- End of clients section -->
        <?php if(!$_GET['lang']): ?>

    		<section id="news">
            	<div class="row" style='max-width:1180px; padding:40px 0 20px; margin-bottom:20px; border-bottom:solid 1px #CCC;'>
                        <div class="col-md-6">
                            <div class="title">
                                <h2 class='eyebrow eng'>News</h2>
                                <a href="<?php echo get_permalink(459); ?>">[ More News ]</a>
                            </div>
                            <?php
                            $resourcesSection = new ResourcesSection($posts);
                            $resourcesSection->displayPressReleases();
                            ?>
                        </div> <!-- End of col-3 -->
                        <div class="col-md-6 last">
                            <div class="title">
                                <h2 class='eyebrow eng'>Join Us</h2>
                                <a href="<?php echo get_permalink(535); ?>">[ More Events ]</a>
                            </div>
                             <?php $resourcesSection->displayEvents(); ?>
                        </div> <!-- End of col-3 -->
                        <div class='clear'></div>
                </div> <!-- End of wrapper -->

                            <?php
                            $args = array( 
                                'post_type' => 'marketing_material',
                                'showposts' => 6                                
                            );  
                            $posts = get_posts($args);
                            $resourcesSection = new ResourcesSection($posts);
                            $resourcesSection->display(true);
                            ?>
                            
                   
                         <div class='clear'></div>
                </div>

            </section> <!-- End of news section -->
        <?php endif; ?>
        <?php /*
       <section id="work-for">
       	<?php while(have_rows('work_for_us_section') ) : the_row(); ?>
        	<div class='wrapper'>
                <div class="left_col">
                    <h1 class='white eng'><?php the_sub_field('header'); ?></h1>
                </div>
                <div class='right_col'>
                	<p class='white'><?php the_sub_field('body'); ?></p>
                    <a href=" <?php the_sub_field('cta_button_link'); ?> "><div class='work-cta'><?php the_sub_field('cta_button_text'); ?></div></a>
                </div>
            </div>
       <?php endwhile; ?>
       </section>
       */ ?>
    </div> <!-- End of main-content -->



<?php get_footer(); ?>