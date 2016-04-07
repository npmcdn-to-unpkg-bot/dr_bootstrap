<?php

/**
 * For displaying custom bricks
 *
 */
class InteractiveGridInit implements Brick
{
	private $headline
	private $grid;

	function __construct($html)
	{
		$this->headline = $headline;
		$this->grid = $grid;
	}

	public function display()
	{
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
}