<?php

/**
 *	Class for initializing the set up for dr.com
 *
 */
class ClientsInit implements Initialize
{
	public static $post_type_name = 'clients';
	public static $post_type_singular = 'Client';
	public static $post_type_plural = 'Clients';
	public static $clientOptions = 'field_570426a1236d1'; 

	function __construct()
	{
    	add_action( 'init', array( &$this, 'register_post_type' ) );
		add_filter('acf/load_field/key='.self::$clientOptions, array(&$this, 'load_client_options') );
	}

	public function register_post_type()
    {
		$labels = array(
			'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( self::$post_type_singular, 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( self::$post_type_plural, 'text_domain' ),
			'name_admin_bar'        => __( self::$post_type_plural, 'text_domain' ),
			'archives'              => __( self::$post_type_singular.' Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent '.self::$post_type_singular.':', 'text_domain' ),
			'all_items'             => __( 'All '.self::$post_type_plural, 'text_domain' ),
			'add_new_item'          => __( 'Add New '.self::$post_type_singular, 'text_domain' ),
			'add_new'               => __( 'Add New '.self::$post_type_singular, 'text_domain' ),
			'new_item'              => __( 'New '.self::$post_type_singular, 'text_domain' ),
			'edit_item'             => __( 'Edit '.self::$post_type_singular, 'text_domain' ),
			'update_item'           => __( 'Update '.self::$post_type_singular, 'text_domain' ),
			'view_item'             => __( 'View '.self::$post_type_singular, 'text_domain' ),
			'search_items'          => __( 'Search '.self::$post_type_singular, 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( self::$post_type_singular, 'text_domain' ),
			'description'           => __( 'This post type is used to create slides for pages', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'taxonomies' 			=> array('category'),  
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,    
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			'capability_type'       => 'page',
		);
		register_post_type( self::$post_type_name, $args );
    }


	function load_client_options( $field )
	{
	    $field['choices'] = array(
	        'custom' => 'My Custom Choice'
	    );

	    return $field;
	}
}