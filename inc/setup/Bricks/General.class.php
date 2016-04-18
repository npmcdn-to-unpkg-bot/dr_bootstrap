<?php

/**
 * For displaying custom bricks
 *
 */
class General implements Brick
{
	private $html;

	function __construct($html)
	{
		$this->$html = $html;
	}

	public static function displayHTML($html)
	{	
		echo $html;
	}


	public static function displayJS($js)
	{
		echo "<script>".$js."</script>";
	}


	public static function displayCSS($css)
	{
		echo "<style>".$css."</style>";
	}

	public static function display($brick_info)
	{
		self::displayCSS($brick_info['css']);
		self::displayHTML($brick_info['html']);
		self::displayJS($brick_info['javascript']);
	}
}