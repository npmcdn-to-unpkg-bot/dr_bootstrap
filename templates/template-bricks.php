<?php
/**
 * Template Name: Template Bricks
 */
?>
<?php

get_header();

$bricks = array_column( get_field("bricks"), "brick" );
foreach($bricks as $brick){
	BrickChooser::display($brick->ID);	
}

get_footer();