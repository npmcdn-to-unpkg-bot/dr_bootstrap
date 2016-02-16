<?php
/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<div class="hero-wrapper ">

   <div class="hero flexslider owl-carousel owl-theme">
            <?php $count = 0; ?>
            <?php $slides = get_field('slides'); ?>
         
                <?php foreach($slides as $key => $slide) : ?>
                    <?php if(ICL_LANGUAGE_CODE != "en"): ?>

                        <div class='item'>
                        
    						<?php $link = ($slide['external_link'])?: $slide['link']; ?>
    						<a <?php if($slide['new_tab']) echo 'target="_self"'; ?> href=" <?php  echo $link; ?>" class="slide_link">
                       
                            <?php if ($slide['background_image']) : ?>
                                <img id="<?php if ($count == 0) {echo 'firstImage';} ?>" src="<?php echo $slide['background_image']; ?>" class="not-mobile slide_image">
                                <img id="<?php if ($count == 0) {echo 'firstMobileImage';} ?>" src="<?php echo $slide['mobile_background_image']; ?>"  class="mobile slide_image">
                                                           </a>
       </div>
                            <?php endif; ?>
                    <?php endif; ?>
                    <?php if($count == 0 && ICL_LANGUAGE_CODE == "en"): ?>
 
                         <div class='item'>
                            <a target="_self" href="http://info.digitalriver.com/Forrester-Wave-Subscription-Billing_Forrester-Wave-LP.html?utm_source=games&utm_medium=email&utm_content=monetization_email_1&utm_campaign=nosteam" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="col-md-10 slide">
                                            <section class="header" style=" color: #646469;">
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >Digital River named one</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >of the most significant</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >subscription billing</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; ' >vendors by Forrester</span>
                                            </section>
                                            <section class="green-button">Get the Report</section>
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
                            <a target="_self" href="/clients/industries/gaming/" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="col-md-10 slide">
                                            <section class="header" style=" color: #FFF;">
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; line-height:1.1 !important; ' >You build games.</span>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; line-height:1.1 !important; ' >We build empires.</span>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif; display:block; line-height:1.4 !important; letter-spacing: -1px; font-size:.6em;  font-family: "DIN Next W01 Light";' >Integrated payment and commerce solutions</span>
                                            </section>
                                            <section class="green-button" style=" background-color: #B3D334;" >Learn More</section>
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
                            <a target="_self" href="http://www.goglobalocity.com" class="slide_link">
                            <?php if ($slide['background_image']) : ?>
                                <img src="/wp-content/uploads/2016/01/DR-Globalocity-2016_72-DPI_Cropped-4.jpg" class="not-mobile slide_image">
                                <img src="/wp-content/uploads/2016/01/1000-x-750-mobile-banner-2.jpg"  class="mobile slide_image">
                            <?php endif; ?>
                            </a>
                        </div>
                        <div class='item'>
                            <a target="_self" href="/solutions/commerce/smartchannel/" class="slide_link">
                                <div class="container">
                                    <div class="row">
                                        <section class="col-md-10 slide">
                                            <section class="header" style=" color: #646469;">
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif;' >Enable partner channel</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif;' >and SMB ecommerce</span>
                                                    <br>
                                                    <span style='font-family: "DIN 1451 W01 Engschrift",sans-serif;' >with SmartChannel<span style="font-size:.5em; position:relative; top:-.5em;">™</span></span>
                                            </section>
                                            <section class="green-button" style=" background-color: #B3D334;" >Learn More</section>
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
    </div>


    <div id="main_content" class="gray-bg">
        <div class="container">
        <?php if(ICL_LANGUAGE_CODE == "en"): ?>

            <section id="core-bkgd" >
                <div class="container" >
                    <div class="row centering">
                        <div class="col-md-3 col-sm-12 solution-copy">
                            <?php while(have_rows('why_work_section') ) : the_row(); ?>
                                <h1>We&nbsp;drive&nbsp;growth.<br>It’s&nbsp;that&nbsp;simple.</h1>
                                <p><?php the_sub_field('description'); ?></p>
                                <a class="button" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_label'); ?></a>
                            <?php endwhile; ?>
                        </div>
                        <?php while(have_rows('capabilities') ) : the_row(); ?>
                            <div class="col-md-3 col-sm-4 solution">

                                <div class="box clearfix <?php the_sub_field('custom_css_classes'); ?>">
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <h2>
                                        <?php the_sub_field('title'); ?>
                                        <svg class="arrow" viewBox="0 0 151 137.4">
                                            <use class=" icon" x="0" y="0" xlink:href="<?php bloginfo('template_directory'); ?>/../img/svgs.svg#arrow" />
                                        </svg>
                                    </h2>
                                    <a class="learn-more" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?>  ›</a>
                                    <div class="minp">
                                        <p><?php echo get_sub_field('description'); ?></p>
                                    </div>
                                    <div class="icon-wrapper">
                                        <svg viewBox="0 0 151 137.4">
                                            <use class="<?php the_sub_field('custom_css_classes'); ?> icon" x="0" y="0" xlink:href="<?php bloginfo('template_directory'); ?>/img/svgs.svg#<?php the_sub_field('custom_css_classes'); ?>" />
                                        </svg>
                                    </div>
                                    </a>
                                </div>
                            </div>

                            <?php endwhile; ?>
                        <div class="clear"></div>
                    </div> <!-- End of wrapper -->
                </div> <!-- End of wrapper -->
            </section> <!-- End of why work section -->

        <?php else: ?>

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

        <?php endif; ?>

        </div>
 <div class="green-bg">
            <div class="container ">
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
                       </div>
        </section> <!-- End of clients section -->

            </div>
     </div><!-- End of wrapper -->
       
   
       
        
        </div>
   <!-- End of main-content -->



<?php get_footer(); ?>