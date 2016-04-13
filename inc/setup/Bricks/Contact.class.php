<?php

/**
 * For displaying custom bricks
 *
 */
class ContactForm implements Brick
{
	private $html;

	function __construct($html)
	{
		$this->$html = $html;
	}

	public function display()
	{
		echo $html;
	}
}