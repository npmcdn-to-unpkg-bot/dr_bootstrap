<?php
class Resource{

	public $type;
	public $title;
	public $description;
	public $link;
	public $linkLabel;

	function __construct($type, $title, $description, $link, $linkLabel) {
      	$this->setType($type);
      	$this->title = $title;
      	$this->description = $description;
      	$this->link = $link;
      	$this->linkLabel = $linkLabel;

	}

	function getType(){
		return $this->type;
	}

	function setType($newType){
		$newType = ucwords(str_replace("-"," ",$newType));

		$this->type = $newType;
	}

	function getTitle(){
		return $this->title;
	}

	function setTitle($newTitle){
		$this->title = $newTitle;
	}
	
	function getDescription(){
		return $this->description;
	}

	function setDescription($newDescription){
		$this->description = $newDescription;
	}
	
	function getLink(){
		return $this->link;
	}

	function setLink($newLink){
		$this->link = $newLink;
	}

	function getLinkLabel(){
		return $this->linkLabel;
	}

	function setLinkLabel($newLinkLabel){
		$this->linkLabel = $newLinkLabel;
	}

	function displayResource(){
	?>
		<div class='item'>
			<div class='tag'><?php echo $this->getType(); ?></div>
			<div class='title'><?php echo $this->getTitle(); ?></div>
			<p class='description'><?php echo $this->getDescription(); ?></p>
			<a class='arrow arial' href="<?php echo $this->getLink(); ?>"><?php echo $this->getLinkLabel(); ?></a>
		</div>
	<?php
	}


	function toString(){
		echo "Type: ".$this->type." Title: ".$this->title." Description: ".$this->description." Link: ".$this->link." Label: ".$this->linkLabel;
	}
}