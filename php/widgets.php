<?php

class Custom_Widget extends WP_Widget {

  /**
   * Initializes the widget
   */
  public function __construct() {
    parent::WP_Widget(false, 'Custom Widget', 'description=Custom Widget');
  }

  /**
   * Displays the form
   * 
   * @param  array $instance
   * @return void
   */
  public function form($instance) {
    global $wpdb;

    $current = time();
    // Get post id even if we are using get or post
    $post_id = (isset($_GET['post'])) ? $_GET['post']: $_POST['post_id'];

    // Options
    $defaults = array(
      'widget_id' => __('', 'custom_widget'),
    );  
    $instance = wp_parse_args( (array) $instance, $defaults );

    // Get list of widgets
    $widget_list   = json_decode(get_field('widget_template_relationship', 'options'));
    $template_file = basename(get_post_meta($post_id, '_wp_page_template', TRUE), '.php');

    // Loop through widgets and find all allowed widgets
    $allowed_widgets = array();
    foreach ($widget_list as $name => $values) {
      $name = strtolower(str_replace(' ', '-', $name));
      if ($name === $template_file) {
        $fixed_values = array();
        foreach ($values as $value) {
          $fixed_values[] = strtolower(str_replace(' ', '_', $value));
        }
        $allowed_widgets = $fixed_values;
      }
    }

    // Get Custom Widgets from the database
    $prefix = $wpdb->base_prefix;
    $widget_results = $wpdb->get_results("
      SELECT `wp_posts`.`ID` AS `id`, `wp_posts`.`post_title` AS `title`, `wp_postmeta`.`meta_value` AS `value`
      FROM   `" . $prefix . "posts` AS `wp_posts`
      JOIN   `" . $prefix . "postmeta` AS `wp_postmeta`
        ON   `wp_postmeta`.`post_id` = `wp_posts`.`ID`
      WHERE  `wp_posts`.`post_type` = 'custom_widgets'
      AND    `wp_postmeta`.`meta_key` = 'widget'
      ORDER BY `wp_posts`.`ID` DESC
    ");
    
    // Get Widgets
    $widgets = array();
    foreach ($widget_results as $widget) {
      $machine_name = array_shift(unserialize($widget->value));

      // Check if allowed
      if (in_array($machine_name, $allowed_widgets)) {
        $widgets[$widget->id] = $widget->title;
      }
    }


    // Build dropdown
  ?>
    <p>
      <select name="<?php echo $this->get_field_name( 'widget_id' ); ?>" id="<?php echo $this->get_field_id( 'widget_id' ); ?>" style="width: 100%;">
        <option value="">-- Select --</option>
        <?php foreach ($widgets as $id => $title) : ?>
          <option value="<?php echo $id; ?>" <?php selected($instance['widget_id'], $id); ?>><?php echo $title; ?></option>
        <?php endforeach; ?>
      </select>
    </p>

    <?php if ($instance['widget_id'] != '') : ?>
      <a target="_blank" href="<?php echo get_edit_post_link($instance['widget_id']); ?>">Edit Widget</a>
    <?php endif; ?>
    <a target="_blank" href="<?php echo get_admin_url('', '/post-new.php?post_type=custom_widgets'); ?>">Create Widget</a>
  <?php
  }

  /**
   * Outputs the widget
   * 
   * @param  array $args
   * @param  array $instance
   * @return void
   */
  public function widget($args, $instance) {
    $template = get_current_template();

    // If not a page stop rendering
    if (!$template) {
      return false;
    }

    // Get template dir
    $dir = Sidebars::$sidebars[$template][$args['id']]['dir'];

    // If no fields exist stop rendering
    $fields = get_fields($instance['widget_id']);
    if (!$fields || !isset($fields['widget'])) { return false; }

    // Render the widgets
    foreach ($fields['widget'] as $widget) {
      echo Widgets::render($args, $widget, $dir);
    }
  }
}
register_widget('Custom_Widget');