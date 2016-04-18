<?php

/**
 * For displaying the client brick
 *
 */
class Clients implements Brick
{
	static function display($brick_info)
	{
		echo '<div class="green-bg white slide">';
			echo '<h2 class=" white text-center">We Support Some of the World’s Leading Brands</h2>';
			echo '<div class="container">';
		          echo '<div class="row">';
		            echo '<div class="col-md-12">';
		                echo '<div class="clients-slider" style="max-height:115px;">';
		                    foreach(array_column($brick_info['clients'], "client") as $client):
		                    	echo '<div class="item">';	
		                    		$clientLogo = get_field("logo", $client->ID);
		                            echo '<img class="owl-lazy" alt="'. $clientLogo['alt'] .'" data-src="'. $clientLogo['url'] .'" />';
		                        echo '</div>';
		                    endforeach;
		                echo '</div>';
		            echo '</div>';         
		        echo '</div>';         
		    echo '</div>';         
		echo '</div>';         
	}
}