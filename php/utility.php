<?php

/**
 * Get Image Path
 * 
 * @param  string $name
 * @return string
 */
function get_image_path($name) {
    return vsprintf('%s/img/%s',array(
        bloginfo('template_url'),
        $name,
    ));
}

/**
 * Get current template
 * 
 * @return string
 */
function get_current_template() {
    // Get page id for all pages and detail pages
    global $post;
    // $page_id = (isset($post->detail_id)) ? $post->detail_id: get_queried_object_id();
    $page_id = (isset($post->ID)) ? $post->ID: get_queried_object_id();

    return basename(get_page_template_slug($page_id), '.php');
}

/**
 * Get Category Slug
 *
 * @return string
 */
function get_cat_slug($cat_id) {
    $cat_id = (int) $cat_id;
    $category = &get_category($cat_id);
    return $category->slug;
}


/**
 *
 * Setting Modification for TinyMCE
 *
 */
function tinyMCEMods($in) {
     $in['remove_linebreaks']=false;
     $in['keep_styles']=true;
     $in['paste_remove_styles']=false;
     $in['paste_remove_spans']=false;
     $in['paste_strip_class_attributes']='none';
     $in['paste_text_use_dialog']=true;
     $in['valid_elements'] = '*[*]';
     $in['valid_children ']= '*[*]';
     //$in['extended_valid_elements '] .= '*[*]';
     return $in;
}
add_filter('tiny_mce_before_init', 'tinyMCEMods' );

/**
 * Changes the context for a sidebar
 *
 * return void
 */
function change_sidebar_context() {
    global $post, $wp_query, $dr_orig_wp_query, $dr_query_modified;
    $dr_orig_wp_query = $wp_query;

    // Get relationship field, if exists
    while(has_sub_field('relationship', 'option')) {
        if (get_sub_field('post_type') == $post->post_type) {
            $post = get_sub_field('detail_page');
            query_posts(array('p' => $post->ID));
            pw_filter_widgets(get_option('sidebars_widgets'));
            $dr_query_modified = true;
        }
    }
}

/**
 * Reverts modified sidebar context
 *
 * return void
 */
function revert_sidebar_context() {
    global $post, $wp_query, $dr_orig_wp_query, $dr_query_modified;
    if (isset($dr_query_modified) && $dr_query_modified) {
        $wp_query = $dr_orig_wp_query;
        query_posts($wp_query->query_vars);
    }
}

function posts_page_custom_template($template) {
    global $wp_query;
    #   find if a page_for_posts have been set.
    if( true == ( $posts_per_page_id = get_option('page_for_posts')) ){
        #   get the current page id.
        $page_id = $wp_query->get_queried_object_id();
        #   if the same page, get the correct template.
        if( $page_id == $posts_per_page_id ){
            #   get the current theme directory.
            $theme_directory = get_stylesheet_directory() ."/";
            #   get the page template
            $page_template   = get_post_meta($page_id, '_wp_page_template', true );
            #   by-pass the default template, allow wordpress to handle the fallback template.
            if( $page_template != 'default' ){
                #   find the template in the parent if the template is not a child template
                if( is_child_theme() && !file_exists($theme_directory . $page_template) ){
                    #   set to parent template directory 
                    $theme_directory = get_template_directory();
                }
                return $theme_directory . $page_template;
            }
        }
    }
    return $template;
}
add_filter('template_include', 'posts_page_custom_template');
