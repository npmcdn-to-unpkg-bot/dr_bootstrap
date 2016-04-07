<?php
/**
 *	Class for initializing the set up for dr.com
 *
 */
class GeneralInit implements Initialize
{
	public static $css_meta_key = "custom_css";
	public static $js_meta_key = "custom_js";

	function __construct()
	{
		add_action( 'admin_enqueue_scripts', array(&$this, 'custom_css_scripts') );
		add_action( 'add_meta_boxes', array(&$this, 'general_slide_meta_boxes') );
		add_action( 'save_post', array(&$this, 'save_general_html_value') );
 	}

	function general_slide_meta_boxes()
	{
		global $post;
		$slide_type = get_post_meta($post->ID, '_slide_type_value', true);

		if($slide_type == "general"){
	    	add_meta_box( 'general_custom_html',  __( 'HTML' ), array(&$this, 'render_html_metabox'), SlidesPostType::$post_type_name, 'normal');
	    	add_meta_box( 'general_custom_css',  __( 'Custom CSS' ), array(&$this, 'render_custom_css_metabox'), SlidesPostType::$post_type_name, 'normal');
	    	add_meta_box( 'general_custom_js',  __( 'Custom JS' ), array(&$this, 'render_custom_js_metabox'), SlidesPostType::$post_type_name, 'normal');
		}
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

		if(!isset($_POST['general_html_value']) || !isset($_POST['custom_css_value']) || !isset($_POST['custom_js_value'])){
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

		update_post_meta($post_id, "custom_css", $_POST['custom_css_value']);

		update_post_meta($post_id, self::$js_meta_key, $_POST['custom_js_value']);

	    add_action('save_post', array(&$this, 'save_general_html_value') );

	}

	function render_html_metabox()
	{
		global $post;
	    ?>
	    <div class="wrap">
            <div id="general_html_container">
                <div name="general_html" id="general_html" style="border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 100%; height: 400px; position: relative;"></div>
            </div>
 
            <textarea id="general_html_textarea" name="general_html_value" style="display: none;"><?php echo $post->post_content; ?></textarea>
	    </div>
	<?php
	}

	function render_custom_css_metabox()
	{
		global $post;
	    ?>
	    <div class="wrap">
            <div id="custom_css_container">
                <div name="custom_css" id="custom_css" style="border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 100%; height: 400px; position: relative;"></div>
            </div>
 
            <textarea id="custom_css_textarea" name="custom_css_value" style="display: none;"><?php echo get_post_meta($post->ID, "custom_css", true); ?></textarea>
	    </div>
	<?php
	}

	function render_custom_js_metabox()
	{
		global $post;
	    ?>
	    <div class="wrap">
            <div id="custom_js_container">
                <div name="custom_js" id="custom_js" style="border: 1px solid #DFDFDF; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; width: 100%; height: 400px; position: relative;"></div>
            </div>
 
            <textarea id="custom_js_textarea" name="custom_js_value" style="display: none;"><?php echo get_post_meta($post->ID, self::$js_meta_key, true);  ?></textarea>
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