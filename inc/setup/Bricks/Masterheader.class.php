<?php

/**
 * For displaying the top section of different pages 
 *
 */
class Masterheader implements Brick
{
	public static $backgroundOptions = array(
		'man_on_tablet' => 'Man On Tablet'
	);

	function __construct() {}

	/**
	 * Prints the box content.
	 * 
	 * @param WP_Post $post The object for the current post/page.
	 */
	public function render_slide_type_metabox( $post )
	{
		wp_nonce_field( 'save_slide_type_value', 'save_slide_type_meta_box_nonce' );

		$selectedPostMeta = get_post_meta( $post->ID, '_slide_type_value', true );

		foreach ($this->slideTypes as $slideId => $slideType) :
			echo "<input ";
			echo $slideId == $selectedPostMeta ? "checked" : "";
			echo " type='radio' name='slide_type_value' value='".$slideId."' />";
			echo "<label>".$slideType."</label>";
			echo "<br>";
		endforeach;

	}

		
	public static function display($brick_info)
	{
		echo '<div class="top slide ';
		echo ($brick_info['background_options']) ? ' custom '.$brick_info['background_options'].' ' : ' masthead ';
		echo ' ">';
			echo '<div class="container">';
				echo '<div class="row">';
				    echo '<div class="col-md-6 col-sm-8">';
				      if($brick_info['eyebrow'] != ""):
				      	echo '<h1 class="eyebrow option no-margin">'.$brick_info['eyebrow'].'</h1>';
				      endif;
				      echo '<h2>'. $brick_info['headline'] .'</h2>';
				      if($brick_info['subhead']):
				        echo '<p>' . $brick_info['subhead'] .'</p>';
				      endif;
				    echo '</div>';
				    echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';											
		echo '</div>';
	}
}