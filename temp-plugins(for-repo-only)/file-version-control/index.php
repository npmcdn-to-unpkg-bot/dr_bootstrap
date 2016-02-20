<?php
/*
Plugin Name: File Version Control System
Plugin URI: http://www.digitalriver.com/
Version: 0.1
Author: Digital River
Description: This plugin allows users to version control files on digitalriver.com. This plugin is depending on the plugin Advanced Custom Fields and ACF: Repeater
*/



defined( 'ABSPATH' ) or die( 'Nope' );


/***********************************************
*	Include Required Classes
************************************************/

$class_dir_path = plugin_dir_path( __FILE__ ) . 'classes';
include( $class_dir_path . '/resource.php');
include( $class_dir_path . '/resources_section.php');


/***********************************************
*	Include Resources Section Styling
************************************************/
add_action( 'wp_enqueue_scripts', 'department_styles', 99);
function department_styles() {
	wp_register_style( 'resource-styling', plugins_url('css/style.css', __FILE__), array('owl_carousel','owl_theme') );
	wp_enqueue_style( 'resource-styling' );

	wp_enqueue_script( 'resource-script', plugins_url('js/script.js', __FILE__), array(), '1.0.0', true );
}


/***********************************************
*	Create Custom Post Type For Marketing
*	Materials
************************************************/

add_action( 'init', 'marketing_materials', 0 );
function marketing_materials() {

	$labels = array(
		'name'                => _x( 'Marketing Materials', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Marketing Material', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Marketing Material', 'text_domain' ),
		'name_admin_bar'      => __( 'Marketing Material', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Marketing Material', 'text_domain' ),
		'add_new_item'        => __( 'Add New Marketing Material', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Marketing Material', 'text_domain' ),
		'edit_item'           => __( 'Edit Marketing Material', 'text_domain' ),
		'update_item'         => __( 'Update Marketing Material', 'text_domain' ),
		'view_item'           => __( 'View Marketing Material', 'text_domain' ),
		'search_items'        => __( 'Search Marketing Material', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'marketing_material', 'text_domain' ),
		'description'         => __( 'For file version control system', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'marketing_material', $args );

}


add_action('admin_head', 'removeUnusedMetaboxes', 99);
function removeUnusedMetaboxes(){
	remove_meta_box('wpseo_meta', 'marketing_material', 'normal');
	remove_meta_box('icl_div_config', 'marketing_material', 'normal');
	
}


/****************************************************
* ACF Configuration - Register Files Field Group
*----------------------------------------------------
* Configuration of this field group will NOT show
* up within the Custom Fields Admin Page. To
* change configuration of this field group, edit
* this code below.
*****************************************************/

add_action( 'init', 'acf_configuration', 0 );
function acf_configuration(){
	if(function_exists("register_field_group"))
	{
		register_field_group(array (
			'id' => 'acf_files',
			'title' => 'Files',
			'fields' => array (
				array (
					'key' => 'field_55d37a8058efc',
					'label' => 'Resource Type',
					'name' => 'resource-type',
					'type' => 'radio',
					'choices' => array (
						'internal' => 'Internal Resource',
						'external' => 'External Resource',
					),
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'internal',
					'layout' => 'vertical',
				),
				array (
					'key' => 'field_55baa10c6bfae',
					'label' => 'Files',
					'name' => 'files',
					'type' => 'repeater',
					'sub_fields' => array (
						array (
							'key' => 'field_55baa1f66bfb0',
							'label' => 'Display',
							'name' => 'display',
							'type' => 'checkbox',
							'column_width' => '',
							'choices' => array (
								1 => ''
							),
							'default_value' => '',
							'layout' => 'vertical',
						),
						array (
							'key' => 'field_55baa2096bfb1',
							'label' => 'File',
							'name' => 'file',
							'type' => 'file',
							'column_width' => '',
							'save_format' => 'url',
							'library' => 'all',
						),
						array (
							'key' => 'field_55baa21f6bfb2',
							'label' => 'Comment',
							'name' => 'comment',
							'type' => 'textarea',
							'column_width' => '',
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'formatting' => 'br',
						),
					),
					'conditional_logic' => array (
						'status' => 1,
						'rules' => array (
							array (
								'field' => 'field_55d37a8058efc',
								'operator' => '==',
								'value' => 'internal',
							),
						),
						'allorany' => 'all',
					),
					'row_min' => '',
					'row_limit' => '',
					'layout' => 'table',
					'button_label' => 'Add File',
				),
				array (
					'key' => 'field_55d381b1062b1',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
					'conditional_logic' => array (
						'status' => 1,
						'rules' => array (
							array (
								'field' => 'field_55d37a8058efc',
								'operator' => '==',
								'value' => 'external',
							),
						),
						'allorany' => 'all',
					),
				),
				array (
					'key' => 'field_55baa2057aet4',
					'label' => 'Resource HTML url',
					'name' => 'resource_url',
					'type' => 'text',
					'instructions' => 'If there is a html page associated with this pdf, put the url here. Do not include the domain and the first slash (example: resource/title-of-resource)',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '/',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				
				),
				array (
					'key' => 'field_55cb84e85ee2e',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'text',
					'instructions' => 'This field should be used to describe the file. This description is used in the resources section.',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d37e4ec9c10',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
					'conditional_logic' => array (
						'status' => 1,
						'rules' => array (
							array (
								'field' => 'field_55d37a8058efc',
								'operator' => '==',
								'value' => 'external',
							),
						),
						'allorany' => 'all',
					),
				),
				array (
					'key' => 'field_55d33d8b95be6',
					'label' => 'Link Title',
					'name' => 'link_title',
					'type' => 'text',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
				),
				array (
					'key' => 'field_55d33ef62760d',
					'label' => 'Content Type',
					'name' => 'content_type',
					'type' => 'select',
					'choices' => array (
						'value-brief' => 'Value Brief',
						'white-paper' => 'White Paper',
						'client-success-story' => 'Client Success Story',
						'industry-research' => 'Industry Research',
						'infographic' => 'Infographic',
						'webinar' => 'Webinar',
						'thought-leadership' => 'Thought Leadership',
					),
					'default_value' => '',
					'allow_null' => 0,
					'multiple' => 0,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'marketing_material',
						'order_no' => 0,
						'group_no' => 0,
					),
				),
			),
			'options' => array (
				'position' => 'acf_after_title',
				'layout' => 'no_box',
				'hide_on_screen' => array (
					0 => 'permalink',
					1 => 'the_content',
					2 => 'excerpt',
					3 => 'custom_fields',
					4 => 'discussion',
					5 => 'comments',
					6 => 'revisions',
					7 => 'slug',
					8 => 'author',
					9 => 'format',
					10 => 'featured_image',
					11 => 'send-trackbacks',
				),
			),
			'menu_order' => 0,
		));
	}
}

/***********************************************
*   Include Marketing Material Template File
*------------------------------------------------
*	This template that is being loaded will load
*	the first file that is displayed.
************************************************/

add_filter('template_include', 'get_marketing_material_template');
function get_marketing_material_template( $template_path ) {
    if ( get_post_type() == 'marketing_material' ) {
        if ( is_single() ) {
            if ( $theme_file = locate_template( array ( 'single-marketing_material.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-marketing_material.php';
            }
        }
    }
    return $template_path;
}



/***********************************************
*   Add Ability To Add Marketing Material To
*	Pages
************************************************/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_resources',
		'title' => 'Resources',
		'fields' => array (
			array (
				'key' => 'field_55d5df0e2f33b',
				'label' => 'Display',
				'name' => 'display',
				'type' => 'checkbox',
				'choices' => array (
					1 => '',
				),
				'default_value' => '',
				'layout' => 'vertical',
			),
			array (
				'key' => 'field_55d337e8fe6bd',
				'label' => 'Resources',
				'name' => 'resources',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_55d3381bfe6be',
						'label' => 'Resource',
						'name' => 'resource',
						'type' => 'post_object',
						'column_width' => '',
						'post_type' => array (
							0 => 'marketing_material',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'allow_null' => 0,
						'multiple' => 0,
					)
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Resource',
				'conditional_logic' => array (
						'status' => 1,
						'rules' => array (
							array (
								'field' => 'field_55d5df0e2f33b',
								'operator' => '==',
								'value' => '1',
							),
						),
						'allorany' => 'all',
					),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}



/***********************************************
*	Add Resources Section To Pages Via Action
*	Hook
************************************************/

function initResourcesSection(){
	global $post;

	$display = get_field( "display", $post->ID );
	if($display[0] == 1):
		$resources = get_field( "resources", $post->ID );
		$resourcesSection = new ResourcesSection($resources);

		$resourcesSection->display();
	endif;
}


