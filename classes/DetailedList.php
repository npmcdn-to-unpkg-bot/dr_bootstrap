<?php

class DetailedList{
	public $area;
	public $detailed_list_array;

	function __construct($detailed_list_array) {
		$this->detailed_list_array = $detailed_list_array;
	}

	function getDetailedList(){
		return $this->detailed_list_array;
	}

	function setDetailedList($newDetailedList){
		$this->detailed_list_array = $newDetailedList;
	}

	function getNumOfDetailedListItems(){
		return count($this->getDetailedList());
	}

	function display($area = null){

		if($area == null):
			$detailed_list_array = $this->getDetailedList();
			foreach ($detailed_list_array as $key => $detailed_list):
				echo $detailed_list->display();
			endforeach;
		else:
			$this->slider();
		endif;
	}

	public function slider($hp = null){
		?>
			<section class="resources-wrapper">
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
							<?php $numOfResources = $this->getNumOfDetailedListItems(); ?>
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
								$detailed_list_items = $this->getDetailedList();
								foreach($detailed_list_items as $detailed_list_item):
									$detailed_list_item->display();
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

}