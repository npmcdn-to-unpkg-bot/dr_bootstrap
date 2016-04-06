<?php
/**
 *	Class for initializing the set up for dr.com
 *
 */
class GeneralInit implements Initialize
{
	function __construct()
	{
		add_action( 'admin_enqueue_scripts', array(&$this, 'custom_css_scripts') );
		add_action( 'add_meta_boxes', array(&$this, 'custom_css_admin_page') );
		add_action( 'save_post', array(&$this, 'save_general_html_value') );
 	}

	function custom_css_admin_page()
	{
		global $post;
		$slide_type = get_post_meta($post->ID, '_slide_type_value', true);

		if($slide_type == "general")
	    	add_meta_box( 'general_input',  __( 'General Input' ), array(&$this, 'custom_css_admin_page_content'), SlidesPostType::$post_type_name, 'advanced');
	}
	 
	function custom_css_scripts( $hook )
	{
 		if(get_post_type() == SlidesPostType::$post_type_name){
        	wp_enqueue_script( 'ace_code_highlighter_js', get_template_directory_uri() . '/admin_includes/js/ace/ace.js', '', '1.0.0', true );
        	wp_enqueue_script( 'custom_css_js', get_template_directory_uri() . '/admin_includes/js/custom-css.js', array( 'jquery', 'ace_code_highlighter_js' ), '1.0.0', true );
        }
	}

	public function save_general_html_value( $post_id )
	{

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if(!isset($_POST['general_html_value'])){
			return;
		}

		if ( isset( $_POST['post_type'] ) && SlidesPostType::$post_type_name == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return;
			}
		}else{
			return;
		}

	    remove_action('save_post', array(&$this, 'save_general_html_value') );

		wp_update_post(array(
			'ID'           => $post_id,
			'post_content' => $_POST['general_html_value'],
		));

	    add_action('save_post', array(&$this, 'save_general_html_value') );

	}

	function custom_css_admin_page_content()
	{
		global $post;
	    ?>
	    <div class="wrap">
            <div id="custom_css_container">
                <div name="custom_css" id="custom_css" style="border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 100%; height: 400px; position: relative;"></div>
            </div>
 
            <textarea id="custom_css_textarea" name="general_html_value" style="display: none;"><?php echo $post->post_content; ?></textarea>
	    </div>
	<?php
	}

	function acf_load_background_options($field)
	{
	  $field['choices'] = array();
 
	  foreach(Masterheader::$backgroundOptions as $key => $choice ) {
	    $field['choices'][ $key ] = $choice;
	  }
	 
	  return $field;
	}
 
}