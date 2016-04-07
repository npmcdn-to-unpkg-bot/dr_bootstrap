<?php

class SlidesPostType{

	public static $slideTypes = array(
		"general" => "General",
		"masterheader" => "Masterheader",
		"clients" => "Clients",
		"interactive-grid" => "Interactive Grid"
	);

	public static $post_type_name = 'slides';

	function __construct()
	{
	    if( ! post_type_exists( self::$post_type_name ) )
	    {
        	add_action( 'init', array( &$this, 'register_post_type' ) );
	  		add_action( 'add_meta_boxes', array( &$this, 'add_slide_type_metabox' ) );
			add_action( 'save_post', array( &$this, 'save_slide_type_value' ) );
			add_filter('acf/location/rule_match/slide', array( &$this, 'acf_location_rules_match_slide') , 10, 3);
			add_filter('acf/location/rule_types', array( &$this,'acf_location_rules_types') );
			add_filter('acf/location/rule_values/slide', array( &$this, 'acf_location_rules_values_slide') );
	    }
	}


	public function register_post_type()
    {
		$labels = array(
			'name'                  => _x( 'Post Types', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Slides', 'text_domain' ),
			'name_admin_bar'        => __( 'Slides', 'text_domain' ),
			'archives'              => __( 'Slide Archives', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Slide:', 'text_domain' ),
			'all_items'             => __( 'All Slide', 'text_domain' ),
			'add_new_item'          => __( 'Add New Slide', 'text_domain' ),
			'add_new'               => __( 'Add New Slide', 'text_domain' ),
			'new_item'              => __( 'New Slide', 'text_domain' ),
			'edit_item'             => __( 'Edit Slide', 'text_domain' ),
			'update_item'           => __( 'Update Slide', 'text_domain' ),
			'view_item'             => __( 'View Slide', 'text_domain' ),
			'search_items'          => __( 'Search Slide', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'featured_image'        => __( 'Featured Image', 'text_domain' ),
			'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into slide', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this slide', 'text_domain' ),
			'items_list'            => __( 'Items slide', 'text_domain' ),
			'items_list_navigation' => __( 'Items slide navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter slide list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Slide', 'text_domain' ),
			'description'           => __( 'This post type is used to create slides for pages', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,    
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( self::$post_type_name, $args );
    }


    /**
	 * Adds a box to the main column on the Post and Page edit screens.
	 */
	public function add_slide_type_metabox()
	{
		add_meta_box(
			'slide_type',
			'Slide Type',
			array( &$this, 'render_slide_type_metabox'),
			self::$post_type_name,
			'side'
		);
	}



	/**
	 * Prints the box content.
	 * 
	 * @param WP_Post $post The object for the current post/page.
	 */
	public function render_slide_type_metabox( $post )
	{
		wp_nonce_field( 'save_slide_type_value', 'save_slide_type_meta_box_nonce' );

		$selectedPostMeta = get_post_meta( $post->ID, '_slide_type_value', true );

		foreach (self::$slideTypes as $slideId => $slideType) :
			echo "<input ";
			echo $slideId == $selectedPostMeta ? "checked" : "";
			echo " type='radio' name='slide_type_value' value='".$slideId."' />";
			echo "<label>".$slideType."</label>";
			echo "<br>";
		endforeach;
	}


	public function save_slide_type_value( $post_id )
	{
		if ( ! isset( $_POST['save_slide_type_meta_box_nonce'] ) ) {
			return;
		}

		if ( ! wp_verify_nonce( $_POST['save_slide_type_meta_box_nonce'], 'save_slide_type_value' ) ) {
			return;
		}

		// If this is an autosave, our form has not been submitted, so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return;
			}

		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return;
			}
		}

		// Make sure that it is set.
		if ( ! isset( $_POST['slide_type_value'] ) ) {
			return;
		}

		update_post_meta( $post_id, '_slide_type_value', sanitize_text_field( $_POST['slide_type_value'] ) );
	}



	/**
	 *	Triggers correct ACF fields to show up when a slide type is chosen
	 *
	 */
	public function acf_location_rules_match_slide( $match, $rule, $options )
	{
		global $post;

	    $selected_slide_type = $rule['value'];
		$slide_type = get_post_meta($post->ID, '_slide_type_value', true);

	    if($rule['operator'] == "=="){
	    	$match = ( $slide_type == $selected_slide_type );
	    }elseif($rule['operator'] == "!="){
	    	$match = ( $slide_type != $selected_slide_type );
	    }

	    return $match;
	}


	/**
	 *	Adds Slides as an option in post types selector
	 *
	 */
	public function acf_location_rules_types( $choices )
	{

	    $choices['Basic']['slide'] = 'Slide';
	    return $choices;

	}


	/**
	 *	Adds each slide type as an option for ACF functionality
	 *
	 */
	public function acf_location_rules_values_slide( $choices )
	{
	    return self::$slideTypes;
	}

}