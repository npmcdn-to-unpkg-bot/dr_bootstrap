<?php
/*
Plugin Name: Advanced Custom Fields: Template Widget Relationship
Plugin URI: http://www.olson.com/
Description: Adds a field for connecting templates to widgets
Version: 1.0.0
Author: Olson
Author URI: http://www.olson.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


class acf_field_template_widget_relationship_plugin
{
	/*
	*  Construct
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function __construct()
	{
		// set text domain
		/*
		$domain = 'acf-template_widget_relationship';
		$mofile = trailingslashit(dirname(__File__)) . 'lang/' . $domain . '-' . get_locale() . '.mo';
		load_textdomain( $domain, $mofile );
		*/
		
		
		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));	
	}
	
	/*
	*  register_fields
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function register_fields()
	{
		include_once('template_widget_relationship-v4.php');
	}
	
}

new acf_field_template_widget_relationship_plugin();
		
?>
