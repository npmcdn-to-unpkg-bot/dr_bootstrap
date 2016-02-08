<?php

class Sidebars {

  // Sidebars
  public static $sidebars = array();

  /**
   * Adds sidebars to a publicly available variable for later consumption
   * and generates the sidebars
   * 
   * @param  array $sidebars
   * @return void
   */
  public static function init($sidebars) {
    self::$sidebars = $sidebars;

    // Generate sidebars
    self::generate_sidebars($sidebars);
  }

  /**
   * Generates the sidebars for widgetized areas
   * 
   * @param  array $sidebars
   * @return void
   */
  protected static function generate_sidebars($sidebars) {
    // Check if function exists
    if (!function_exists('register_sidebar')) { die("The 'register_sidebar' function is required!"); }

    // Loop through sidebars and generate
    foreach ($sidebars as $template) {
      foreach ($template as $id => $data) {
        $result = register_sidebar(array(
          'name' => $data['name'],
          'id'   => $id,
          'before_widget' => '<div id="%1$s" class="widget-area %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h3 class="dropdown_arrow">',
          'after_title'   => '</h3>'
        ));
      }
    }
  }
}