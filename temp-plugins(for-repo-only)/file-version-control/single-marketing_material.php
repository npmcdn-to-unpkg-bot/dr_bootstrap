<?php

/***********************************************
*   Marketing Material Template
*------------------------------------------------
*	This template the first file that is
*	displayed.
************************************************/


$pdf = isset($_GET['pdf']) ? true : false;
if(get_field("resource_url") == "" || $pdf == true):

	header('Content-Type: application/pdf');
	while( have_rows('files') ): the_row();
		
			$display = get_sub_field('display');
			$file = get_sub_field('file');
			$description = get_sub_field('description');
		
			if($display[0]):
				readfile($file);
				break;
			endif;

	endwhile;

else:
	header("Location: //".$_SERVER['HTTP_HOST']."/".get_field("resource_url"));
	die();
endif;