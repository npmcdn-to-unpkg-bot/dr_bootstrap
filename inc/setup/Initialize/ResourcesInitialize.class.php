<?php

/**
 *	Class for initializing the set up for dr.com
 *
 */
class ResourcesInit implements Initialize
{
	public static $post_type_name = 'marketing_material';
	public static $post_type_singular = 'Resource';
	public static $post_type_plural = 'Resource';

	function __construct()
	{
    	add_action( 'init', array( &$this, 'register_post_type' ) );
		add_action('admin_head', array(&$this, 'remove_unused_meta_boxes'), 99);

		// add_filter('template_include', array(&$this, 'get_marketing_material_template'));
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


	function remove_unused_meta_boxes()
	{
		remove_meta_box('wpseo_meta', self::$post_type_name, 'normal');
		remove_meta_box('icl_div_config', self::$post_type_name, 'normal');
	}


	function get_marketing_material_template( $template_path )
	{
	    if ( get_post_type() == self::$post_type_name ) {
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
}