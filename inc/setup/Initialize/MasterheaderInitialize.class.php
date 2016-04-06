<?php

/**
 *	Class for initializing the set up for dr.com
 *
 */
class MasterheaderInit implements Initialize
{
	protected static $background_options_key = "field_56fc231546a7c";

	function __construct()
	{
		add_filter('acf/load_field/key='.self::$background_options_key, array(&$this, 'acf_load_background_options') );
	}

	/**
	 *	Addeds all Masterheader background options to the admin screen for Masterheader slides 
	 */
	function acf_load_background_options($field)
	{
	  $field['choices'] = array();
 
	  foreach(Masterheader::$backgroundOptions as $key => $choice ) {
	    $field['choices'][ $key ] = $choice;
	  }
	 
	  return $field;
	}
}

