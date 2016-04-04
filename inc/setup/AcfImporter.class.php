<?php

class AcfGroup
{
	public $key;
	public $title;
	public $fields;
	public $location;

	function __construct($key, $title, $fields, $location, $options = array())
	{

	}

	public $options = array(
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => ''
	);

}

class AcfLocation
{

	public $param;
	public $operator;
	public $value;

	function __construct($param, $operator, $value)
	{
		$this->param = $param;
		$this->operator = $operator;
		$this->value = $value;
	}


}


class AcfField
{

	public $key;
	public $label;
	public $type;

	public $options = array(
		'name' => null,
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array (
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'maxlength' => '',
		'readonly' => 0,
		'disabled' => 0,
	);

	function __construct($key, $label, $type, $options = array())
	{

		$this->options = array_merge($this->options, $options);
		$this->key = $key;
		$this->label = $label;
		$this->type = $type;
	
	}

}


				