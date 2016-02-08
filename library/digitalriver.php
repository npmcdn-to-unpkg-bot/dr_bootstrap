<?php

/**
 * Bootstraps the site
 * 
 * @return void
 */
function digitalriver_ahoy() {
    // Filters attachements with the URL
    add_filter('wp_get_attachment_url', 'set_url_scheme');

    // Adds functionality to enable shortcodes in text widget
    add_filter('widget_text', 'do_shortcode');

    // Register custom option pages
    if (function_exists("register_options_page")) {
        register_options_page('Relationships');
    }

/*    // Register the super navigation page
    if (function_exists('get_field')) {
        add_action('admin_menu', 'digitalriver_register_super_navigation_page');
    }*/

    // Add permissions to the editor role
    digitalriver_modify_editor_permissions();
}

/**
 * Loads the custom fields
 * 
 * @return void
 */
function digitalriver_load_acf_fields() {
    require_once 'custom-fields/template_b_options.php';
    require_once 'custom-fields/custom_widgets.php';
}

/**
 * Register custom Advanced Custom Field types
 * 
 * @return void
 */
function digitalriver_register_acf_types() {
    if (function_exists('register_field')) {
        register_field('Template_field', dirname(__File__) . '/fields/template.php');
        register_field('Categories_field', dirname(__File__) . '/fields/categories.php');
        register_field('Custom_Post_Types_field', dirname(__File__) . '/fields/custom_post_types.php');
        register_field('Widget_Template_Relationship_field', dirname(__File__) . '/fields/widget_template_relationship.php');
    }
}

/**
 * Registers the super navigation page
 * 
 * @return void
 */
/*function digitalriver_register_super_navigation_page() {
    $data = get_field('navigation_page', 'option');
    add_menu_page('Super Navigation', 'Super Navigation', 'edit_posts', '/post.php?post=' . $data->ID . '&action=edit', 'div', '', 30);
}*/

/**
 * Modifies the editors permissions so they can modify theme options
 * 
 * @return void
 */
function digitalriver_modify_editor_permissions() {
    $role_object = get_role( 'editor' );
    $role_object->add_cap( 'edit_theme_options' );
}