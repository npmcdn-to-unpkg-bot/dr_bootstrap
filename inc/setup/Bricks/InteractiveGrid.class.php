<?php

/**
 * For displaying custom bricks
 *
 */
class InteractiveGrid implements Brick
{
	private $headline;
	private $grid;

	public static $backgroundImageDir = "/wp-content/themes/digital-river-translated/img/grid/";
	public static $domain = "http://localhost/project_digital_river/digital_river";

	public static $background_option_pre_html = '<div class="background-option"><img src="';
	public static $background_option_post_html = '" /></div>';

	public static $backgroundOptions = array(
		'working_on_laptop' => 'working_on_a_laptop.jpg',
		'meeting' => 'meeting.jpg',
		'global_fulfillment' => 'global_fulfillment.jpg',
		'collaboration' => 'working_together.jpg',
		'tablet' => 'tablet.jpg',
		'working' => 'working.jpg',
		'meeting_2' => 'meeting_2.jpg',
		'meeting_3' => 'meeting_3.jpg',
		'working_2' => 'working_2.jpg',
		'thinking' => 'thinking.jpg',
	);

	public static $width = array(
		'quarter' => 'col-lg-3 col-sm-6 col-xxs-12',
		'third' => 'col-sm-4 col-xs-6 col-xxs-12',
		'half' => 'col-sm-6 col-xxs-12',
		// 'two-thirds',
		// 'full'
	);

	function __construct($html)
	{
		$this->headline = $headline;
		$this->grid = $grid;
	}

	public static function get_background_options()
	{
		$backgroundOptions = array();
		foreach (self::$backgroundOptions as $key => $value) {
			$backgroundOptions[$key] = self::$background_option_pre_html.self::$domain.self::$backgroundImageDir.$value.self::$background_option_post_html;
		}

		return $backgroundOptions;
	}

	public static function display($brick_info)
	{
		echo "<pre>";
		print_r($brick_info);
		
		print_r(get_fields(12040));
		echo "</pre>";



		echo '<div class="slide">';
		    echo '<div class="interactive-grid-wrapper container">';
		        echo '<div class=" interactive-grid">';
		            echo '<div class="row">';
		            foreach ($brick_info["resources"] as $key => $grid_item):
		            	// echo "<pre>";
		            	// print_r($grid_item);
		            	// echo "</pre>";

		            	$more_info = get_fields($grid_item['resource']->ID);

		            	// print_r($more_info);


		            	if($grid_item['resources_or_html'] == "resources" && $more_info['content_type'] != "video"){
		            		echo '<a target="_blank" href="'.$more_info['resource_url'].'">';
		            	}
		                echo '<div class=" ';
		                echo ($more_info['content_type'] == "video")? ' active-video ':' active-md ';
		                echo self::$width[$grid_item['width']] . ' interact grid-item-wrapper" >';
		                    echo '<div class="grid-item option ' . $grid_item['height'];
		                    echo ($more_info['content_type'] == "video")? ' embed-responsive embed-responsive-16by9 ':'';
		                    echo ' ">';
		                        if($grid_item['icon']):
		                            echo '<div class="expand hide-on-expand"><i class="'.$grid_item['icon'].'"></i></div>';
		                        endif;

		                        echo '<div class="background-image" style="background-image:url(\''.self::$domain.self::$backgroundImageDir.self::$backgroundOptions[$grid_item['background_options']].'\');"></div>';
		                        echo '<div class="close"><i class="fa fa-times"></i></div>';


		                        if($more_info['content_type'] == "video"){
		                              echo '<i class="video-play dr-player x15"></i>';
		                              echo '<iframe class="video embed-responsive-item" style="width: 100%; height: 100%;" id="'.$grid_item['video_pretty_id'].'" src="https://player.vimeo.com/video/'.$grid_item['video_id'].'?api=1&amp;player_id='.$grid_item['video_pretty_id'].'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'; 
		                        }else{
		                              echo "<div class='headline-wrapper'>";
		                                  echo "<div class='headline'>";
		                                      echo $grid_item['headline'];
		                                  echo "</div>";
		                              echo "</div>";
		                              echo "<div class='description'>";
		                                  echo $grid_item['description'];
		                              echo "</div>";
		                        }
		                    echo '</div>';
		                echo '</div>';

		            	if($grid_item['resources_or_html'] == "resources" && $more_info['content_type'] != "video"){
		            		echo '</a>';
		                }
		            endforeach;
		            echo '</div>';
		        echo '</div>';
		    echo '</div>';
		echo '</div>';
	}
}