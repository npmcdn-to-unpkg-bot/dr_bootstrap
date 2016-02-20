<?php
/*
Plugin Name: DR's PDF Creator
Plugin URI: http://www.digitalriver.com/
Version: 0.1
Author: Michael Williamson
Description: This plugin enables users to create HTML pages, then generate a pdf page from HTML pages
*/

foreach ( glob( plugin_dir_path( __FILE__ ) . "classes/*.php" ) as $file ) {
    include_once $file;
}

function pdf_pages_post_type() {

	$labels = array(
		'name'                  => _x( 'PDF Pages', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'PDF Page', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'PDF Pages', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent PDF Pages:', 'text_domain' ),
		'all_items'             => __( 'All PDF Pages', 'text_domain' ),
		'add_new_item'          => __( 'Add New PDF Page', 'text_domain' ),
		'add_new'               => __( 'New PDF Page', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit PDF Page', 'text_domain' ),
		'update_item'           => __( 'Update PDF Page', 'text_domain' ),
		'view_item'             => __( 'View PDF Page', 'text_domain' ),
		'search_items'          => __( 'Search PDF Pages', 'text_domain' ),
		'not_found'             => __( 'No PDF Pages found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No PDF Pages found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'PDF Page', 'text_domain' ),
		'description'           => __( 'PDF information pages', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'    			=> 'dashicons-media-spreadsheet',
	);
	register_post_type( 'pdf', $args );

}
add_action( 'init', 'pdf_pages_post_type', 0 );


function add_template(){
	$templatePath = 'page-templates/template-value-brief.php';
	$templateName = 'Value Brief Template';
	PageTemplater::get_instance($templatePath, $templateName);
}
add_action( 'plugins_loaded', 'add_template');


function load_PDF_page_styles() {
    $valueBriefTemplate = is_page_template("page-templates/template-value-brief.php");
    if($valueBriefTemplate){

 		$pluginDirPath = plugin_dir_url( __FILE__ );

	    wp_register_style('value-brief-styles', $pluginDirPath . 'css/value-brief-styles.css', array(), 1, $media = 'all');
	    wp_register_style('bootstrap-styles', get_template_directory_uri() . 'bootstrap/assets/stylesheets/_bootstrap.css', array(), 1, $media = 'all');
	    wp_register_style('print-styles', $pluginDirPath . 'css/print.css', array(), 1, $media = 'all');

		wp_enqueue_style('bootstrap-styles');
		//wp_enqueue_style('value-brief-styles');

		if(isset($_GET['print'])):
			wp_enqueue_style('print-styles');
		endif;

    }
}
add_action('wp_enqueue_scripts', 'load_PDF_page_styles');



/**
 *		ACF Fields
 */


// if(function_exists("register_field_group"))
// {
// 	register_field_group(array (
// 		'id' => 'acf_marketing-materials-2',
// 		'title' => 'Marketing Materials',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_566f4786a19a4',
// 				'label' => 'Contact Description',
// 				'name' => 'description',
// 				'type' => 'textarea',
// 				'instructions' => 'Place the the About Description here',
// 				'required' => 1,
// 				'default_value' => '',
// 				'placeholder' => 'Digital River, the revenue growth...',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 			array (
// 				'key' => 'field_566f47e1a19a5',
// 				'label' => 'Tag Line',
// 				'name' => 'tag_line',
// 				'type' => 'text',
// 				'instructions' => 'Place tagline here. It will appear on the right side of the footer.',
// 				'required' => 1,
// 				'default_value' => '',
// 				'placeholder' => 'Unlock the value of Digital River...',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_566f483da19a6',
// 				'label' => 'Contact List',
// 				'name' => 'contact_list',
// 				'type' => 'repeater',
// 				'instructions' => 'Place contact list items here',
// 				'sub_fields' => array (
// 					array (
// 						'key' => 'field_566f486fa19a7',
// 						'label' => 'URL / Phone Number',
// 						'name' => 'contact_list_item',
// 						'type' => 'text',
// 						'instructions' => 'i.e. E: info@digitalriver.com',
// 						'column_width' => '',
// 						'default_value' => '',
// 						'placeholder' => '',
// 						'prepend' => '',
// 						'append' => '',
// 						'formatting' => 'html',
// 						'maxlength' => '',
// 					),
// 				),
// 				'row_min' => '',
// 				'row_limit' => '',
// 				'layout' => 'table',
// 				'button_label' => 'Add Row',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'options_page',
// 					'operator' => '==',
// 					'value' => 'acf-options',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_page-builder',
// 		'title' => 'Page Builder',
// 		'fields' => array (

// 					array (
// 						'key' => 'field_5669c423ba9cf',
// 						'label' => 'Row',
// 						'name' => 'row',
// 						'type' => 'repeater',
// 						'instructions' => 'Click "Add Row" in order to start the layout of your page',
// 						'column_width' => 100,
// 						'sub_fields' => array (
// 							array (
// 								'key' => 'field_5669c438ba9d0',
// 								'label' => 'Row Type',
// 								'name' => 'row_type',
// 								'type' => 'select',
// 								'instructions' => 'Each page should have a sum of rows that equal 1 (i.e. 1/3 row + 2/3 row = 1 full page)',
// 								'column_width' => '',
// 								'choices' => array (
// 									'row-four' => '1/4',
// 									'row-two' => '2/4',
// 									'row-three' => '1/3',
// 									'row-two-three' => '2/3',
// 									'row-one' => 1,
// 								),
// 								'default_value' => '',
// 								'allow_null' => 0,
// 								'multiple' => 0,
// 							),
// 							array (
// 								'key' => 'field_5669c876205d0',
// 								'label' => 'Columns',
// 								'name' => 'columns',
// 								'type' => 'flexible_content',
// 								'instructions' => 'Add up to 3 columns',
// 								'conditional_logic' => array (
// 									'status' => 1,
// 									'rules' => array (
// 										array (
// 											'field' => 'field_5669c438ba9d0',
// 											'operator' => '==',
// 											'value' => 'row-four',
// 										),
// 										array (
// 											'field' => 'field_5669c438ba9d0',
// 											'operator' => '==',
// 											'value' => 'row-two',
// 										),
// 										array (
// 											'field' => 'field_5669c438ba9d0',
// 											'operator' => '==',
// 											'value' => 'row-three',
// 										),
// 										array (
// 											'field' => 'field_5669c438ba9d0',
// 											'operator' => '==',
// 											'value' => 'row-two-three',
// 										),
// 										array (
// 											'field' => 'field_5669c438ba9d0',
// 											'operator' => '==',
// 											'value' => 'row-one',
// 										),
// 									),
// 									'allorany' => 'any',
// 								),
// 								'column_width' => 90,
// 								'layouts' => array (
// 									array (
// 										'label' => 'Text',
// 										'name' => 'text',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_566f223e83263',
// 												'label' => 'Breakout',
// 												'name' => 'breakout',
// 												'type' => 'radio',
// 												'instructions' => 'Provides a gray background to Row Cell. Less characters will be allowed.',
// 												'column_width' => 5,
// 												'choices' => array (
// 													'off' => 'Off',
// 													'on' => 'On',
// 												),
// 												'other_choice' => 0,
// 												'save_other_choice' => 0,
// 												'default_value' => 'off',
// 												'layout' => 'horizontal',
// 											),
// 											array (
// 												'key' => 'field_5669cf58b07ae',
// 												'label' => 'class',
// 												'name' => 'class',
// 												'type' => 'repeater',
// 												'column_width' => 10,
// 												'sub_fields' => array (
// 													array (
// 														'key' => 'field_5669f3b2d9b30',
// 														'label' => 'tag',
// 														'name' => 'tag',
// 														'type' => 'select',
// 														'column_width' => '',
// 														'choices' => array (
// 															'heading-lg' => 'Heading LG',
// 															'heading-md' => 'Heading MD',
// 															'heading-sm' => 'Heading SM',
// 															'heading-un' => 'Heading Underline',
// 															'paragraph' => 'paragraph',
// 															'image-insert' => 'image insert',
// 														),
// 														'default_value' => '',
// 														'allow_null' => 0,
// 														'multiple' => 0,
// 													),
// 													array (
// 														'key' => 'field_5669f40bd9b31',
// 														'label' => 'Heading Large',
// 														'name' => 'heading_large',
// 														'type' => 'textarea',
// 														'conditional_logic' => array (
// 															'status' => 1,
// 															'rules' => array (
// 																array (
// 																	'field' => 'field_5669f3b2d9b30',
// 																	'operator' => '==',
// 																	'value' => 'heading-lg',
// 																),
// 															),
// 															'allorany' => 'all',
// 														),
// 														'column_width' => '',
// 														'default_value' => '',
// 														'placeholder' => '',
// 														'maxlength' => '',
// 														'rows' => '',
// 														'formatting' => 'br',
// 													),
// 													array (
// 														'key' => 'field_5669f443d9b32',
// 														'label' => 'Heading Medium',
// 														'name' => 'heading_medium',
// 														'type' => 'textarea',
// 														'conditional_logic' => array (
// 															'status' => 1,
// 															'rules' => array (
// 																array (
// 																	'field' => 'field_5669f3b2d9b30',
// 																	'operator' => '==',
// 																	'value' => 'heading-md',
// 																),
// 															),
// 															'allorany' => 'all',
// 														),
// 														'column_width' => '',
// 														'default_value' => '',
// 														'placeholder' => '',
// 														'maxlength' => '',
// 														'rows' => '',
// 														'formatting' => 'br',
// 													),
// 													array (
// 														'key' => 'field_566f0c12ccac3',
// 														'label' => 'Heading Small',
// 														'name' => 'heading_small',
// 														'type' => 'textarea',
// 														'conditional_logic' => array (
// 															'status' => 1,
// 															'rules' => array (
// 																array (
// 																	'field' => 'field_5669f3b2d9b30',
// 																	'operator' => '==',
// 																	'value' => 'heading-sm',
// 																),
// 															),
// 															'allorany' => 'all',
// 														),
// 														'column_width' => '',
// 														'default_value' => '',
// 														'placeholder' => '',
// 														'maxlength' => '',
// 														'rows' => '',
// 														'formatting' => 'br',
// 													),
// 													array (
// 														'key' => 'field_5669f45ed9b33',
// 														'label' => 'Heading Underline',
// 														'name' => 'heading_underline',
// 														'type' => 'textarea',
// 														'conditional_logic' => array (
// 															'status' => 1,
// 															'rules' => array (
// 																array (
// 																	'field' => 'field_5669f3b2d9b30',
// 																	'operator' => '==',
// 																	'value' => 'heading-un',
// 																),
// 															),
// 															'allorany' => 'all',
// 														),
// 														'column_width' => '',
// 														'default_value' => '',
// 														'placeholder' => '',
// 														'maxlength' => '',
// 														'rows' => '',
// 														'formatting' => 'br',
// 													),
// 													array (
// 														'key' => 'field_5669f476d9b34',
// 														'label' => 'paragraph',
// 														'name' => 'paragraph',
// 														'type' => 'textarea',
// 														'conditional_logic' => array (
// 															'status' => 1,
// 															'rules' => array (
// 																array (
// 																	'field' => 'field_5669f3b2d9b30',
// 																	'operator' => '==',
// 																	'value' => 'paragraph',
// 																),
// 															),
// 															'allorany' => 'all',
// 														),
// 														'column_width' => '',
// 														'default_value' => '',
// 														'placeholder' => '',
// 														'maxlength' => '',
// 														'rows' => '',
// 														'formatting' => 'br',
// 													),
// 													array (
// 														'key' => 'field_5669f48dd9b35',
// 														'label' => 'image insert',
// 														'name' => 'image_insert',
// 														'type' => 'image',
// 														'conditional_logic' => array (
// 															'status' => 1,
// 															'rules' => array (
// 																array (
// 																	'field' => 'field_5669f3b2d9b30',
// 																	'operator' => '==',
// 																	'value' => 'image-insert',
// 																),
// 															),
// 															'allorany' => 'all',
// 														),
// 														'column_width' => '',
// 														'save_format' => 'url',
// 														'preview_size' => 'thumbnail',
// 														'library' => 'all',
// 													),
// 												),
// 												'row_min' => '',
// 												'row_limit' => '',
// 												'layout' => 'row',
// 												'button_label' => 'Add Text',
// 											),
// 										),
// 									),
// 									array (
// 										'label' => 'Image',
// 										'name' => 'image',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5669f5080decc',
// 												'label' => 'Image',
// 												'name' => 'image',
// 												'type' => 'image',
// 												'column_width' => '',
// 												'save_format' => 'url',
// 												'preview_size' => 'thumbnail',
// 												'library' => 'all',
// 											),
// 										),
// 									),
// 								),
// 								'button_label' => 'Add Column',
// 								'min' => '',
// 								'max' => 3,
// 							),
// 						),
// 						'row_min' => '',
// 						'row_limit' => 4,
// 						'layout' => 'row',
// 						'button_label' => 'Add Row',
// 					),

// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'pdf',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'acf_after_title',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'the_content',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_pdf-page-builder',
// 		'title' => 'PDF Page Builder',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_567095acd0e45',
// 				'label' => 'Row',
// 				'name' => 'row',
// 				'type' => 'repeater',
// 				'instructions' => 'Each PDF Page is broken down into sections that we call "Rows". Each Row is a fraction of a page or 1 whole page. Different Row Types include 1/4 (a quarter of a page), 1/3, 2/4, 2/3, and 1 (whole page). Get started by clicking "Add Row". 
// 	PLEASE NOTE: The last PDF page will always have a contact info panel that is a 1/4 row so for the last page you should only have a total of 3/4 or 2/3 of Rows. If your last page needs a full page add a blank PDF page, title it appropriately (e.g. Value Brief BLANK) and simply click "Publish". In "Pages" when you are putting together each PDF Page for your complete document have this blank PDF Page be the last Page. This will allow for the contact footer to appear appropriately.',
// 				'sub_fields' => array (
// 					array (
// 						'key' => 'field_5670975eda7f5',
// 						'label' => 'Row Type',
// 						'name' => 'row_type',
// 						'type' => 'select',
// 						'instructions' => 'Each page should have a sum of rows that equal 1 (i.e. 1/3 row + 2/3 row = 1 full page)',
// 						'column_width' => '',
// 						'choices' => array (
// 							'row-four' => '1/4',
// 							'row-two' => '2/4',
// 							'row-three' => '1/3',
// 							'row-two-three' => '2/3',
// 							'row-one' => 1,
// 						),
// 						'default_value' => '',
// 						'allow_null' => 0,
// 						'multiple' => 0,
// 					),
// 					array (
// 						'key' => 'field_567097a5da7f6',
// 						'label' => 'Columns',
// 						'name' => 'columns',
// 						'type' => 'repeater',
// 						'instructions' => 'Add up to 3 columns',
// 						'conditional_logic' => array (
// 							'status' => 1,
// 							'rules' => array (
// 								array (
// 									'field' => 'field_5670975eda7f5',
// 									'operator' => '==',
// 									'value' => 'row-four',
// 								),
// 								array (
// 									'field' => 'field_5670975eda7f5',
// 									'operator' => '==',
// 									'value' => 'row-two',
// 								),
// 								array (
// 									'field' => 'field_5670975eda7f5',
// 									'operator' => '==',
// 									'value' => 'row-three',
// 								),
// 								array (
// 									'field' => 'field_5670975eda7f5',
// 									'operator' => '==',
// 									'value' => 'row-two-three',
// 								),
// 								array (
// 									'field' => 'field_5670975eda7f5',
// 									'operator' => '==',
// 									'value' => 'row-one',
// 								),
// 							),
// 							'allorany' => 'any',
// 						),
// 						'column_width' => '',
// 						'sub_fields' => array (
// 							array (
// 								'key' => 'field_5671c7a0f5099',
// 								'label' => 'Column Type',
// 								'name' => 'column_type',
// 								'type' => 'select',
// 								'instructions' => 'Columns are broken down into 1/3s and should equal a sum of 1 (2/3 +1/3)',
// 								'column_width' => 3,
// 								'choices' => array (
// 									'one-col' => 1,
// 									'one-half-col' => '1/2',
// 									'one-third-col' => '1/3',
// 									'two-thirds-col' => '2/3',
// 								),
// 								'default_value' => '',
// 								'allow_null' => 0,
// 								'multiple' => 0,
// 							),
// 							array (
// 								'key' => 'field_5671c97af509d',
// 								'label' => 'Breakout',
// 								'name' => 'breakout',
// 								'type' => 'radio',
// 								'instructions' => 'Gray bkgd',
// 								'column_width' => '',
// 								'choices' => array (
// 									'off' => 'Off',
// 									'on' => 'On',
// 								),
// 								'other_choice' => 0,
// 								'save_other_choice' => 0,
// 								'default_value' => 'off',
// 								'layout' => 'horizontal',
// 							),
// 							array (
// 								'key' => 'field_5671c8a9f509a',
// 								'label' => 'Content',
// 								'name' => 'content',
// 								'type' => 'flexible_content',
// 								'conditional_logic' => array (
// 									'status' => 1,
// 									'rules' => array (
// 										array (
// 											'field' => 'field_5671c7a0f5099',
// 											'operator' => '==',
// 											'value' => 'one-col',
// 										),
// 										array (
// 											'field' => 'field_5671c7a0f5099',
// 											'operator' => '==',
// 											'value' => 'one-half-col',
// 										),
// 										array (
// 											'field' => 'field_5671c7a0f5099',
// 											'operator' => '==',
// 											'value' => 'one-third-col',
// 										),
// 										array (
// 											'field' => 'field_5671c7a0f5099',
// 											'operator' => '==',
// 											'value' => 'two-thirds-col',
// 										),
// 									),
// 									'allorany' => 'any',
// 								),
// 								'column_width' => 90,
// 								'layouts' => array (
// 									array (
// 										'label' => 'Heading Large',
// 										'name' => 'heading_large',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5671ca13f509e',
// 												'label' => 'Heading LG',
// 												'name' => 'heading_lg',
// 												'type' => 'text',
// 												'column_width' => '',
// 												'default_value' => '',
// 												'placeholder' => '',
// 												'prepend' => '',
// 												'append' => '',
// 												'formatting' => 'html',
// 												'maxlength' => '',
// 											),
// 										),
// 									),
// 									array (
// 										'label' => 'Heading Medium',
// 										'name' => 'heading_medium',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5671ca86f50a0',
// 												'label' => 'Heading MD',
// 												'name' => 'heading_md',
// 												'type' => 'text',
// 												'column_width' => '',
// 												'default_value' => '',
// 												'placeholder' => '',
// 												'prepend' => '',
// 												'append' => '',
// 												'formatting' => 'html',
// 												'maxlength' => '',
// 											),
// 										),
// 									),
// 									array (
// 										'label' => 'Heading Small',
// 										'name' => 'heading_small',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5671cab1f50a2',
// 												'label' => 'Heading SM',
// 												'name' => 'heading_sm',
// 												'type' => 'text',
// 												'column_width' => '',
// 												'default_value' => '',
// 												'placeholder' => '',
// 												'prepend' => '',
// 												'append' => '',
// 												'formatting' => 'html',
// 												'maxlength' => '',
// 											),
// 										),
// 									),
// 									array (
// 										'label' => 'Heading Underline',
// 										'name' => 'heading_underline',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5671caf2f50a4',
// 												'label' => 'Heading UL',
// 												'name' => 'heading_ul',
// 												'type' => 'text',
// 												'column_width' => '',
// 												'default_value' => '',
// 												'placeholder' => '',
// 												'prepend' => '',
// 												'append' => '',
// 												'formatting' => 'html',
// 												'maxlength' => '',
// 											),
// 										),
// 									),
// 									array (
// 										'label' => 'Wysiwyg',
// 										'name' => 'paragraph',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5671cb87f50a6',
// 												'label' => 'Wysiwyg',
// 												'name' => 'pg',
// 												'type' => 'wysiwyg',
// 												'column_width' => '',
// 												'default_value' => '',
// 												'toolbar' => 'full',
// 												'media_upload' => 'no',
// 											),
// 										),
// 									),
// 									array (
// 										'label' => 'Image',
// 										'name' => 'image',
// 										'display' => 'row',
// 										'min' => '',
// 										'max' => '',
// 										'sub_fields' => array (
// 											array (
// 												'key' => 'field_5671cbc4f50a8',
// 												'label' => 'Image Select',
// 												'name' => 'image_select',
// 												'type' => 'image',
// 												'column_width' => '',
// 												'save_format' => 'url',
// 												'preview_size' => 'thumbnail',
// 												'library' => 'all',
// 											),
// 										),
// 									),
// 								),
// 								'button_label' => 'Add Content',
// 								'min' => '',
// 								'max' => '',
// 							),
// 						),
// 						'row_min' => '',
// 						'row_limit' => 3,
// 						'layout' => 'row',
// 						'button_label' => 'Add Column(s)',
// 					),
// 				),
// 				'row_min' => '',
// 				'row_limit' => 4,
// 				'layout' => 'row',
// 				'button_label' => 'Add Row',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'pdf',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'the_content',
// 				1 => 'excerpt',
// 				2 => 'custom_fields',
// 				3 => 'discussion',
// 				4 => 'comments',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// 	register_field_group(array (
// 		'id' => 'acf_pdf-page-selector',
// 		'title' => 'PDF Page Selector',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5670965ed4a4a',
// 				'label' => 'Add Pages',
// 				'name' => 'add_pages',
// 				'type' => 'repeater',
// 				'instructions' => 'PLEASE NOTE: The last PDF page will always have a contact info panel that is a 1/4 row so for the last page you should only have a total of 3/4 or 2/3 of Rows. If you need a full page add a blank PDF page via "PDF Pages" click "Publish" and add that PDF Page at the bottom. This will allow for the contact footer to appear appropriately.',
// 				'sub_fields' => array (
// 					array (
// 						'key' => 'field_5670967fd4a4b',
// 						'label' => 'Page',
// 						'name' => 'page',
// 						'type' => 'post_object',
// 						'column_width' => '',
// 						'post_type' => array (
// 							0 => 'pdf',
// 						),
// 						'taxonomy' => array (
// 							0 => 'all',
// 						),
// 						'allow_null' => 0,
// 						'multiple' => 0,
// 					),
// 				),
// 				'row_min' => '',
// 				'row_limit' => '',
// 				'layout' => 'table',
// 				'button_label' => 'Add Page',
// 			),
// 			array (
// 				'key' => 'field_5684309cdb451',
// 				'label' => 'Footer URL',
// 				'name' => 'footer_url',
// 				'type' => 'text',
// 				'instructions' => 'Add the corresponding URL Name here',
// 				'default_value' => 'digitalriver.com',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_56843108db452',
// 				'label' => 'Footer URL Link',
// 				'name' => 'footer_url_link',
// 				'type' => 'text',
// 				'instructions' => 'Add the corresponding URL Link here',
// 				'default_value' => 'http://digitalriver.com',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_56842c5fab57f',
// 				'label' => 'Footer Trademarks',
// 				'name' => 'footer_trademarks',
// 				'type' => 'text',
// 				'instructions' => 'add footer trade marks here (i.e. Digital River and Blank are registered trademarks of Digital River, Inc)',
// 				'default_value' => '',
// 				'placeholder' => 'Digital River and Blank are registered trademarks of Digital River, Inc',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'html',
// 				'maxlength' => '',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'page_template',
// 					'operator' => '==',
// 					'value' => 'page-templates/template-value-brief.php',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 				0 => 'the_content',
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// }
