<?php

class ResourcesSection{
	
	public $resources;

	public function __construct($resources = null){
		$this->resources = $resources;
	}

	private function getResources(){
		return $this->resources;
	}

	private function setResources($newResources){
		$this->resources = $newResources;
	}

	private function numOfResources(){
		return count($this->getResources());
	}

	public function display($hp = null){
		?>
			<section class="resources-wrapper container">
				<?php if($hp == null): ?>
				<div class='row2'>
					
					<div class="eyebrow">Resources</div>
					<div class='clear'></div>	
					<?php else: ?>
					<div class='row'>
					        <div class="span_6 title">
                                <h2 class='eyebrow eng'>Resources</h2>
                                <a href="<?php echo get_permalink(695); ?>">[ More Resources ]</a>
                            </div>

					<?php endif; ?>
					<div class='span_12 last'>
						<div class="link_wrapper">

							<?php $numOfResources = $this->numOfResources(); ?>

							<?php if($numOfResources <= 3): ?>
								<style>
									.owl-next, .owl-prev{display: none !important;}
								</style>
							
							<?php endif; ?>

							<?php if($numOfResources <= 2): ?>
								<style>
									@media only screen and (max-width: 1000px) {
									    .resources-wrapper .owl-next, .resources-wrapper .owl-prev{
									        display: none !important;
									    } 
									}
									</style>
							<?php endif; ?>
							<div id='resources' class="links">
								<?php
								$resources = $this->getResources();
								foreach($resources as $resource):
									if($hp == null):
										$link = get_field( "resource-type", $resource['resource']->ID ) == "external" ? get_field( "link", $resource['resource']->ID ) : $resource['resource']->guid;
										$title = get_field( "resource-type", $resource['resource']->ID ) == "external" ? get_field( "title", $resource['resource']->ID ) : $resource['resource']->post_title;
								
										$resourceObj = new Resource(get_field( "content_type", $resource['resource']->ID ), $title, get_field( "description", $resource['resource']->ID ), $link, get_field( "link_title", $resource['resource']->ID ));
										$resourceObj->displayResource();
									else:
										$link = get_field( "resource-type", $resource->ID ) == "external" ? get_field( "link", $resource->ID ) : $resource->guid;
										$title = get_field( "resource-type", $resource->ID ) == "external" ? get_field( "title", $resource->ID ) : $resource->post_title;

										$resourceObj = new Resource(get_field( "content_type", $resource->ID ), $title, get_field( "description", $resource->ID ), $link, get_field( "link_title", $resource->ID ));
										$resourceObj->displayResource();
									endif;


								endforeach;
								?>
								</div>
							<div class="clear"></div>
						</div>
						<div class='clear'></div>
					</div>
				<div class="clear"></div>
				</div>
			</section>
		<?php
	}




	public function displayHP(){

		?>
		<section class="resources-wrapper" style='padding-bottom:0;'>
		<?php
            query_posts(array( 
                'post_type' => 'marketing_material',
                'showposts' => 2                                
                ));  
    
            while (have_posts()) : the_post();
					$link = get_field( "resource-type",  get_the_ID() ) == "external" ? get_field( "link",  get_the_ID() ) : $resource['resource']->guid;
					$title = get_field( "resource-type",  get_the_ID() ) == "external" ? get_field( "title",  get_the_ID() ) : $resource['resource']->post_title;

					$resourceObj = new Resource(get_field( "content_type",  get_the_ID() ), $title, get_field( "description",  get_the_ID() ), $link, get_field( "link_title",  get_the_ID() ));
					$resourceObj->displayResource();
            endwhile;
		?>
		</section>
		<?php

		 wp_reset_postdata();


	}





	public function displayPressReleases(){

		?>
		<section class="resources-wrapper" style='padding-bottom:0;'>
		<?php
            query_posts(array( 
                'post_type' => 'press_release',
                'showposts' => 2                                
            ));  
    
            while (have_posts()) : the_post();
					$date = get_field( "date_published",  get_the_ID() );
					$shortDescription = get_field( "short_description",  get_the_ID() );

					$resourceObj = new Resource($date, get_the_title(), $shortDescription, get_permalink() , "Read More");
					$resourceObj->displayResource();
            endwhile;
		?>
		</section>
		<?php

		 wp_reset_postdata();

	}

	public function getEvents(){


            query_posts(array( 
                'post_type' => 'events',
                'showposts' => 5                              
            ));  
            $count = 0;
			while (have_posts()) : the_post();
				$eventInfo = get_fields(get_the_ID());	
		    	if($eventInfo['multiday_event']){
		        	$eventEndTimestamp = strtotime($eventInfo['event_end_date']);
		    	}else{
		        	$eventEndTimestamp = strtotime($eventInfo['event_start_date']);
		    	}

            	if((time() - (24 * 60 * 60)) <= $eventEndTimestamp){
            		$count++;
            	}
			endwhile; 	

			return $count;
	}

	public function displayEvents(){

            query_posts(array( 
                'post_type' => 'events',
                'showposts' => 5                               
            )); 



            ?>

		<section class="resources-wrapper" style='padding-bottom:0;'>
<?php
		 while (have_posts()) : the_post();
		    // Get custom fields


		 $eventInfo = get_fields(get_the_ID());

		    if($eventInfo['multiday_event']){
		        $eventEndTimestamp = strtotime($eventInfo['event_end_date']);
		        $timestamp = strtotime($eventInfo['event_end_date']);
		        $timestamp = $timestamp + $key;

                $dateString = $eventInfo['event_start_date']." - ".$eventInfo['event_end_date'];
		    }else{
		        $eventEndTimestamp = strtotime($eventInfo['event_start_date']);
		        $timestamp = strtotime($post->$eventInfo['event_start_date']);
		        $timestamp = $timestamp + $key;


		        $dateString = $eventInfo['event_start_date'];
		    }


            if($eventInfo['event_type'] == "event"){
                $eventType = "Event";
            }else{
                $eventType = "Webinar";
            }


            if((time() - (24 * 60 * 60)) <= $eventEndTimestamp){

                $resourceObj = new Resource($eventType." | ".$dateString, get_the_title(), $this->truncate($eventInfo['event_description'], 200), $eventInfo['link_url'] , $eventInfo['upcoming_button_text']);
				$resourceObj->displayResource();

			}
		endwhile;

		?>
	</section>
		<?php
	}


	private function truncate($text, $chars = 200) {
	    $text = $text." ";
	    $text = substr($text,0,$chars);
	    $text = substr($text,0,strrpos($text,' '));
	    $text = $text."...";
	    return $text;
	}
}
?>
	
