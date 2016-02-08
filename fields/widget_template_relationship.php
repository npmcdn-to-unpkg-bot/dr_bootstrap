<?php
/**
 * This file is a heavily modified radio field button taken from the ACF plugin
 */
class Widget_Template_Relationship_field extends acf_Field
{

  protected $_custom_widget_title = 'Custom Widgets';
  
  function __construct($parent) {
    parent::__construct($parent);
    $this->parent = $parent;

    $this->name = 'widget_template_relationship';
    $this->title = __('Widget Template Relationship','acf');
  }

  /**
   * Creates relationship field
   * 
   * @param  string $field
   * @return string
   */
  function create_field($field) {
    // Find custom widget field group
    $field_groups = $this->parent->get_field_groups(array());
    $group = false;
    foreach ($field_groups as $field_group) {
      if ($field_group['title'] === $this->_custom_widget_title) {
        $group = $field_group;
        break;
      }
    }

    // Check if the group was found
    if (!$group) {
      echo 'No custom widgets group found.';
      return false;
    }

    // Get template data
    $widgets   = $group['fields'][0]['layouts'];
    $templates = $this->get_page_templates();

    // Display relationship container
    ob_start();
    require_once dirname(__FILE__) . '/templates/widget_template_relationship.php';
    $template = ob_get_contents();
    ob_end_clean();
    echo $template;
  }

  /**
   * Creates the field options
   * 
   * @param  string $key
   * @param  string $field
   * @return void
   */
  function create_options($key, $field) {
    ?>
    <tr class="field_option field_option_<?php echo $this->name; ?>">
      <td class="label">
        <label><?php _e("Instructions",'acf'); ?></label>
      </td>
      <td>
        <p><?php _e("Templates and Widgets will be dislayed in a drag and drop field.",'acf'); ?></p>
      </td>
    </tr>
    <?php
  }

  /**
   * Gets all page templates
   * 
   * @return array
   */
  protected function get_page_templates() {
    return array_values(wp_get_theme()->get_page_templates());
  }
}

?>