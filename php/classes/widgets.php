<?php

class Widgets {
  
  public static $template_base_path;
  public static $field_template_path = 'templates/widgets/';

  /**
   * Initializes the class
   * 
   * @param  string $template_base_path
   * @return void
   */
  public static function init($template_base_path) {
    self::$template_base_path = $template_base_path . self::$field_template_path;
  }

  /**
   * Builds the template based on the field
   * 
   * @param  string $location
   * @param  array $field
   * @return string
   */
  public static function render($args, $widget, $dir = false) {
    // Find widget template
    $template_folders = array($dir, '');
    foreach ($template_folders as $folder) {
      $template_path = vsprintf(self::$template_base_path . '%s/%s.php', array($folder, $widget['acf_fc_layout']));
      if (file_exists($template_path)) {
        break;
      }
      $template_path = false;
    }

    // If template doesn't exist, return error
    if (!$template_path) {
      return (DEBUG) ? vsprintf("No template exists for the '%s' field.", array($widget['acf_fc_layout'])): ''; 
    }

    // Render template and return it
    ob_start();
    extract($widget);
    include($template_path);
    $template = ob_get_contents();
    ob_end_clean();

    return $template;
  }
}