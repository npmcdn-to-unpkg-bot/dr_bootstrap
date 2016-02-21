<?php

class DetailedListItem{
	public $title;
	public $description;
	public $link;
	public $optional = array(
		"link_label" => "Read More",
		"external_link" => "false",
		"new_page" => false,
		"tag" => null,
		"button" => false
	);

	function __construct($title, $description, $link, $optional) {
		$this->title = $title;
		$this->description = $description;
		$this->link = $link;
		$this->optional = array_merge($this->optional, $optional);
	}

	private function getTitle(){
		return $this->title;
	}

	private function setTitle($new_title){
		$this->title = $new_title;
		return true;
	}


	private function getDescription(){
		return $this->title;
	}

	private function setDescription($new_description){
		$this->title = $new_title;
		return true;
	}


	private function getLink(){
		return $this->link;
	}

	private function setLink($new_link){
		$this->link = $new_link;
		return true;
	}


	private function getOptional(){
		return $this->optional;
	}

	private function setOptional($new_optional){
		$this->optional = array_merge($this->optional, $new_optional);
		return true;
	}


	public function display(){
		$optional = $this->getOptional();
		?>
		<div class='item'>
			<?php if($optional['tag'] != null): ?>
				<div class='tag'><?php echo $this->optional['tag']; ?></div>
			<?php endif; ?>
			<div class='title'><?php echo $this->getTitle(); ?></div>
			<p class='description'><?php echo $this->getDescription(); ?></p>
			<a <?php echo ($optional['external_link'] != false)?' rel="nofollow" ':null; ?> <?php echo ($optional['new_page'] != false)?' target="_blank" ':null; ?> class="<?php if($optional['button'] == false)? ' arrow ':' button ' ?> arial" href="<?php echo $this->getLink(); ?>"><?php echo $optional['link_label']; ?></a>
		</div>
		<?php
	}
}