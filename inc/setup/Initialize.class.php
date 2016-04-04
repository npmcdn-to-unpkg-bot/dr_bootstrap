<?php


interface Initialize
{

}

/**
 *	Class for initializing the set up for dr.com
 *
 */
class MasterheaderInit implements Initialize
{
	protected static $masterheader_group_key = "group_56fc230781438";
	protected static $background_options_key = "field_56fc231546a7c";
	protected static $eyebrow_key = "field_56fc3b8d2cdee";
	protected static $headline_key = "field_56fc3b9b2cdef";
	protected static $subhead_key = "field_56fc3ba72cdf0";

	function __construct()
	{
    	add_action( 'acf/init', array( &$this, 'generate_acf_fields' ) );
		add_filter('acf/load_field/key='.self::$background_options_key, array(&$this, 'acf_load_background_options') );
	}


	function generate_acf_fields()
	{

		if( function_exists('acf_add_local_field_group') ):

			acf_add_local_field_group(
				new AcfGroup(
					self::$masterheader_group_key,
					"Masterheader",
					array(
						new AcfField(
							self::$background_options_key,
							"Background Options",
							"select",
							array(
								"choices" => Masterheader::$backgroundOptions
							)
						),
						new AcfField(
							self::$eyebrow_key,
							"Eyebrow",
							"text"
						),
						new AcfField(
							self::$headline_key,
							"Headline",
							"text"
						),
						new AcfField(
							self::$subhead_key,
							"Subheading",
							"text"
						)
					),
					array(
						new AcfLocation("post_type", "==", "slides"),
						new AcfLocation("slide", "==", "masterheader")
					)
				)
			);

		endif;

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