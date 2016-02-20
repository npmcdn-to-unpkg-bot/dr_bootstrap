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




function my_deregister_styles() {

	if(isset($_GET['print'])):
		wp_deregister_style( 'global' );
		endif;
   
}

add_action( 'wp_print_styles', 'my_deregister_styles' );

function load_PDF_page_styles() {
    $valueBriefTemplate = is_page_template("page-templates/template-value-brief.php");
    if($valueBriefTemplate){

 		$pluginDirPath = plugin_dir_url( __FILE__ );

	    wp_register_style('main-styles', $pluginDirPath . 'css/main.css', array(), 1, $media = 'all');

		wp_enqueue_style('main-styles');

    }
}
add_action('wp_enqueue_scripts', 'load_PDF_page_styles');


function load_PDF_print_style() {
    $valueBriefTemplate = is_page_template("page-templates/template-value-brief.php");
    if($valueBriefTemplate){

 		$pluginDirPath = plugin_dir_url( __FILE__ );

	    wp_register_style('print-pdf-styles', $pluginDirPath . 'css/print.css', array(), 3, $media = 'print');
	    // reset-styles enables page-break 


		if(isset($_GET['print'])):
			wp_enqueue_style('print-pdf-styles');
			wp_enqueue_style('bootstrap-styles');
			
		endif;

    }
}
add_action('wp_enqueue_scripts', 'load_PDF_print_style', 999 );






/**
 *		ACF Fields
 */


if(function_exists("register_field_group")){
	register_field_group(array (
		'id' => 'acf_pdf-page-builder',
		'title' => 'PDF Page Builder',
		'fields' => array (
			array (
				'key' => 'field_567095acd0e45',
				'label' => 'Row',
				'name' => 'row',
				'type' => 'repeater',
				'instructions' => 'Each PDF Page is broken down into sections that we call "Rows". Each Row is a fraction of a page or 1 whole page. Different Row Types include 1/4 (a quarter of a page), 1/3, 2/4, 2/3, and 1 (whole page). Get started by clicking "Add Row". 
	PLEASE NOTE: The last PDF page will always have a contact info panel that is a 1/4 row so for the last page you should only have a total of 3/4 or 2/3 of Rows. If your last page needs a full page add a blank PDF page, title it appropriately (e.g. Value Brief BLANK) and simply click "Publish". In "Pages" when you are putting together each PDF Page for your complete document have this blank PDF Page be the last Page. This will allow for the contact footer to appear appropriately.',
				'sub_fields' => array (
					array (
						'key' => 'field_5670975eda7f5',
						'label' => 'Row Type',
						'name' => 'row_type',
						'type' => 'select',
						'instructions' => 'Each page should have a sum of rows that equal 1 (i.e. 1/3 row + 2/3 row = 1 full page)',
						'column_width' => '',
						'choices' => array (
							'row-four' => '1/4',
							'row-two' => '2/4',
							'row-three' => '1/3',
							'row-two-three' => '2/3',
							'row-one' => 1,
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_567097a5da7f6',
						'label' => 'Columns',
						'name' => 'columns',
						'type' => 'repeater',
						'instructions' => 'Add up to 3 columns',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_5670975eda7f5',
									'operator' => '==',
									'value' => 'row-four',
								),
								array (
									'field' => 'field_5670975eda7f5',
									'operator' => '==',
									'value' => 'row-two',
								),
								array (
									'field' => 'field_5670975eda7f5',
									'operator' => '==',
									'value' => 'row-three',
								),
								array (
									'field' => 'field_5670975eda7f5',
									'operator' => '==',
									'value' => 'row-two-three',
								),
								array (
									'field' => 'field_5670975eda7f5',
									'operator' => '==',
									'value' => 'row-one',
								),
							),
							'allorany' => 'any',
						),
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5671c7a0f5099',
								'label' => 'Column Type',
								'name' => 'column_type',
								'type' => 'select',
								'instructions' => 'Columns are broken down into 1/3s and should equal a sum of 1 (2/3 +1/3)',
								'column_width' => 3,
								'choices' => array (
									'one-col' => 1,
									'one-half-col' => '1/2',
									'one-third-col' => '1/3',
									'two-thirds-col' => '2/3',
								),
								'default_value' => '',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_5671c97af509d',
								'label' => 'Breakout',
								'name' => 'breakout',
								'type' => 'radio',
								'instructions' => 'Gray bkgd',
								'column_width' => '',
								'choices' => array (
									'off' => 'Off',
									'on' => 'On',
								),
								'other_choice' => 0,
								'save_other_choice' => 0,
								'default_value' => 'off',
								'layout' => 'horizontal',
							),
							array (
								'key' => 'field_5671c8a9f509a',
								'label' => 'Content',
								'name' => 'content',
								'type' => 'flexible_content',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_5671c7a0f5099',
											'operator' => '==',
											'value' => 'one-col',
										),
										array (
											'field' => 'field_5671c7a0f5099',
											'operator' => '==',
											'value' => 'one-half-col',
										),
										array (
											'field' => 'field_5671c7a0f5099',
											'operator' => '==',
											'value' => 'one-third-col',
										),
										array (
											'field' => 'field_5671c7a0f5099',
											'operator' => '==',
											'value' => 'two-thirds-col',
										),
									),
									'allorany' => 'any',
								),
								'column_width' => 90,
								'layouts' => array (
									array (
										'label' => 'Heading Large',
										'name' => 'heading_large',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671ca13f509e',
												'label' => 'Heading LG',
												'name' => 'heading_lg',
												'type' => 'text',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'html',
												'maxlength' => '',
											),
										),
									),
									array (
										'label' => 'Heading Medium',
										'name' => 'heading_medium',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671ca86f50a0',
												'label' => 'Heading MD',
												'name' => 'heading_md',
												'type' => 'text',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'html',
												'maxlength' => '',
											),
										),
									),
									array (
										'label' => 'Heading Small',
										'name' => 'heading_small',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671cab1f50a2',
												'label' => 'Heading SM',
												'name' => 'heading_sm',
												'type' => 'text',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'html',
												'maxlength' => '',
											),
										),
									),
									array (
										'label' => 'Heading Underline',
										'name' => 'heading_underline',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671caf2f50a4',
												'label' => 'Heading UL',
												'name' => 'heading_ul',
												'type' => 'text',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'html',
												'maxlength' => '',
											),
										),
									),
									array (
										'label' => 'Wysiwyg',
										'name' => 'paragraph',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671cb87f50a6',
												'label' => 'Wysiwyg',
												'name' => 'pg',
												'type' => 'wysiwyg',
												'column_width' => '',
												'default_value' => '',
												'toolbar' => 'full',
												'media_upload' => 'no',
											),
										),
									),
									array (
										'label' => 'Superscript',
										'name' => 'superscript',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671caf2f50a5',
												'label' => 'Superscript',
												'name' => 'sup',
												'type' => 'textarea',
												'column_width' => '',
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'formatting' => 'br',
												'maxlength' => '',
											),
										),
									),
									array (
										'label' => 'Image',
										'name' => 'image',
										'display' => 'row',
										'min' => '',
										'max' => '',
										'sub_fields' => array (
											array (
												'key' => 'field_5671cbc4f50a8',
												'label' => 'Image Select',
												'name' => 'image_select',
												'type' => 'image',
												'column_width' => '',
												'save_format' => 'url',
												'preview_size' => 'thumbnail',
												'library' => 'all',
											),
										),
									),
								),
								'button_label' => 'Add Content',
								'min' => '',
								'max' => '',
							),
						),
						'row_min' => '',
						'row_limit' => 3,
						'layout' => 'row',
						'button_label' => 'Add Column(s)',
					),
				),
				'row_min' => '',
				'row_limit' => 4,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'pdf',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
			),
		),
		'menu_order' => 0,
	));

}
