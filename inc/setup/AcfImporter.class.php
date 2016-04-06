<?php

class AcfGroup
{
	public $key;
	public $title;
	public $fields;
	public $location;
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


	function __construct($key, $title, $fields, $location, $options = array())
	{
		$this->key = $key;
		$this->title = $title;
		$this->fields = $fields;
		$this->location = $location;
		$this->options = array_merge($this->options, $options);
	}

    public static function create($key, $title, $fields, $location, $options = array()) {
        return new self($key, $title, $fields, $location, $options = array());
    }


	
	public function toArray()
	{
		return array_merge(
					array(
						'key' => $this->key,
						'title' => $this->title,
						'fields' => $this->fields,
						'location' => $this->location,
					),
					$this->options
				);
	}

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

    public static function create($param, $operator, $value) {
        return new self($param, $operator, $value);
    }

	public function toArray()
	{
		return array(
			"param" => $this->param,
			"operator" => $this->operator,
			"value" => $this->value
		);
	}
}


class AcfField
{

	public $key;
	public $label;
	public $type;
	public $name;

	public $options = array(
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
		$this->name = strtolower(str_replace(" ", "_", $this->label));
	}

    public static function create($key, $label, $type, $options = array()) {
        return new self($key, $label, $type, $options = array());
    }

	public function toArray()
	{
		return array_merge(
				array(
					'key' 	=> $this->key,
					'label' => $this->label,
					'name' 	=> $this->name,
					'type' 	=> $this->type,
				),
				$this->options
			);
	}

}