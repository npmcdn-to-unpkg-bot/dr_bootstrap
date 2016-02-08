<?php
/**
 * This file is a heavily modified radio field button taken from the ACF plugin
 */
class Template_field extends acf_Field
{
  
  function __construct($parent) {
    parent::__construct($parent);

    $this->name = 'template';
    $this->title = __('Templates','acf');
  }

  /**
   * Creates radio field with images
   * 
   * @param  string $field
   * @return string
   */
  function create_field($field) {
    // Get template files
    $files = scandir(get_template_directory() . '/templates');
    $templates = array();
    foreach ($files as $file) {
      if (!is_dir($file) && !in_array($file, array('.DS_Store', '.svn', 'widgets'))) {
        $templates[] = basename($file, '.php');
      }
    }

    // vars
    $defaults = array(
      'layout'    =>  'horizontal',
      'choices'   =>  array(),
    );
    $field = array_merge($defaults, $field);
    
    // This shouldn't happen but it's for just in case
    if(empty($templates)) {
      echo '<p>' . __("No choices to choose from",'acf') . '</p>';
      return false;
    }
    
    // Assembles the radio buttons for selecting a layout
    echo '<ul class="radio_list layout_radio_list ' . $field['class'] . ' ' . $field['layout'] . '">';
    foreach ($templates as $template) {
      $selected = ($field['value'] === $template) ? 'checked="checked" data-checked="checked"': '';

      // Might need to change this to use png or jpg, instead of gif
      $image_path = vsprintf('%s/templates/images/%s%s', array(get_template_directory_uri(), $template, '.png'));
      echo '<li><label><input id="' . $field['id'] . '-' . $template . '" type="radio" name="' . $field['name'] . '" value="' . $template . '" ' . $selected . ' /><img src="' . $image_path . '" style="width: 125px; height: 125px;"></label></li>';
    }
    echo '</ul>';
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
        <p><?php _e("Template will be autoloaded from the template directory and will be displayed as radio buttons.",'acf'); ?></p>
      </td>
    </tr>
    <?php
  }
}