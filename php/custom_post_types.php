<?php
/**
 * Registers a custom widgets custom post type
 *
 * @return void
 */
function custom_widgets_register() {
  register_post_type('custom_widgets', array(
    'labels' => array(
      'name' => __('Custom Widgets'),
      'singular_name' => __('Custom Widget'),
    ),
    'public' => false,
    'show_ui' => true,
    'has_archive' => false,
    'exclude_from_search' => true,
  ));
}
add_action('init', 'custom_widgets_register');

/**
 * Register press release post type
 *
 * @return void
 */
function press_release_post_type() {
    // Register the post type
    register_post_type('press_release', array(
        'labels' => array(
            'name' => __('Press Releases'),
            'singular_name' => __('Press Release'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'our-company/newsroom/press-release', 'with_front' => false),
    ));

    // Press Release Categories
    register_taxonomy('pr_category', 'press_release', array(
        'labels' => array(
            'name' => __('Categories'),
            'singular_name' => __('Category'),
        ),
        'hierarchical' => true,
    ));

    // Press Release Tags
    register_taxonomy('pr_tag', 'press_release', array(
        'labels' => array(
            'name' => __('Tags'),
            'singular_name' => __('Tag'),
        ),
        'hierarchical' => false,
    ));
}
add_action('init', 'press_release_post_type');

/**
 * Register press release post type
 *
 * @return void
 */
function event_post_type() {
    // Register the post type
    register_post_type('events', array(
        'labels' => array(
            'name' => __('Events'),
            'singular_name' => __('Event'),
        ),
        'public' => false,
        'show_ui' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'events', 'with_front' => false),
    ));

    // Press Release Categories
    register_taxonomy('event_category', 'events', array(
        'labels' => array(
            'name' => __('Categories'),
            'singular_name' => __('Category'),
        ),
        'hierarchical' => true,
    ));

    // Press Release Tags
    register_taxonomy('event_tag', 'events', array(
        'labels' => array(
            'name' => __('Tags'),
            'singular_name' => __('Tag'),
        ),
        'hierarchical' => false,
    ));
}
add_action('init', 'event_post_type');

/**
 * Register press release post type
 *
 * @return void
 */
function media_coverage_post_type() {
    // Register the post type
    register_post_type('media_coverage', array(
        'labels' => array(
            'name' => __('Media Coverage'),
            'singular_name' => __('Media Coverage'),
        ),
        'public' => false,
        'show_ui' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'media-coverage', 'with_front' => false),
        'supports' => array('title'),
    ));
}
add_action('init', 'media_coverage_post_type');

/**
 * Generates a custom slug for custom post types
 * 
 * @param  string $path
 * @return string
 */
function get_relative_url_slug($path) {
  $relative_url = str_replace(home_url(), '', $path);
  return trim($relative_url, '/');
}

/**
 * Gets parent page of custom post type
 * 
 * @param  string $type
 * @return object
 */
function get_parent($type) {
  $relationships = get_field('post_detail_page_relationship', 'option');
  $parent = null;
  foreach ($relationships as $relationship) {
    if ($relationship['post_type'] === $type) {
      return $relationship['detail_page'];
    }
  }
}
