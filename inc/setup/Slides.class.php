<?php

class SlidesPostType{

	function __construct()
	{

	    if( ! post_type_exists( $this->post_type_name ) )
	    {
	        add_action( 'init', array( &$this, 'register_post_type' ) );
	        add_action( 'admin_init', array( &$this, 'add_slide_type_metabox' ) );
	    }

	}


	function register_post_type()
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
		  register_post_type( 'slides', $args );
    }


    /**
	 * Adds a box to the main column on the Post and Page edit screens.
	 */
	function add_slide_type_metabox() {

			add_meta_box(
				'slide_type',
				'Slide Type',
				'render_slide_type_metabox',
				'slides',
				'side'
			);
			
	}
	add_action( 'add_meta_boxes', 'slide_type_add_meta_box' );

	/**
	 * Prints the box content.
	 * 
	 * @param WP_Post $post The object for the current post/page.
	 */
	function render_slide_type_metabox( $post ) {

		// Add a nonce field so we can check for it later.
		wp_nonce_field( 'save_slide_type_value', 'save_slide_type_meta_box_nonce' );

		/*
		 * Use get_post_meta() to retrieve an existing value
		 * from the database and use the value for the form.
		 */
		$value = get_post_meta( $post->ID, '_slide_type', true );

		$slideTypes = array(
			"header" => "Header",
			"overview" => "Overview",
			"why" => "Why Attend?",
			"register" => "Register",
			"schedule" => "Schedule",
			"speakers" => "Speakers",
			"networking" => "Networking",
			"slider" => "Slider",
			"sponsor" => "Sponsor",
			"location" => "Location",
			"map" => "Map",
			"banner" => "Banner",
			"footer" => "Footer"
		);


		$selectedPostMeta = get_post_meta( $post->ID, '_slide_type_value', true );

		foreach ($slideTypes as $slideId => $slideType) :
			echo "<input ";
			echo $slideId == $selectedPostMeta ? "checked" : "";
			echo " type='radio' name='slide_type_value' value='".$slideId."' />";
			echo "<label>".$slideType."</label>";
			echo "<br>";
		endforeach;

	}




}