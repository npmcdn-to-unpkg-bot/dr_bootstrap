<?php




function news_and_events_section(){
	?>

      <section class="container">
            	<div class="row">
                  <div class="col-md-6">


                      <div class="title">
                          <h2 class='eyebrow eng'>News</h2>
                          <a class="brackets" href="<?php echo get_permalink(459); ?>">More News</a>
                      </div>

                      <?php
                         $args=array(
                            'post_type' => "press_release",
                            'post_status' => 'publish',
                            'posts_per_page' => 3
                          );
                          $press_releases = new WP_Query($args);
                          $detailed_list_args = array();
                          if ( $press_releases->have_posts() ):
                              while ( $press_releases->have_posts() ) : $press_releases->the_post();
                                  $detailed_list_args[] = new DetailedListItem(
                                      get_the_title(),
                                      get_field("short_description"),
                                      get_permalink(),
                                      array(
                                        "tag" => get_field("date_published")
                                      )
                                  );
                              endwhile;
                          
                              $Detailed_List = new DetailedList($detailed_list_args);
                              $Detailed_List->display();

                              wp_reset_postdata();
                          endif;
                      ?>
                  </div>

                <div class="col-md-6">
                    <div class="title">
                        <h2 class='eyebrow eng'>Events</h2>
                        <a class="brackets" href="<?php echo get_permalink(459); ?>">More Events</a>
                    </div>

                    <?php
                        $args = array(
                          'post_type' => "events",
                          'post_status' => 'publish',
                          'posts_per_page' => 3
                        );
                        $press_releases = new WP_Query($args);

                        $detailed_list_args = array();
                        if ( $press_releases->have_posts() ):
                            while ( $press_releases->have_posts() ) : $press_releases->the_post();

                                $tag = ucwords(get_field("event_type"))." | ".get_field("event_start_date");
                                $tag .= ( get_field("multiday_event") )?" - ".get_field("event_end_date"):"";

                                $detailed_list_args[] = new DetailedListItem(
                                    get_the_title(),
                                    get_field("event_description"),
                                    get_permalink(),
                                    array(
                                      "tag" => $tag,
                                      "limit_description" => true
                                    )
                                );
                            endwhile;
                        
                            $Detailed_List = new DetailedList($detailed_list_args);
                            $Detailed_List->display();

  							wp_reset_postdata();
                        endif;
                      ?>
                   <div class='clear'></div>
                </div>
            </div>
        </section> <!-- End of news section --> 



	<?php
}


function home_clients_section(){
 ?>
 <div class="green-bg">
            <div class="container ">
                <section id="clients">
          <div class="wrapper">
                <div class="row">
                    <div class="title col-md-1">
                      <h2><?php _e('Clients', 'digital-river'); ?></h2>
                    </div>
                    <div class="col-md-2">
                        <a href="<?php echo site_url('/clients/' ,'http'); ?>">[ <?php _e('More Clients','digital-river'); ?> ]</a>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div id="owl-demo" class="clients-wrapper" style="max-height:115px;">
                          <?php foreach(get_field('client_logos') as $client_logo) : ?>
                              <div class='item'>
                                  <img class="owl-lazy" data-src="<?php echo $client_logo['logo']; ?>" />
                              </div>
                          <?php endforeach; ?>
                        </div> <!-- End of clients-wrapper -->
                    </div>
                </div>
           </div>
        </section> <!-- End of clients section -->

            </div>
     </div><!-- End of wrapper -->
     <?php
}

function clients_section($headline, $clients){


?>
<script>
jQuery(document).ready(function($){

    var owl = $("#clients_slider");
    owl.owlCarousel({
    autoplayTimeout:3000, //Set AutoPlay to 3 seconds
    autoplay:true,
    items : 5,
    responsiveClass:true,
      responsive:{
          0:{
              items:1
          },
          400:{
              items:2
          },
          550:{
              items:3
          },
          800:{
              items:4
          },
          1200:{
              items:5
          }
      },
    pagination:false,
    loop:true,
    lazyLoad: true,
    callbacks: true,
  });

});

</script>


  <div class="green-bg white slide">
      <?php slide_header('white', $headline); ?>
      <div class="container">
          <div class="row">
            <div class="col-md-12">
                <div id="clients_slider" class="clients-wrapper" style="max-height:115px;">
                    <?php foreach($clients as $client) : ?>
                        <div class='item'>
                            <img class="owl-lazy" alt="<?php echo $client['alt']; ?>" data-src="<?php echo $client['src']; ?>" />
                        </div>
                    <?php endforeach; ?>
                  </div> <!-- End of clients-wrapper -->
              </div>
          </div>
      </div>
   </div><!-- End of wrapper -->
<?php
}




function why_work_section(){
?>

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
                                        <use class=" icon" x="0" y="0" xlink:href="#arrow" />
                                    </svg>
                                    </h2>
                                    <a class="learn-more" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?>  ›</a>
                                    <div class="minp">
                                        <p><?php echo get_sub_field('description'); ?></p>
                                    </div>
                                    <div class="icon-wrapper">
                                      <svg viewBox="0 0 151 137.4">
                                        <use class="<?php the_sub_field('custom_css_classes'); ?> icon" x="0" y="0" xlink:href="#<?php the_sub_field('custom_css_classes'); ?>" />
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
</div> <!-- End of Main Contain -->



<?php
}


function hero_banner_section(){
	?>
	<div class="hero-wrapper ">
	   <div class="hero flexslider owl-carousel owl-theme">
	        <?php foreach(get_field('slides') as $key => $slide) : ?>
	            <div class='item'>
	               <div class="container">
	                  <div class="row">
	                    <section class="col-md-10 slide">
	                       <?php
	                        $style = "";
	                        $buttonStyle = "";
	                        if($slide['text-align'] == "right"){
	                            $style = " right: 0px; text-align: right; ";
	                            $buttonStyle = " float: right;";
	                        }
	                        ?>
	                        <section class="header" style=" color: <?php echo $slide['headingcolor']; ?>; <?php echo $style; ?> ">
	                            <?php 
	                            if(count($slide['heading']) > 0){
	                                foreach ($slide['heading'] as $key => $line) { ?>
	                                <?php if($line['new_line']) echo "<br>"; ?>
	                                  <span style='<?php echo ($line['font'] == 'light')?'font-family: "DIN Next W01 Light";':'font-family: "DIN 1451 W01 Engschrift",sans-serif;'; ?>' >
	                                    <?php echo $line['line']; ?>
	                                  </span>
	                                <?php } ?>
	                            <?php } ?>
	                        </section>
	                      <?php if($slide['button_display'][0] == "Add" || $slide['button_display'] == "Add") : ?>
	                        <section class="link" style=" background-color: <?php echo $slide['button_color']; ?>; <?php echo $buttonStyle; ?>" ><?php echo $slide['link_title']; ?></section>
	                      <?php endif ?>
	                    </section>
	                  </div>
	                </div>
						      <a <?php if($slide['new_tab']) echo 'target="_self"'; ?> href=" <?php echo ($slide['external_link'])?: $slide['link']; ?>" class="slide_link">
	                  <?php if ($slide['background_image']) : ?>
	                      <img id="<?php if ($count == 0) {echo 'firstImage';} ?>" src="<?php echo $slide['background_image']; ?>" class="not-mobile slide_image">
	                      <img id="<?php if ($count == 0) {echo 'firstMobileImage';} ?>" src="<?php echo $slide['mobile_background_image']; ?>"  class="mobile slide_image">
	                  <?php endif; ?>
	                </a>
	              </div>
	        <?php endforeach; ?>
	    </div>
	</div>
	<?php
}


function get_recent_resources(){
    $args = array(
      'post_type' => "marketing_material",
      'post_status' => 'publish',
      'posts_per_page' => 10
    );
    $resources = new WP_Query($args);
	$detailed_list_args = array();
	if ( $resources->have_posts() ):
	  while ( $resources->have_posts() ) : $resources->the_post();
	      $detailed_list_args[] = new DetailedListItem(
	          get_the_title(),
	          get_field("description"),
	          get_permalink(),
	          array(
	            "tag" => get_field("content_type")
	          )
	      );
	  endwhile;

	  $Detailed_List = new DetailedList($detailed_list_args);
	  $Detailed_List->slider();

	  wp_reset_postdata();
	endif;
}


/**
 * Displays the top section of each header
 *
 * @param int $slide_id
 *
 * @todo create acf
 */
// add_action('slide_heading','slide_header',10,1); 
// function slide_header($slide_id){
function slide_header($color, $headline, $supporting_copy_array = array()){
    echo '<h2 class=" '.$color.' text-center">'.$headline.'</h2>';
    foreach($supporting_copy_array as $supporting_copy):
        echo '<p class=" '.$color. ' text-center">'.$supporting_copy.'</p>';
    endforeach;
}


/**
 * Displays a detailed master header 
 *
 * @todo define the background documentation
 * @todo do button html
 * @todo create proper fields in acf
 * @todo replace arguments with acf
 */
function advanced_master_header($sub_heading, $supporting_copy){
  echo '<div class="top custom man_on_tablet slide">';
    echo '<div class="container">';
      echo '<div class="row">';
        echo '<div class=" col-md-6 col-sm-8">';
          the_title('<h1 class="eyebrow option no-margin">','</h1>');
          // echo '<h2>'. get_field('subtitle') .'</h2>';
          echo '<h2>'. $sub_heading .'</h2>';
          // if(get_field('supporting_copy')):
          //   echo '<p>' . get_field('supporting_copy') .'</p>';
          // endif;       
          if($supporting_copy):
            echo '<p>' . $supporting_copy .'</p>';
          endif;
        echo '</div>';
        echo '<div class="clear"></div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
}

/**
 * Displays Boxes in a 2 column layout
 * 
 * @todo create acf fields for this
 */
function boxes($headline, $boxes){
  echo '<div class="slide">';
      echo '<div class="container">';
          // do_action('slide_heading', $slide_id);
          slide_header('black',$headline);
                echo '<div class="row">';

          foreach ($boxes as $key => $box):
              if($key % 2 == 0):
              endif;
                  echo '<div class="box col-xs-6">';
                      echo '<div class="box-inner">';
                          echo '<img class="img-responsive" src="'.$box['background_image'].'" alt="'.$box['alt'].'" />';
                          echo '<div class="outer-description">';
                              echo '<div class="description">'.$box['description'].'</div>';
                          echo '</div>';
                      echo '</div>';
                  echo '</div>';
              if($key % 2 != 0 || (count($boxes) == ($key+1))):
              endif;
          endforeach;
                echo '</div>';

      echo '</div>';
  echo '</div>';
}

function three_column_boxes($headline, $descriptions, $boxes){
  echo '<div class="slide blue-bg global">';
      echo '<div class="container">';
          slide_header('white', $headline, $descriptions);
          echo '<div class="row">';
          foreach($boxes as $key => $box):
              echo '<div class="col-sm-6 col-md-4 box">';
                  echo '<div class="inner-box">';
                      echo '<h3 class="h4 eng">'.$box['heading'].'</h3>';
                      echo $box['description'];
                  echo '</div>';
              echo '</div>';
          endforeach;
          echo '</div>';
      echo '</div>';
  echo '</div>';
}


/**
 * Displays tags
 * 
 * @todo create acf fields for this
 */
function display_tags($headline, $copy, $tags){
  echo '<div class="slide lgray-bg">';
      echo '<div class="container">';
         // do_action('slide_heading', $slide_id);
          slide_header('black', $headline, $copy);
          echo '<div class="row">';
              foreach($tags as $key => $tag):
                  if(count($tags) == ($key+1)):
                      echo '<div class="col-md-offset-3 col-md-6">';        
                  else:
                      echo '<div class="col-md-6">';        
                  endif;
                      echo '<a target="_blank" class="btn btn-tertiary option thin-border wrap margin-bottom display-block tag" href="' . $tag['link'] . '" target="' .  '">' . $tag['title'] . '</a>';
                  echo '</div>';
              endforeach;
          echo '</div>';
      echo '</div>';
  echo '</div>';
}



function create_grid($headline, $grid){
  ?>

<script>
  var $grid;
  jQuery(document).ready(function($){
    $grid = $('.interactive-grid .row');
    $grid.packery({
      itemSelector: '.interact',
      gutter: 0
  });

  $(document).on("click", ".interact", function(){
      var $this = $(this);

      var $this_grid = $this.parents(".interactive-grid");


      $this.parents(".interactive-grid-wrapper").addClass("active");

      if($this_grid.find(".grid-item-wrapper.active").length > 0){
          close_grid_item($this_grid.find(".grid-item-wrapper.active"));
          $this.parents(".interactive-grid-wrapper").addClass("active");
      }

      $(".grid-item-wrapper").not(this).each(function(){
          if($(this).hasClass("active")){
              $(this).removeClass("active");
          }
      });
      $this.clone().insertAfter($this).addClass("placeholder").find(".grid-item").empty();
      
      $this.addClass("active");
      $this.toggleClass("interact");

      $grid.packery('reloadItems');
  });

  var close_grid_item = function($this_grid_item){

      $this_grid_item.parents(".interactive-grid-wrapper").removeClass("active");

      var left = $(".interactive-grid").find(".placeholder").css("left");
      var top = $(".interactive-grid").find(".placeholder").css("top");

      $this_grid_item.css({left:left, top:top});
      $this_grid_item.removeClass("active");
      $this_grid_item.addClass("interact");

      $("iframe.video").each(function(){
        $("#"+$(this).attr("id")).vimeo("pause");
      });

      $(".interactive-grid").find(".placeholder").remove();
      $grid.packery('reloadItems');

  }
  $(document).on("click",".interactive-grid .active .close", function(){
      close_grid_item($(this).parents(".grid-item-wrapper"));
  });

  var resizeTimer;
  $(window).on('resize', function(e) {

    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      $grid.packery("layout");
    }, 250);

  });

});
</script>
  <?php

    echo '<div class="slide">';
        slide_header('black', $headline);
        echo '<div class="interactive-grid-wrapper container">';
            echo '<div class=" interactive-grid">';
                echo '<div class="row">';
                foreach ($grid as $key => $grid_item):
                    echo '<div class=" ';
                    echo ($grid_item['video'])? ' active-video ':' active-md ';
                    echo $grid_item['width'] . ' interact grid-item-wrapper" >';
                        echo '<div class="grid-item option ' . $grid_item['height'];
                        echo ($grid_item['video'])? ' embed-responsive embed-responsive-16by9 ':'';
                        echo ' ">';
                            if($grid_item['icon']):
                                echo '<div class="expand hide-on-expand"><i class="'.$grid_item['icon'].'"></i></div>';
                            endif;

                            echo '<div class="background-image" style="background-image:url('.$grid_item['background_image'].');"></div>';
                            echo '<div class="close"><i class="fa fa-times"></i></div>';


                            if($grid_item['video']){
                                  echo '<i class="video-play dr-player x15"></i>';
                                  echo '<iframe class="video embed-responsive-item" style="width: 100%; height: 100%;" id="'.$grid_item['video_pretty_id'].'" src="https://player.vimeo.com/video/'.$grid_item['video_id'].'?api=1&amp;player_id='.$grid_item['video_pretty_id'].'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
                            }else{
                                  echo "<div class='headline-wrapper'>";
                                      echo "<div class='headline'>";
                                          echo $grid_item['title'];
                                      echo "</div>";
                                  echo "</div>";
                                  echo "<div class='description'>";
                                      echo $grid_item['description'];
                                  echo "</div>";
                            }
                        echo '</div>';
                    echo '</div>';
                endforeach;
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
}

function contact_us($headline, $copy){
  ?>
  <div class="blue-bg white slide contact-us">
      <div class="container">
        <?php slide_header('white', $headline, $copy); ?>
        <div class="row">
          <div class="col-xs-12">
              <p class="text-center white">Get in touch with us <strong class="left-border nowrap">1-800-598-7450</strong> <span class="lt">or</span> <a class="btn btn-opposite" href="/contact-us/" class="nowrap cta">Click Here</a></p>
          </div>
        </div>
      </div>
  </div>
  <?php
}