<?php

class BrickChooser {

	static function display($brick_id)
	{
		$BrickClass = get_post_meta( $brick_id, SlidesPostType::$brick_type_key, true );
		$BrickClass::display(get_fields($brick_id));
		// echo "<pre>";
		// print_r(get_fields($brick_id));
		// echo "</pre>";
	
	}

}