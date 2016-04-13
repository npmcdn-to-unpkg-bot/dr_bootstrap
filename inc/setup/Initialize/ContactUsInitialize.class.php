<?php

/**
 * For displaying custom bricks
 *
 */
class ContactUsInit implements Initialize
{

	protected static $background_options_key = "field_570cf34a27c8c";

	public static $background_option_pre_html = '<div class="background-option"><div class="inner-background ';
	public static $background_option_post_html = ' "></div></div>';

	public static $backgroundOptions = array(
		'bg-lightBlue',
		'bg-blue',
		'bg-darkBlue',
		'bg-lightGreen',
		'bg-green',
		'bg-darkGreen',
		'bg-lightGray',
		'bg-gray',
		'bg-darkGray',
		'bg-lightOrange',
		'bg-orange',
		'bg-darkOrange',
		'bg-lightRed',
		'bg-red',
		'bg-darkRed',
		'bg-lightPurple',
		'bg-purple',
		'bg-darkPurple',
		'bg-lightYellow',
		'bg-yellow',
		'bg-darkYellow',
	);

	function __construct()
	{
		add_filter('acf/load_field/key='.self::$background_options_key, array(&$this, 'acf_load_background_options') );
	}

	function custom_css()
	{
		?>
		<style>
			.background-option{
				width:32%;
				overflow: hidden;
				border:solid 1px #CCC;
				padding:7px;
				background: #FFF;
				margin: 0 0 20px 1.33%;
				float: left;
			}

			.background-option .inner-background{
				width:100%;
				height:150px;
			}

			input:checked + .background-option{
				background-color: #333;
				position: relative;
			}

			input:checked + .background-option .inner-background::after{
			    content: "Selected";
			    position: absolute;
			    font-size: 2em;
			    top: 0;
			    left: 0;
			    text-align: center;
			    width: 100%;
			    margin: 70px 0 0;
			}

			.acf-field-radio[data-name="background_color"] input{
				display:none;
			}
		</style>
		<?php
	}

	public static function get_background_options()
	{
		$backgroundOptions = array();
		foreach (self::$backgroundOptions as $value) {
			$backgroundOptions[$value] = self::$background_option_pre_html.$value.self::$background_option_post_html;
		}

		return $backgroundOptions;
	}

	/**
	 *	Addeds all background options to the admin screen for Interactive Grid slides 
	 */
	function acf_load_background_options($field)
	{
		$this->custom_css();

		$field['choices'] = array();
		foreach(self::get_background_options() as $key => $choice ){
			$field['choices'][ $key ] = $choice;
		}

		return $field;
	}

	public function display() {}
}