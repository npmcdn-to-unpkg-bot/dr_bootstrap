<?php
/**
 * Options
 */

// Debug Mode (Not really used)
define('DEBUG', false);

// Clear widget cache
define('WIDGET_CACHE_CLEAR', true);

// Widget cache length (Currently set for 10 minutes)
define('WIDGET_CACHE_EXPIRATION', 60 * 10);

// Enable/Disable page attribute template selector
define('DISABLE_TEMPLATE_SELECTOR', false);

// This is required for locking widgets to templates
define('CUSTOM_WIDGETS_FIELD_KEY', 'field_227');

// Transient key store id
define('TRANSIENT_KEY_STORE_ID', 'transient_key_store');

/* -----------------------------------------------------------------------------
  Don't Edit Below This Line
----------------------------------------------------------------------------- */

// Load required files
require_once 'library/digitalriver.php';
require_once 'library/admin.php';

// Bootstrap the site
digitalriver_ahoy();
digitalriver_register_acf_types();
digitalriver_load_acf_fields();

// Include required files
require_once 'php/classes/posts_widget.php';
require_once 'php/custom_post_types.php';
require_once 'php/template_options.php';
require_once 'php/classes/widgets.php';
require_once 'php/shortcodes.php';
require_once 'php/sidebars.php';
require_once 'php/widgets.php';
require_once 'php/walkers.php';
require_once 'php/utility.php';
require_once 'php/layout.php';
require_once 'php/menus.php';
require_once 'php/posts.php';

/**
 * Initialize Widgets Class
 */
Widgets::init(trailingslashit(get_template_directory()));





/**
 * Queues up the theme styles
 */
function theme_styles() {


    $resourcesTemplate = is_page_template("templates/template-resources.php");
    $clientsTemplate = is_page_template("templates/template-clients2.php");
    $templateA = is_page_template("templates/template-a-new.php");
    $homePage = is_front_page();
    $templatePayments = is_page_template("templates/template-payments.php");
    $templateCrossborder = is_page_template("templates/template-crossborder.php");
    $templateInteractive = is_page_template("templates/template-interactive.php");
    $mainTemplate = is_page_template("templates/template-twocolumns.php");
    $contactTemplate = is_page_template("templates/template-contact.php");
    $cbiTemplate = is_page_template("templates/template-CBI-2.php");
    $clientSuccessTemplate = is_page_template("templates/template-marketingmaterial.php");
    $valueBriefTemplate = is_page_template("templates/template-marketingmaterial-vb.php");
    $newTemplateSidebar = is_page_template("templates/template-sidebar.php");
    $caasTemplate = is_page_template("templates/caas-template.php");
    $gamingTemplate = is_page_template("templates/template-gaming.php");


    wp_register_style('reset', get_stylesheet_directory_uri() . '/css/reset.css', array(), 1, $media = 'all');
    wp_register_style('1140', get_stylesheet_directory_uri() . '/css/1140.css', array(), 1, $media = 'all');
    // wp_register_style('flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), '1', $media = 'all');
    wp_register_style('fonts', "http://fast.fonts.net/cssapi/e751fdd6-8b91-4eb8-bf68-ce897a01e3b8.css", array(), '1', $media = 'all');
    wp_register_style('icons', "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css", array(), '1', $media = 'all');
    wp_register_style('global', get_stylesheet_directory_uri() . '/css/global.css?ver=34', array(), '1', $media = 'all');
    wp_register_style('owl_carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css', array(), '1', $media = 'all');
    wp_register_style('owl_theme', get_stylesheet_directory_uri() . '/css/owl.theme.css', array(), '1', $media = 'all');
    wp_register_style('modular-interactions', get_stylesheet_directory_uri() . '/css/modular_interactions.css', array(), '1', $media = 'all');
    wp_register_style('clients_style', get_stylesheet_directory_uri() . '/css/clients_style.css', array('owl_carousel','owl_theme'), '1', $media = 'all');
    wp_register_style('events_style', get_stylesheet_directory_uri() . '/css/events.css', array(), '1', $media = 'all');
    wp_register_style('new_global', get_stylesheet_directory_uri() . '/css/newGlobal.css?ver=34', array(), '1', $media = 'all');
    wp_register_style('grid', get_stylesheet_directory_uri() . '/css/grid.css', array(), '1', $media = 'all');
    wp_register_style('selectBox', get_stylesheet_directory_uri() . '/css/cs-select.css', array(), '1', $media = 'all');
    wp_register_style('selectBox_styling', get_stylesheet_directory_uri() . '/css/cs-skin-elastic.css', array('selectBox'), '1', $media = 'all');
    wp_register_style('crossborder_style', get_stylesheet_directory_uri() . '/css/crossborder-styles.css', array('new_global', 'grid', 'selectBox_styling'), '1', $media = 'all');
    wp_register_style('interactive_style_1', get_stylesheet_directory_uri() . '/css/interactive/drwpStyles.css', array('fonts','new_global','icons'), '1', $media = 'all');
    wp_register_style('interactive_style_2', get_stylesheet_directory_uri() . '/css/interactive/interactiveMap.css', array('fonts','new_global','icons','interactive_style_1'), '1', $media = 'all');
    wp_register_style('payments_style', get_stylesheet_directory_uri() . '/css/payments.css?54', array('new_global','grid', 'owl_carousel','owl_theme'), '1', $media = 'all');
    wp_register_style('template_a', get_stylesheet_directory_uri() . '/css/template_a.css', array(), '1', $media = 'all');
    wp_register_style('home', get_stylesheet_directory_uri() . '/css/home.css', array('owl_carousel','owl_theme','global'), '1', $media = 'all');
    wp_register_style('new-home', get_stylesheet_directory_uri() . '/css/newHome.css?2433342', array('owl_carousel','owl_theme','new_global'), '1', $media = 'all');
    wp_register_style('client-success-styles', get_stylesheet_directory_uri() . '/css/client_success_stories_styles.css', array('grid', "new_global"), '1', $media = 'all');
    wp_register_style('value-brief-styles', get_stylesheet_directory_uri() . '/css/value_brief_styles.css', array('grid', "new_global"), '1', $media = 'all');
    wp_register_style('japanese_styles', get_stylesheet_directory_uri() . '/css/japanese.css', array("new_global"), '143', $media = 'all');
    wp_register_style('caas_styles', get_stylesheet_directory_uri() . '/css/caas_styles.css', array(), '1', $media = 'all');
    wp_register_style('gaming_styles', get_stylesheet_directory_uri() . '/css/gaming_styles.css', array(), '1', $media = 'all');

    //remove when integrated into global stylesheet
    wp_register_style('header_styles', get_stylesheet_directory_uri() . '/css/header_styles.css?ver=1', array(), '1', $media = 'all');


    wp_register_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '1', $media = 'all');



    wp_enqueue_style('fonts');
    wp_enqueue_style('1140');
    wp_enqueue_style('reset');
    wp_enqueue_style('global');

    //remove when integrated into global stylesheet
    wp_enqueue_style('header_styles');


    wp_enqueue_style('font_awesome');
    



	if($resourcesTemplate){
		wp_enqueue_style('modular-interactions');
	}else if($clientsTemplate){
        wp_enqueue_style('clients_style');
    }else if(is_page_template("templates/template-test.php") || is_page_template("templates/template-contact.php")  || is_page(11160) || $newTemplateSidebar){
        // wp_enqueue_style('events_style');
    }else if($templateA){
        wp_enqueue_style('template_a');
    }else if($homePage){
        wp_enqueue_style('new-home');
    }else if($templatePayments){
        wp_enqueue_style('payments_style');
    }else if($templateCrossborder){
        wp_enqueue_style('crossborder_style');
    }else if($templateInteractive){
        wp_enqueue_style('interactive_style_2');
    }else if($clientSuccessTemplate){
        wp_enqueue_style('client-success-styles');  
    }else if($valueBriefTemplate){
        wp_enqueue_style('value-brief-styles');  
    }else if($caasTemplate){
        wp_enqueue_style('payments_style');
        wp_enqueue_style('caas_styles');  
    }

    wp_enqueue_style('new_global');


    if(ICL_LANGUAGE_CODE == "ja"){
        wp_enqueue_style('japanese_styles');
    }

    if($gamingTemplate){
        wp_enqueue_style('gaming_styles');  
    }

}

add_action('wp_enqueue_scripts', 'theme_styles');



    add_action( 'admin_enqueue_scripts', 'load_admin_style' );
    function load_admin_style() {
        wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/custom-admin-style.css', false, '1.0.0' );
    }


/**
 * Queues up the theme scriptss
 */
function theme_scripts() {
    // Queue the scripts
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-accordion');
    wp_enqueue_script('jquery-effects-core');
    wp_enqueue_script('jquery-effects-slide');
    wp_enqueue_script('modernizer', get_stylesheet_directory_uri() . '/js/modernizer.js', array(), 1, false);
    wp_enqueue_script('console', get_stylesheet_directory_uri() . '/js/console-log.js', array(), 1, false);
    wp_enqueue_script('excanvas', get_stylesheet_directory_uri() . '/js/excanvas_src-min.js', array(), 1, false);
    wp_enqueue_script('flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), 1, true);
    wp_enqueue_script('flippy', get_stylesheet_directory_uri() . '/js/jquery.flippy-mod-min.js', array('jquery'), 1, true);
    wp_enqueue_script('grayscale', get_stylesheet_directory_uri() . '/js/grayscale.js', array('jquery'), 1, true);
    wp_enqueue_script('plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array('jquery'), 1, true);
    wp_enqueue_script('global', get_stylesheet_directory_uri() . '/js/global.js', array('jquery'), 1, true);
    wp_enqueue_script('owl', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), 1, true);

    if(is_page_template("templates/template-crossborder.php")){
        wp_enqueue_script('classie', get_stylesheet_directory_uri() . '/js/classie.js', array('jquery'), 1, true);
        wp_enqueue_script('selectFx', get_stylesheet_directory_uri() . '/js/selectFx.js', array('jquery'), 1, true);
        wp_enqueue_script('crossborder', get_stylesheet_directory_uri() . '/js/crossborder.js', array('jquery'), 1, true);
    }else if(is_front_page()){
		 wp_enqueue_script('owl', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), 1, true);
		 wp_enqueue_script('home_script', get_stylesheet_directory_uri() . '/js/home_script.js?233233', array('jquery'), 1, true);
	}else if(is_page_template("templates/template-clients2.php")){
        wp_enqueue_script('clients', get_stylesheet_directory_uri() . '/js/clients_script.js', array('jquery','owl','flexslider','vimeo'), 1, true);
    }else if(is_page_template("templates/template-gaming.php")){
        wp_enqueue_script('gaming', get_stylesheet_directory_uri() . '/js/gaming-script.js', array('jquery'), 1, true);
    }

    if(is_page_template("templates/template-clients2.php") || is_page_template("templates/template-why-dr.php") ||  is_page_template("templates/template-CBI.php") ||  is_page_template("templates/template-test.php") ){
        //wp_enqueue_script('vimeo', get_stylesheet_directory_uri() . '/js/jquery.vimeo.api.js', array('jquery'), 1, true);
    }

    if(is_page_template("templates/caas-template.php")){
        wp_enqueue_script('caas_script', get_stylesheet_directory_uri() . '/js/caas.js', array('jquery'), 1, true);
    }

}

add_action('wp_enqueue_scripts', 'theme_scripts');


/**
 * Generate sidebars and assign them to different templates
 */
$sidebars = array(
    'corporate_policies' => array(),
    'home' => array(
        'home_content' => array(
            'name' => 'Home Content',
            'dir' => 'home/primary',
        ),
        'home_widget_1' => array(
            'name' => 'Home Widget 1',
            'dir' => 'home',
        ),
        'home_widget_2' => array(
            'name' => 'Home Widget 2',
            'dir' => 'home',
        ),
        'home_widget_3' => array(
            'name' => 'Home Widget 3',
            'dir' => 'home',
        ),
    ),
    'template-a' => array(
        'template_a_flex' => array(
            'name' => 'Flex',
            'dir' => 'template_a/flex',
        ),
        'template_a_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
        'template_a_widget_1' => array(
            'name' => 'Widget 1',
            'dir' => 'template_a',
        ),
        'template_a_widget_2' => array(
            'name' => 'Widget 2',
            'dir' => 'template_a',
        ),
        'template_a_widget_3' => array(
            'name' => 'Widget 3',
            'dir' => 'template_a',
        ),
    ),
    'template-b' => array(
        'template_b_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
        'template_b_right_sidebar' => array(
            'name' => 'Right Sidebar',
            'dir' => 'right_sidebar',
        ),
    ),
    'template-test' => array(
        'template_test_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
        'template_test_right_sidebar' => array(
            'name' => 'Right Sidebar',
            'dir' => 'right_sidebar',
        ),
    ),
    'template-c' => array(
        'template_c_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
        'template_c_left_sidebar' => array(
            'name' => 'Left Sidebar',
            'dir' => 'left_sidebar',
        ),
    ),
    'template-d' => array(
        'template_d_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
    ),
    'template-e' => array(
        'template_e_hero' => array(
            'name' => 'Hero',
            'dir' => 'hero',
        ),
        'template_e_left_sidebar' => array(
            'name' => 'Left Sidebar',
            'dir' => 'left_sidebar',
        ),
        'template_e_right_sidebar' => array(
            'name' => 'Right Sidebar',
            'dir' => 'right_sidebar',
        ),
    ),
    'template-f' => array(
        'template_f_flex' => array(
            'name' => 'Flex',
            'dir' => 'template_f/flex',
        ),
        'template_f_widget_1' => array(
            'name' => 'Widget 1',
            'dir' => 'template_f',
        ),
        'template_f_widget_2' => array(
            'name' => 'Widget 2',
            'dir' => 'template_f/right_column',
        ),
    ),
    'template-g' => array(),
    'template-h' => array(
        'template_h_flex' => array(
            'name' => 'Flex',
            'dir'  => 'template_h',
        ),
    ),
    'template-i' => array(
        'template_i_widget_1' => array(
            'name' => 'Widget 1',
            'dir' => 'widget',
        ),
        'template_i_widget_2' => array(
            'name' => 'Widget 2',
            'dir' => 'widget',
        ),
        'template_i_widget_3' => array(
            'name' => 'Widget 3',
            'dir' => 'widget',
        ),
    ),
    'template-j' => array(
        'template_j_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
        'template_j_right_sidebar' => array(
            'name' => 'Right Sidebar',
            'dir' => 'right_sidebar',
        ),
    ),
    'template-k' => array(
        'template_k_content' => array(
            'name' => 'Content',
            'dir' => 'content',
        ),
        'template_k_right_sidebar' => array(
            'name' => 'Right Sidebar',
            'dir' => 'right_sidebar',
        ),
    ),
    'navigation' => array(
        'super_nav_con_1_col_1' => array(
            'name' => 'Container 1 - Column 1',
            'dir'  => 'super_nav',
        ),
        'super_nav_con_1_col_2' => array(
            'name' => 'Container 1 - Column 2',
            'dir'  => 'super_nav',
        ),
        'super_nav_con_1_col_3' => array(
            'name' => 'Container 1 - Column 3',
            'dir'  => 'super_nav',
        ),
        'super_nav_footer_con_1_col_2' => array(
            'name' => 'Container 1 - Footer - Column 2',
            'dir'  => 'super_nav/footer',
        ),
        'super_nav_footer_con_1_col_3' => array(
            'name' => 'Container 1 - Footer - Column 3',
            'dir'  => 'super_nav/footer',
        ),
        'super_nav_con_2_col_1' => array(
            'name' => 'Container 2 - Column 1',
            'dir'  => 'super_nav/industries',
        ),
        'super_nav_con_2_col_2' => array(
            'name' => 'Container 2 - Column 2',
            'dir'  => 'super_nav/industries',
        ),
        'super_nav_con_2_col_3' => array(
            'name' => 'Container 2 - Column 3',
            'dir'  => 'super_nav/industries',
        ),
        'super_nav_footer_con_2_col_2' => array(
            'name' => 'Container 2 - Footer - Column 2',
            'dir'  => 'super_nav/footer',
        ),
        'super_nav_footer_con_2_col_3' => array(
            'name' => 'Container 2 - Footer - Column 3',
            'dir'  => 'super_nav/footer',
        ),
        'super_nav_con_3_col_1' => array(
            'name' => 'Container 3 - Column 1',
            'dir'  => 'super_nav',
        ),
        'super_nav_con_3_col_2' => array(
            'name' => 'Container 3 - Column 2',
            'dir'  => 'super_nav',
        ),
        'super_nav_con_3_col_3' => array(
            'name' => 'Container 3 - Column 3',
            'dir'  => 'super_nav',
        ),
        'super_nav_footer_con_3_col_2' => array(
            'name' => 'Container 3 - Footer - Column 2',
            'dir'  => 'super_nav/footer',
        ),
        'super_nav_footer_con_3_col_3' => array(
            'name' => 'Container 3 - Footer - Column 3',
            'dir'  => 'super_nav/footer',
        ),
    ),
    'blog' => array(
        'blog_right_sidebar' => array(
            'name' => 'Right Sidebar',
            'dir' => 'right_sidebar',
        ),
    ),
);
Sidebars::init($sidebars);

/**
 * Get Top Parent Page IDa
 *
 * @param $post
 * @return mixed
 */
function get_top_parent_page_id($post) {
    if ($post->post_parent) {
        $ancestors = get_post_ancestors($post->ID);
        $root = count($ancestors)-1;
        $parent = $ancestors[$root];
    } else {
        $parent = $post->ID;
    }

    return $parent;
}

/**
 * Adds caching to the dynamic sidebars
 *
 * @param $name
 * @return mixed
 */
function dynamic_sidebar_cache($name) {
    // global $post;
    global $wp, $post, $_key_stash;
    $_key_stash = (is_array($_key_stash)) ? $_key_stash: array();
    $current_url = home_url(add_query_arg(array(),$wp->request));
    $salt = (isset($post->ID)) ? $post->ID: $current_url;

    // Cache settings
    $key    = md5($name . $salt);
    $expire = WIDGET_CACHE_EXPIRATION;

    // Store keys in global
    array_push($_key_stash, $key);

    // Clear cache
    if (WIDGET_CACHE_CLEAR) {
        delete_transient($key);
    }

    // Check if in cache, return results
    $cached = get_transient($key);
    if ($cached) {
        echo $cached;
    } else {
        // Capture sidebar contents
        ob_start();
        dynamic_sidebar($name);
        $sidebar = ob_get_contents();
        ob_end_clean();

        // Add to cache
        set_transient($key, $sidebar, $expire);

        echo $sidebar;
    }
}

function check_for_sidebar($name){
    // global $post;
    global $wp, $post, $_key_stash;
    $_key_stash = (is_array($_key_stash)) ? $_key_stash: array();
    $current_url = home_url(add_query_arg(array(),$wp->request));
    $salt = (isset($post->ID)) ? $post->ID: $current_url;

    // Cache settings
    $key    = md5($name . $salt);
    $expire = WIDGET_CACHE_EXPIRATION;

    // Store keys in global
    array_push($_key_stash, $key);

    // Clear cache
    if (WIDGET_CACHE_CLEAR) {
        delete_transient($key);
    }

    // Check if in cache, return results
    $cached = get_transient($key);
    if ($cached) {
        echo $cached;
    } else {
        // Capture sidebar contents
        ob_start();
        dynamic_sidebar($name);
        $sidebar = ob_get_contents();
        ob_end_clean();

        // Add to cache
        set_transient($key, $sidebar, $expire);
        if(strlen($sidebar) > 0){
            return true;
        }else{
            return false;
        }
    }
}

add_filter('post_limits', 'postsperpage');
function postsperpage($limits) {
    if (is_search()) {
        global $wp_query;
        $wp_query->query_vars['posts_per_page'] = '-1';
    }
    return $limits;
}

/*
 * Render content for Relevanssi excerpt. This will load custom fields!
 */
add_filter('relevanssi_excerpt_content', 'my_relevanssi_excerpt_content', 10, 3);
function my_relevanssi_excerpt_content($content, $post, $query) {
  //Fill in your custom field names here:
  $fields = array('drsi_index');
  foreach($fields as $field){
    //pay attention to $single (http://codex.wordpress.org/Function_Reference/get_post_meta)
    $field_value = get_post_meta($post->ID, $field, TRUE);
    $content .= ' '. ( is_array($field_value) ? implode(' ', $field_value) : $field_value );
  }
  return $content;
}

/**
 * Adds exception so old URL's will still work for posts
 *
 * @return void
 */
function post_rewrite_rule_exception() {
    // Press Release Rules
    add_rewrite_rule('([^/]+)', 'index.php?name=$matches[1]', 'bottom');
}
add_action('init', 'post_rewrite_rule_exception', 1);

/**
 * Filters out the [...] from the end of an excerpt
 *
 * @return void
 */
function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/**
 * Stores the transient items from the current page
 *
 * @return void
 */
function store_transient_cache_keys() {
    global $_key_stash;
    $_key_stash = (is_array($_key_stash)) ? $_key_stash: array();

    // Get the stored keys
    $key_store = get_option(TRANSIENT_KEY_STORE_ID);
    $stored_keys = (is_string($key_store) || is_bool($key_store) || is_array($key_store)) ? array(): unserialize(get_option(TRANSIENT_KEY_STORE_ID));
    if (!$stored_keys || is_null($stored_keys)) {
        $stored_keys = array();
    }
    $keys = array_unique(array_merge($stored_keys, $_key_stash));

    // Store the keys again
    update_option(TRANSIENT_KEY_STORE_ID, serialize($keys));
}
add_action('shutdown', 'store_transient_cache_keys');

/**
 * Delete all existing transient caches if all caches are cleared
 * This probably doesn't catch all cache clearing
 */
if (isset($_GET['w3tc_note']) && $_GET['w3tc_note'] == 'flush_all') {
    $key_store = get_option(TRANSIENT_KEY_STORE_ID);
    $stored_keys = (is_string($key_store) || is_bool($key_store) || is_array($key_store)) ? array(): unserialize(get_option(TRANSIENT_KEY_STORE_ID));
    foreach ($stored_keys as $key) {
        delete_transient($key);
    }
    update_option(TRANSIENT_KEY_STORE_ID, serialize(array()));
}

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
 function start_el(&$output, $item, $depth, $args) {
        global $wp_query;

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
        $class_names = $value = '';
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';
 
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
 
        if($depth != 0) {
            $description = $append = $prepend = "";
        }
	
		$item_output = $args->before;


		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .__(apply_filters( 'the_title', $item->title, $item->ID ));
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

        // echo "<pre>";
        // print_r($args);
        // echo "</pre>";


        if($depth == 0 && $args->theme_location == "main-menu"):
            $arrows = '<div class="menu-expand"><i class=" fa fa-caret-right"></i><i class=" fa fa-caret-down"></i></div>';
        else:
            $arrows = "";
        endif;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args ).$arrows.$after_output;
    }
}


load_theme_textdomain( 'digital-river', TEMPLATEPATH . '/languages' );




function fb_redirect_1() {
    global $pagenow;
     
    $current_user = wp_get_current_user();

    $allowed_roles = array('japanese_admin', 'chinese_admin', 'german_admin');
    
    $allowedPages = array('upload.php', 'media-new.php', 'tools.php');


    if(!in_array($pagenow , $allowedPages)){


        if( array_intersect($allowed_roles, $current_user->roles ) ) { 

            $lang;
  
            if($current_user->roles[0] == 'japanese_admin'){
                $lang = 'ja';
            }else if($current_user->roles[0] == 'chinese_admin'){
                $lang = 'zh-hans';
            }else{
                $lang = 'de';
            }
     

            if($pagenow == 'edit.php'){

                if($lang != ICL_LANGUAGE_CODE){
                    if(ICL_LANGUAGE_CODE != "en"){
                        if(!isset($_GET['post_type'])){
                            wp_redirect( admin_url('edit.php?lang='.$lang) );
                        }else{
                            wp_redirect( admin_url('edit.php?post_type='.$_GET['post_type'].'&lang='.$lang) );
                        }
                        exit();
                    }
                }

             }else if($pagenow == 'post.php'){

                if(isset($_GET['action'])){
                    if(($_GET['action']) == "edit"){
                        if($lang != ICL_LANGUAGE_CODE){
                            if(ICL_LANGUAGE_CODE != "en"){
                                wp_redirect( admin_url('post.php?post='.$_GET['post'].'&action=edit&lang='.$lang) );
                                exit();
                            }else{
                                remove_meta_box( 'submitdiv', get_post_type( $_GET['post'] ), 'normal' );
                            }
                        }
                    }
                }

            }else{

                if(ICL_LANGUAGE_CODE != $lang){
                    if ( function_exists('admin_url') ) {
                        wp_redirect( admin_url('/?lang='.$lang) );
                        exit();
                    } else {
                        wp_redirect( get_option('siteurl') . '/wp-admin/?lang='.$lang);
                        exit();
                    }
                }

            }
        }
    }
}



if ( is_admin() ){add_action( 'admin_menu', 'fb_redirect_1' );}



add_action( 'wp_footer', 'printLang' );
function printLang(){
    ?>
    <script >
        var lang = "<?php echo ICL_LANGUAGE_CODE; ?>";
    </script>
    <?php
}

add_action( 'wp_footer', 'renderRequestADemo' );
function renderRequestADemo(){
    global $post;
    if($post->ID == 11239){
        ?>

            <style>
 
.mktoButtonWrap{
    margin-left: 0 !important;
    margin-top: 15px !important;
}



.mktoButton {
    padding: 8px 12px 4px !important;
    margin: 0px;
    display: inline-block;
    color: #FFF !important;
    text-decoration: none;
    transition: all 200ms ease-out 0s;
    font-family: "DIN Next W01 Medium" !important;
    font-size: 1.35em !important;
    background: #00A7E1 !important;
    border: 2px solid #007EB5 !important;
    text-transform: uppercase;
    border-radius: 0px !important;
}

.mktoButton:hover{
    background-color: #007EB5;
}






#marketoFormContainer{font-family: Arial, sans-serif; }
#marketoFormContainer{margin-top: 20px !important;}

#marketoFormContainer * {
  -webkit-box-sizing:border-box !important;
     -moz-box-sizing:border-box !important;
          box-sizing:border-box !important;
}
#marketoFormContainer form {
  width:auto !important;
}
#marketoFormContainer .mktoForm fieldset {
  border:none !important;
  padding-right:0 !important;
}
#marketoFormContainer .mktoForm fieldset legend,
#marketoFormContainer .mktoForm .mktoOffset,
#marketoFormContainer .mktoForm .mktoGutter,
#marketoFormContainer .mktoForm .mktoRequiredField .mktoAsterix {
  display:none !important;
}
#marketoFormContainer .mktoForm input[type=text],
#marketoFormContainer .mktoForm input[type=url],
#marketoFormContainer .mktoForm input[type=email],
#marketoFormContainer .mktoForm input[type=tel],
#marketoFormContainer .mktoForm input[type=number],
#marketoFormContainer .mktoForm input[type=date],
#marketoFormContainer .mktoForm select.mktoField,
#marketoFormContainer .mktoForm textarea.mktoField {
  box-shadow:none !important;
  padding:10px 18px !important;
  border:1px solid #ababab !important;
  background-color:#ffffff !important;
  line-height:1.1em !important;
  font-size:16px;
  color:#222021 !important;
  width:100% !important;
  height: 50px;
  font-size: 14px;
  -webkit-border-radius:0 !important;
     -moz-border-radius:0 !important;
          border-radius:0 !important;
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}
#marketoFormContainer .mktoForm input:focus,
#marketoFormContainer .mktoForm select.mktoField:focus,
#marketoFormContainer .mktoForm textarea.mktoField:focus {
  border:1px solid #009ad7 !important;
  font-size: 14px;
  color:#009ad7 !important;
}

#marketoFormContainer .mktoForm input.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm select.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm textarea.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm div.mktoLogicalField.mktoInvalid.blur {
  border-color:#ea0f43 !important;
}
#marketoFormContainer .mktoForm label.mktoLabel {
  color:#ababab !important;
  width:auto !important;
  font-family: arial, Helvetica, sans-serif !important;
  font-size:14px;
  font-weight:normal !important;
  position:absolute !important;
  padding:0;
  top:18px;
  left:20px;
  background: #FFF;
}


#marketoFormContainer .mktoForm label.mktoLabel[for="Country"] {
    background: #FFF;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="State"] {
    background: #FFF none repeat scroll 0% 0%;
    width: 60px !important;
    height: 14px;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="Opted_In__c"] {
  top:12px;
  left:0;
  position:relative !important;
}

#marketoFormContainer .mktoForm input:focus ~ label.mktoLabel,
#marketoFormContainer .mktoForm select:focus ~ label.mktoLabel,
#marketoFormContainer .mktoForm textarea:focus ~ label.mktoLabel {
  opacity: 0.5;
  filter: alpha(opacity=50); /* IE8 */
}


#marketoFormContainer .mktoForm select:focus ~ label.mktoLabel{
    opacity: 0;
    filter: alpha(opacity=0); /* IE8 */
}

#marketoFormContainer .mktoForm .mktoFormCol,
#marketoFormContainer .mktoForm .mktoFieldWrap {
  float:none !important;
}
#marketoFormContainer .mktoForm .mktoFieldWrap {
  position:relative;
}
#marketoFormContainer .mktoForm fieldset .mktoFormRow {
  width:50% !important;
  float:left;
  clear:none;
}

#marketoFormContainer .mktoForm fieldset .mktoFormRow.full-width{
    width:100% !important;
}

.mktoRadioList, .mktoLogicalField {width: 100% !important; }



.mktoFormRow > .mktoFieldDescriptor > .mktoFieldWrap > .mktoEmailField {
  width: 100% !important;
  padding: 0 !important;
}
#marketoFormContainer .mktoButtonRow {
  width:100% !important;
}


#marketoFormContainer .mktoForm .mktoButtonWrap.mktoRound .mktoButton:hover {
  background-color:#009ad7 !important;
  color:#ffffff !important;
  -webkit-transition: all 0.2s;
          transition: all 0.2s;
}

.mktoLogicalField{margin: 15px 0 5px !important;}

 .mktoLogicalField label{
        color: #343438 !important;
    font-weight: normal !important;
    font-size: 14px;
    margin: 0 !important;
margin-left: 20px !important;
 }

.mktoRadioList .radio-wrapper{
    width: 50%;
    float: left;
    margin: 0 0 10px;
}

.mktoRadioList .radio-wrapper .mktoField{
    margin: 0 5px 0 0; 
}

#marketoFormContainer .mktoForm textarea.mktoField{
    padding-top: 16px !important;
    height: 175px;
}

.contact-us-header{font-size:3em; color: #343438;}

.mktoForm .mktoFormRow {
    width: 49%;
    float: left;
    clear: none;
}

.mktoForm .mktoFormRow:nth-child(2n){
    margin-right: 2%;
}


#Business_Unit__c{width: 100% !important;}


/* END Marketo Form Overrides
********************************/
@media handheld, only screen and (max-width: 1000px) {
    .overlay-wrapper{display: none !important;}
    .window-overlay {display: none !important;}
}




@media only screen and (max-height: 875px) {

    #marketoFormContainer .mktoForm textarea.mktoField {
      height: 130px;
    }

    #marketoFormContainer .mktoForm input[type="text"], #marketoFormContainer .mktoForm input[type="url"], #marketoFormContainer .mktoForm input[type="email"], #marketoFormContainer .mktoForm input[type="tel"], #marketoFormContainer .mktoForm input[type="number"], #marketoFormContainer .mktoForm input[type="date"], #marketoFormContainer .mktoForm select.mktoField{
      padding: 11px 18px !important;
      height: 43px;
    }

    #marketoFormContainer .mktoForm label.mktoLabel {
      top: 14px;
    }
}

@media only screen and (max-height: 775px) {
    .contact-us-header{font-size:1.75em; color: #343438;}
    #marketoFormContainer {margin-top: 10px !important;}
    #marketoFormContainer .mktoForm input[type="text"], #marketoFormContainer .mktoForm input[type="url"], #marketoFormContainer .mktoForm input[type="email"], #marketoFormContainer .mktoForm input[type="tel"], #marketoFormContainer .mktoForm input[type="number"], #marketoFormContainer .mktoForm input[type="date"], #marketoFormContainer .mktoForm select.mktoField {
      padding: 0px 8px !important;
        height: 35px;
    }
    #marketoFormContainer .mktoForm label.mktoLabel {top: 11px; left: 13px;}

    #marketoFormContainer .mktoForm textarea.mktoField {
        height: 80px;
        font-size: 1em;
    }
}

@media only screen and (max-height: 675px) {
  #marketoFormContainer .mktoForm fieldset .mktoFormRow {
    width: 50% !important;
  }

#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(2),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(4),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(6),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(8){
  padding-right:20px;
}
}

@media only screen and (max-height: 540px) {
    .overlay-wrapper{display: none !important;}
    .window-overlay {display: none !important;}
}

</style>
        <script>

       // MktoForms2.loadForm("//app-sj03.marketo.com", "348-QUY-258", 3498);


jQuery(document).ready(function ($) {

        MktoForms2.loadForm("//app-sj03.marketo.com", "348-QUY-258", 3498, function(form) {
           $("label[for=FirstName]").insertAfter("#FirstName");
            $("label[for=LastName]").insertAfter("#LastName");
            $("label[for=Email]").insertAfter("#Email");
            $("label[for=Title]").insertAfter("#Title");
            $("label[for=Company]").insertAfter("#Company");
            $("label[for=Country]").insertAfter("#Country");
            $("label[for=State]").insertAfter("#State");
            $("label[for=Business_Unit__c]").insertAfter("#Business_Unit__c");
            $("label[for=Tell_Us_More__c]").insertAfter("#Tell_Us_More__c");
            $("#mktoForm_3498").css({height:"inherit"});


        $("#Business_Unit__c").parent().parent().parent().css("margin","0px");


            $(".mktoRadioList").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");
            $(".mktoCheckboxList").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");
            $(".mktoHtmlText").parent(".mktoFieldWrap").parent(".mktoFormCol").parent(".mktoFormRow").remove();
            $("textarea.mktoField").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");
            $(".mktoLogicalField").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");

              $("input").blur(function() {
              if($(this).val()) {
              $(this).addClass("blur");
              } else {
                      $(this).siblings("label").show();
                    }
              });
              $("select").blur(function() {
              if($(this).val()) {
                  $(this).addClass("blur");
                  }
              });
              $("textarea").blur(function() {
              if($(this).val()) {
                  $(this).addClass("blur");
                  } else {
                      $(this).siblings("label").show();
                    }
              });

                $("input").on("keypress", function() {
                  if($(this).val() == '') {
                      $(this).siblings("label").hide();
                    }
                });
                $("select").on("keypress", function() {
                  if($(this).val() == '') {
                      $(this).siblings("label").hide();
                    }
                });
                $("textarea").on("keypress", function() {
                  if($(this).val() == '') {
                      $(this).siblings("label").hide();
                    }
                });

                $(document).on("change","#Business_Unit__c",function(){
               
                    if($(this).val() != ""){
                        $(this).addClass("selected");
                         $(this).siblings("label").hide();
                    }else{
                        $(this).removeClass("selected");
                         $(this).siblings("label").show();
                    }
                });

                $(document).on("change","#State",function(){
               
                    if($(this).val() != ""){
                        $(this).addClass("selected");
                         $(this).siblings("label").hide();
                    }else{
                        $(this).removeClass("selected");
                         $(this).siblings("label").show();
                    }
                });

                $("#Country").on("change",function(){
               
                    if($(this).val() != ""){
                        $(this).addClass("selected");
                         $(this).siblings("label").hide();
                    }else{
                        $(this).removeClass("selected");
                         $(this).siblings("label").show();
                    }
                });
                   
                $(".mktoRadioList").children("input").each(function(){
                    var newRadioWrapper = $('<div/>');
                    newRadioWrapper.addClass('radio-wrapper');
                    newRadioWrapper.appendTo('.mktoRadioList');
                    $this = $(this);
                    $thisId = $this.attr("id");
                    $this.appendTo(newRadioWrapper);
                    $("label[for='"+$thisId+"']").appendTo(newRadioWrapper);
                });


            })

});


        </script>
        <?php
    }
}



add_action( 'wp_footer', 'renderPartnerContactUs' );
function renderPartnerContactUs(){

    global $post;
    if($post->ID == 11200){
        ?>

    <style>
 
.mktoButtonWrap{
    margin-left: 0 !important;
    margin-top: 15px !important;
}



.mktoButton {
    padding: 8px 12px 4px !important;
    margin: 0px;
    display: inline-block;
    color: #FFF !important;
    text-decoration: none;
    transition: all 200ms ease-out 0s;
    font-family: "DIN Next W01 Medium" !important;
    font-size: 1.35em !important;
    background: #00A7E1 !important;
    border: 2px solid #007EB5 !important;
    text-transform: uppercase;
    border-radius: 0px !important;
}

.mktoButton:hover{
    background-color: #007EB5;
}






#marketoFormContainer{font-family: Arial, sans-serif; }
#marketoFormContainer{margin-top: 20px !important;}

#marketoFormContainer * {
  -webkit-box-sizing:border-box !important;
     -moz-box-sizing:border-box !important;
          box-sizing:border-box !important;
}
#marketoFormContainer form {
  width:auto !important;
}
#marketoFormContainer .mktoForm fieldset {
  border:none !important;
  padding-right:0 !important;
}
#marketoFormContainer .mktoForm fieldset legend,
#marketoFormContainer .mktoForm .mktoOffset,
#marketoFormContainer .mktoForm .mktoGutter,
#marketoFormContainer .mktoForm .mktoRequiredField .mktoAsterix {
  display:none !important;
}
#marketoFormContainer .mktoForm input[type=text],
#marketoFormContainer .mktoForm input[type=url],
#marketoFormContainer .mktoForm input[type=email],
#marketoFormContainer .mktoForm input[type=tel],
#marketoFormContainer .mktoForm input[type=number],
#marketoFormContainer .mktoForm input[type=date],
#marketoFormContainer .mktoForm select.mktoField,
#marketoFormContainer .mktoForm textarea.mktoField {
  box-shadow:none !important;
  padding:10px 18px !important;
  border:1px solid #ababab !important;
  background-color:#ffffff !important;
  line-height:1.1em !important;
  font-size:16px;
  color:#222021 !important;
  width:100% !important;
  height: 50px;
  font-size: 14px;
  -webkit-border-radius:0 !important;
     -moz-border-radius:0 !important;
          border-radius:0 !important;
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}
#marketoFormContainer .mktoForm input:focus,
#marketoFormContainer .mktoForm select.mktoField:focus,
#marketoFormContainer .mktoForm textarea.mktoField:focus {
  border:1px solid #009ad7 !important;
  font-size: 14px;
  color:#009ad7 !important;
}

#marketoFormContainer .mktoForm input.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm select.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm textarea.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm div.mktoLogicalField.mktoInvalid.blur {
  border-color:#ea0f43 !important;
}
#marketoFormContainer .mktoForm label.mktoLabel {
  color:#ababab !important;
  width:auto !important;
  font-family: arial, Helvetica, sans-serif !important;
  font-size:14px;
  font-weight:normal !important;
  position:absolute !important;
  padding:0;
  top:18px;
  left:20px;
  background: #FFF;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="Business_Unit__c"]{
    background: transparent !important;
}


#marketoFormContainer .mktoForm label.mktoLabel[for="Country"] {
    background: #FFF;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="State"] {
    background: #FFF none repeat scroll 0% 0%;
    width: 60px !important;
    height: 14px;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="Opted_In__c"] {
  top:12px;
  left:0;
  position:relative !important;
}

#marketoFormContainer .mktoForm input:focus ~ label.mktoLabel,
#marketoFormContainer .mktoForm select:focus ~ label.mktoLabel,
#marketoFormContainer .mktoForm textarea:focus ~ label.mktoLabel {
  opacity: 0.5;
  filter: alpha(opacity=50); /* IE8 */
}


#marketoFormContainer .mktoForm select:focus ~ label.mktoLabel{
    opacity: 0;
    filter: alpha(opacity=0); /* IE8 */
}

#marketoFormContainer .mktoForm .mktoFormCol,
#marketoFormContainer .mktoForm .mktoFieldWrap {
  float:none !important;
}
#marketoFormContainer .mktoForm .mktoFieldWrap {
  position:relative;
}
#marketoFormContainer .mktoForm fieldset .mktoFormRow {
  width:100% !important;
  float:left;
  clear:none;
}

#marketoFormContainer .mktoForm fieldset .mktoFormRow.full-width{
    width:100% !important;
}

.mktoRadioList, .mktoLogicalField {width: 100% !important; }



.mktoFormRow > .mktoFieldDescriptor > .mktoFieldWrap > .mktoEmailField {
  width: 100% !important;
  padding: 0 !important;
}
#marketoFormContainer .mktoButtonRow {
  width:100% !important;
}


#marketoFormContainer .mktoForm .mktoButtonWrap.mktoRound .mktoButton:hover {
  background-color:#009ad7 !important;
  color:#ffffff !important;
  -webkit-transition: all 0.2s;
          transition: all 0.2s;
}

#marketoFormContainer .mktoForm label.mktoLabel[for='Business_Unit__c']{
    clear: both;
    position: relative !important;
    top: inherit;
    left: inherit;
    color: #343438 !important;
    font-weight: normal !important;
    margin: 10px 0 5px;
}

.mktoLogicalField{margin: 15px 0 5px !important;}

 .mktoLogicalField label{
        color: #343438 !important;
    font-weight: bold !important;
    font-size: 14px;
    margin: 0 !important;
margin-left: 20px !important;
 }

.mktoRadioList .radio-wrapper{
    width: 50%;
    float: left;
    margin: 0 0 10px;
}

.mktoRadioList .radio-wrapper .mktoField{
    margin: 0 5px 0 0; 
}

#marketoFormContainer .mktoForm textarea.mktoField{
    padding-top: 16px !important;
    height: 175px;
}

.contact-us-header{font-size:3em; color: #343438;}

/* END Marketo Form Overrides
********************************/
@media handheld, only screen and (max-width: 1000px) {
    .overlay-wrapper{display: none !important;}
    .window-overlay {display: none !important;}
}




@media only screen and (max-height: 875px) {

    #marketoFormContainer .mktoForm textarea.mktoField {
      height: 130px;
    }

    #marketoFormContainer .mktoForm input[type="text"], #marketoFormContainer .mktoForm input[type="url"], #marketoFormContainer .mktoForm input[type="email"], #marketoFormContainer .mktoForm input[type="tel"], #marketoFormContainer .mktoForm input[type="number"], #marketoFormContainer .mktoForm input[type="date"], #marketoFormContainer .mktoForm select.mktoField{
      padding: 11px 18px !important;
      height: 43px;
    }

    #marketoFormContainer .mktoForm label.mktoLabel {
      top: 14px;
    }
}

@media only screen and (max-height: 775px) {
    .contact-us-header{font-size:1.75em; color: #343438;}
    #marketoFormContainer {margin-top: 10px !important;}
    #marketoFormContainer .mktoForm input[type="text"], #marketoFormContainer .mktoForm input[type="url"], #marketoFormContainer .mktoForm input[type="email"], #marketoFormContainer .mktoForm input[type="tel"], #marketoFormContainer .mktoForm input[type="number"], #marketoFormContainer .mktoForm input[type="date"], #marketoFormContainer .mktoForm select.mktoField {
      padding: 0px 8px !important;
        height: 35px;
    }
    #marketoFormContainer .mktoForm label.mktoLabel {top: 11px; left: 13px;}

    #marketoFormContainer .mktoForm textarea.mktoField {
        height: 80px;
        font-size: 1em;
    }
}

@media only screen and (max-height: 675px) {
  #marketoFormContainer .mktoForm fieldset .mktoFormRow {
    width: 50% !important;
  }

#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(2),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(4),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(6),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(8){
  padding-right:20px;
}
}

@media only screen and (max-height: 540px) {
    .overlay-wrapper{display: none !important;}
    .window-overlay {display: none !important;}
}

</style>

    <script>

     MktoForms2.loadForm("//app-sj03.marketo.com", "348-QUY-258", 2646);

     </script>
     <?php
     }

}




function testThis(){
    ?>
    <script>

     MktoForms2.loadForm("//app-sj03.marketo.com", "348-QUY-258", 1605);

     </script>
     <?php
}

function renderPersistContact(){


global $post;
$dontLoadPages = array(9730,10324,9971,10504,9955,10505, 10490);
if(!in_array($post->ID , $dontLoadPages)){

?>

<style>
 
.mktoButtonWrap{
    margin-left: 0 !important;
    margin-top: 15px !important;
}



.mktoButton {
    padding: 8px 12px 4px !important;
    margin: 0px;
    display: inline-block;
    color: #FFF !important;
    text-decoration: none;
    transition: all 200ms ease-out 0s;
    font-family: "DIN Next W01 Medium" !important;
    font-size: 1.35em !important;
    background: #00A7E1 !important;
    border: 2px solid #007EB5 !important;
    text-transform: uppercase;
    border-radius: 0px !important;
}

.mktoButton:hover{
    background-color: #007EB5;
}


#marketoFormContainer{font-family: Arial, sans-serif; }
#marketoFormContainer{margin-top: 20px !important;}

#marketoFormContainer * {
  -webkit-box-sizing:border-box !important;
     -moz-box-sizing:border-box !important;
          box-sizing:border-box !important;
}
#marketoFormContainer form {
  width:auto !important;
}
#marketoFormContainer .mktoForm fieldset {
  border:none !important;
  padding-right:0 !important;
}
#marketoFormContainer .mktoForm fieldset legend,
#marketoFormContainer .mktoForm .mktoOffset,
#marketoFormContainer .mktoForm .mktoGutter,
#marketoFormContainer .mktoForm .mktoRequiredField .mktoAsterix {
  display:none !important;
}
#marketoFormContainer .mktoForm input[type=text],
#marketoFormContainer .mktoForm input[type=url],
#marketoFormContainer .mktoForm input[type=email],
#marketoFormContainer .mktoForm input[type=tel],
#marketoFormContainer .mktoForm input[type=number],
#marketoFormContainer .mktoForm input[type=date],
#marketoFormContainer .mktoForm select.mktoField,
#marketoFormContainer .mktoForm textarea.mktoField {
  box-shadow:none !important;
  padding:10px 18px !important;
  border:1px solid #ababab !important;
  background-color:#ffffff !important;
  line-height:1.1em !important;
  font-size:16px;
  color:#222021 !important;
  width:100% !important;
  height: 50px;
  font-size: 14px;
  -webkit-border-radius:0 !important;
     -moz-border-radius:0 !important;
          border-radius:0 !important;
  -webkit-transition: all 0.3s;
          transition: all 0.3s;
}
#marketoFormContainer .mktoForm input:focus,
#marketoFormContainer .mktoForm select.mktoField:focus,
#marketoFormContainer .mktoForm textarea.mktoField:focus {
  border:1px solid #009ad7 !important;
  font-size: 14px;
  color:#009ad7 !important;
}

#marketoFormContainer .mktoForm input.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm select.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm textarea.mktoField.mktoInvalid.blur,
#marketoFormContainer .mktoForm div.mktoLogicalField.mktoInvalid.blur {
  border-color:#ea0f43 !important;
}
#marketoFormContainer .mktoForm label.mktoLabel {
  color:#ababab !important;
  width:auto !important;
  font-family: arial, Helvetica, sans-serif !important;
  font-size:14px;
  font-weight:normal !important;
  position:absolute !important;
  padding:0;
  top:18px;
  left:20px;
  background: #FFF;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="Business_Unit__c"]{
    background: transparent !important;
}


#marketoFormContainer .mktoForm label.mktoLabel[for="Country"] {
    background: #FFF;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="State"] {
    background: #FFF none repeat scroll 0% 0%;
    width: 60px !important;
    height: 14px;
}

#marketoFormContainer .mktoForm label.mktoLabel[for="Opted_In__c"] {
  top:12px;
  left:0;
  position:relative !important;
}

#marketoFormContainer .mktoForm input:focus ~ label.mktoLabel,
#marketoFormContainer .mktoForm select:focus ~ label.mktoLabel,
#marketoFormContainer .mktoForm textarea:focus ~ label.mktoLabel {
  opacity: 0.5;
  filter: alpha(opacity=50); /* IE8 */
}


#marketoFormContainer .mktoForm select:focus ~ label.mktoLabel{
    opacity: 0;
    filter: alpha(opacity=0); /* IE8 */
}

#marketoFormContainer .mktoForm .mktoFormCol,
#marketoFormContainer .mktoForm .mktoFieldWrap {
  float:none !important;
}
#marketoFormContainer .mktoForm .mktoFieldWrap {
  position:relative;
}
#marketoFormContainer .mktoForm fieldset .mktoFormRow {
  width:100% !important;
  float:left;
  clear:none;
}

#marketoFormContainer .mktoForm fieldset .mktoFormRow.full-width{
    width:100% !important;
}

.mktoRadioList, .mktoLogicalField {width: 100% !important; }



.mktoFormRow > .mktoFieldDescriptor > .mktoFieldWrap > .mktoEmailField {
  width: 100% !important;
  padding: 0 !important;
}
#marketoFormContainer .mktoButtonRow {
  width:100% !important;
}


#marketoFormContainer .mktoForm .mktoButtonWrap.mktoRound .mktoButton:hover {
  background-color:#009ad7 !important;
  color:#ffffff !important;
  -webkit-transition: all 0.2s;
          transition: all 0.2s;
}

#marketoFormContainer .mktoForm label.mktoLabel[for='Business_Unit__c']{
    clear: both;
    position: relative !important;
    top: inherit;
    left: inherit;
    color: #343438 !important;
    font-weight: normal !important;
    margin: 10px 0 5px;
}

.mktoLogicalField{margin: 15px 0 5px !important;}

 .mktoLogicalField label{
        color: #343438 !important;
    font-weight: normal !important;
    font-size: 14px;
    margin: 0 !important;
margin-left: 20px !important;
 }

.mktoRadioList .radio-wrapper{
    width: 50%;
    float: left;
    margin: 0 0 10px;
}

.mktoRadioList .radio-wrapper .mktoField{
    margin: 0 5px 0 0; 
}

#marketoFormContainer .mktoForm textarea.mktoField{
    padding-top: 16px !important;
    height: 175px;
}

.contact-us-header{font-size:3em; color: #343438;}

/* END Marketo Form Overrides
********************************/
@media handheld, only screen and (max-width: 1000px) {
    .overlay-wrapper{display: none !important;}
    .window-overlay {display: none !important;}
}




@media only screen and (max-height: 875px) {

    #marketoFormContainer .mktoForm textarea.mktoField {
      height: 130px;
    }

    #marketoFormContainer .mktoForm input[type="text"], #marketoFormContainer .mktoForm input[type="url"], #marketoFormContainer .mktoForm input[type="email"], #marketoFormContainer .mktoForm input[type="tel"], #marketoFormContainer .mktoForm input[type="number"], #marketoFormContainer .mktoForm input[type="date"], #marketoFormContainer .mktoForm select.mktoField{
      padding: 11px 18px !important;
      height: 43px;
    }

    #marketoFormContainer .mktoForm label.mktoLabel {
      top: 14px;
    }
}

@media only screen and (max-height: 775px) {
    .contact-us-header{font-size:1.75em; color: #343438;}
    #marketoFormContainer {margin-top: 10px !important;}
    #marketoFormContainer .mktoForm input[type="text"], #marketoFormContainer .mktoForm input[type="url"], #marketoFormContainer .mktoForm input[type="email"], #marketoFormContainer .mktoForm input[type="tel"], #marketoFormContainer .mktoForm input[type="number"], #marketoFormContainer .mktoForm input[type="date"], #marketoFormContainer .mktoForm select.mktoField {
      padding: 0px 8px !important;
        height: 35px;
    }
    #marketoFormContainer .mktoForm label.mktoLabel {top: 11px; left: 13px;}

    #marketoFormContainer .mktoForm textarea.mktoField {
        height: 80px;
        font-size: 1em;
    }
}

@media only screen and (max-height: 675px) {
  #marketoFormContainer .mktoForm fieldset .mktoFormRow {
    width: 50% !important;
  }

#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(2),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(4),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(6),
#marketoFormContainer .mktoForm fieldset .mktoFormRow:nth-child(8){
  padding-right:20px;
}
}

@media only screen and (max-height: 540px) {
    .overlay-wrapper{display: none !important;}
    .window-overlay {display: none !important;}
}

</style>


    <div class='window-overlay'></div>
    <div class='overlay-wrapper'>
        <div class='overlay'>
            <div class='call-to-action-tab'>
                <div class='icon-wrapper'>Contact Us</div>
            </div>
            <div class='collapse'>&times;</div>
            <div class='clear'></div>

            <div class='form-wrapper'>
                <div class='contact-us-header'>Contact Us</div>
                <div id="marketoFormContainer" style="margin: auto;">
                    <script src="//app-sj03.marketo.com/js/forms2/js/forms2.js"></script>
                    <form id="mktoForm_1605"></form>
                </div>
            </div>
        </div>
    </div>

    <script>
jQuery(document).ready(function ($) {
        
    $(".call-to-action-tab").on("click",toggleContactUs);
    $(".collapse").on("click",toggleContactUs);
    $(".window-overlay").on("click",toggleContactUs);

    function toggleContactUs(){
            $("#inner_wrapper").toggleClass("expanded");
            $(".overlay-wrapper").toggleClass("expanded");
            $(".call-to-action-tab").toggleClass("expanded");
            $(".window-overlay").toggleClass("expanded");
    }

        MktoForms2.loadForm("//app-sj03.marketo.com", "348-QUY-258", 1605, function(form) {
           $("label[for=FirstName]").insertAfter("#FirstName");
            $("label[for=LastName]").insertAfter("#LastName");
            $("label[for=Email]").insertAfter("#Email");
            $("label[for=Title]").insertAfter("#Title");
            $("label[for=Company]").insertAfter("#Company");
            $("label[for=Country]").insertAfter("#Country");
            $("label[for=State]").insertAfter("#State");
            $("label[for=Business_Unit__c]").insertAfter("#Business_Unit__c");
            $("label[for=Tell_Us_More__c]").insertAfter("#Tell_Us_More__c");
            $("#mktoForm_1605").css({height:"inherit"});


        $(".mktoRadioList").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");
        $(".mktoCheckboxList").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");
        $(".mktoHtmlText").parent(".mktoFieldWrap").parent(".mktoFormCol").parent(".mktoFormRow").remove();
        $("textarea.mktoField").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");
        $(".mktoLogicalField").parent(".mktoFieldWrap").parent(".mktoFieldDescriptor").parent(".mktoFormRow").addClass("full-width");

          $("input").blur(function() {
          if($(this).val()) {
          $(this).addClass("blur");
          } else {
                  $(this).siblings("label").show();
                }
          });
          $("select").blur(function() {
          if($(this).val()) {
              $(this).addClass("blur");
              }
          });
          $("textarea").blur(function() {
          if($(this).val()) {
              $(this).addClass("blur");
              } else {
                  $(this).siblings("label").show();
                }
          });

            $("input").on("keypress", function() {
              if($(this).val() == '') {
                  $(this).siblings("label").hide();
                }
            });
            $("select").on("keypress", function() {
              if($(this).val() == '') {
                  $(this).siblings("label").hide();
                }
            });
            $("textarea").on("keypress", function() {
              if($(this).val() == '') {
                  $(this).siblings("label").hide();
                }
            });

            $(document).on("change","#Partner_Channel__c",function(){
           
                if($(this).val() != ""){
                    $(this).addClass("selected");
                     $(this).siblings("label").hide();
                }else{
                    $(this).removeClass("selected");
                     $(this).siblings("label").show();
                }
            });

            $(document).on("change","#State",function(){
           
                if($(this).val() != ""){
                    $(this).addClass("selected");
                     $(this).siblings("label").hide();
                }else{
                    $(this).removeClass("selected");
                     $(this).siblings("label").show();
                }
            });

            $("#Country").on("change",function(){
           
                if($(this).val() != ""){
                    $(this).addClass("selected");
                     $(this).siblings("label").hide();
                }else{
                    $(this).removeClass("selected");
                     $(this).siblings("label").show();
                }
            });
               
            $(".mktoRadioList").children("input").each(function(){
                var newRadioWrapper = $('<div/>');
                newRadioWrapper.addClass('radio-wrapper');
                newRadioWrapper.appendTo('.mktoRadioList');
                $this = $(this);
                $thisId = $this.attr("id");
                $this.appendTo(newRadioWrapper);
                $("label[for='"+$thisId+"']").appendTo(newRadioWrapper);
            });



        });


});
    </script>



<?php
}

}