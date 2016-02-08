<?php

class Custom_Post_Types_field extends acf_Field
{

  /*--------------------------------------------------------------------------------------
  *
  *	Constructor
  *
  *	@author Elliot Condon
  *	@since 1.0.0
  *	@updated 2.2.0
  *
  *-------------------------------------------------------------------------------------*/

  function __construct($parent) {
    parent::__construct($parent);

    $this->name  = 'custom_post_types';
    $this->title = __("Custom Post Types",'acf');

    // filters (for all fields with choices)
    add_filter('acf_save_field-select', array($this, 'acf_save_field'));
    add_filter('acf_save_field-checkbox', array($this, 'acf_save_field'));
    add_filter('acf_save_field-radio', array($this, 'acf_save_field'));
  }



  /*--------------------------------------------------------------------------------------
  *
  *	create_field
  *
  *	@author Elliot Condon
  *	@since 2.0.5
  *	@updated 2.2.0
  *
  *-------------------------------------------------------------------------------------*/

  function create_field($field) {
    // Get custom post types
    $post_types = array();
    $ignore_type = array('acf', 'custom_widgets');
    $all_post_types = get_post_types(array('_builtin' => false));
    foreach ($all_post_types as $id => $type) {
      if (in_array($type, $ignore_type)) { continue; }
      $post_type_object = get_post_type_object($type);
      $post_types[$id] = $post_type_object->labels->name;
    }

    // vars
    $field = array_merge(array(
      'value'      => array(),
      'multiple'   => 0,
      'allow_null' => 0,
      'choices'    => $post_types,
      'optgroup'   => 0,
    ), $field);

    // no choices
    if(empty($field['choices'])) {
      echo '<p>' . __("No choices to choose from",'acf') . '</p>';
      return false;
    }

    // html
    echo '<select id="' . $field['id'] . '" class="' . $field['class'] . '" name="' . $field['name'] . '" >';

    // loop through values and add them as options
    foreach($field['choices'] as $key => $value) {
      $selected = '';
      if(is_array($field['value']) && in_array($key, $field['value'])) {
        // 2. If the value is an array (multiple select), loop through values and check if it is selected
        $selected = 'selected="selected"';
      } else {
        // 3. this is not a multiple select, just check normally
        if($key == $field['value']) {
          $selected = 'selected="selected"';
        }
      }
      echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
    }

    echo '</select>';
  }


  /*--------------------------------------------------------------------------------------
  *
  *	create_options
  *
  *	@author Elliot Condon
  *	@since 2.0.6
  *	@updated 2.2.0
  *
  *-------------------------------------------------------------------------------------*/

  function create_options($key, $field) {
    // vars
    $defaults = array(
      'multiple'		=>	0,
      'allow_null'	=>	0,
      'default_value' => '',
      'choices'		=>	'',
    );

    $field = array_merge($defaults, $field);


    // implode selects so they work in a textarea
    if(isset($field['choices']) && is_array($field['choices']))
    {
      foreach($field['choices'] as $choice_key => $choice_val)
      {
        $field['choices'][$choice_key] = $choice_key.' : '.$choice_val;
      }
      $field['choices'] = implode("\n", $field['choices']);
    }
    else
    {
      $field['choices'] = "";
    }

    ?>
  <tr class="field_option field_option_<?php echo $this->name; ?>">
    <td class="label">
      <label><?php _e("Allow Null?",'acf'); ?></label>
    </td>
    <td>
      <?php
      do_action('acf/create_field', array(
        'type'	=>	'radio',
        'name'	=>	'fields['.$key.'][allow_null]',
        'value'	=>	$field['allow_null'],
        'choices'	=>	array(
          1	=>	__("Yes",'acf'),
          0	=>	__("No",'acf'),
        ),
        'layout'	=>	'horizontal',
      ));
      ?>
    </td>
  </tr>
  <tr class="field_option field_option_<?php echo $this->name; ?>">
    <td class="label">
      <label><?php _e("Select multiple values?",'acf'); ?></label>
    </td>
    <td>
      <?php
      do_action('acf/create_field', array(
        'type'	=>	'radio',
        'name'	=>	'fields['.$key.'][multiple]',
        'value'	=>	$field['multiple'],
        'choices'	=>	array(
          1	=>	__("Yes",'acf'),
          0	=>	__("No",'acf'),
        ),
        'layout'	=>	'horizontal',
      ));
      ?>
    </td>
  </tr>

  <?php
  }


  /*--------------------------------------------------------------------------------------
  *
  *	pre_save_field
  *	- called just before saving the field to the database.
  *
  *	@author Elliot Condon
  *	@since 2.2.0
  *
  *-------------------------------------------------------------------------------------*/

  function acf_save_field( $field ) {
    return $field;
  }


  /*--------------------------------------------------------------------------------------
  *
  *	get_value_for_api
  *
  *	@author Elliot Condon
  *	@since 3.1.2
  *
  *-------------------------------------------------------------------------------------*/

  function get_value_for_api($post_id, $field) {
    $value = parent::get_value($post_id, $field);
    return (is_null($value)) ? false: $value;
  }
}