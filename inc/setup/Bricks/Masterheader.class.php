<?php

/**
 * For displaying the top section of different pages 
 *
 */
class Masterheader implements Brick
{
	public static $backgroundOptions = array(
		'man_using_tablet' => 'Man Using Tablet'
	);

	private $eyebrow;
	private $headline;
	private $subhead;
	private $background;

	function __construct($options = array())
	{
		extract($options);

		$this->eyebrow = $eyebrow;
		$this->headline = $headline;
		$this->subhead = $subhead;
		$this->background = $background;
	}

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

	public function display()
	{
		echo '<div class="top slide ';
		echo ($background) ? ' custom '.$background.' ' : ' masthead ';
		echo ' ">';
			echo '<div class="container">';
				echo '<div class="row">';
				    echo '<div class="col-md-6 col-sm-8">';
				      echo '<h1 class="eyebrow option no-margin">'.$this->eyebrow.'</h1>';
				      echo '<h2>'. $this->headline .'</h2>';
				      if($supporting_copy):
				        echo '<p>' . $subhead .'</p>';
				      endif;
				    echo '</div>';
				    echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';											
		echo '</div>';
	}
}