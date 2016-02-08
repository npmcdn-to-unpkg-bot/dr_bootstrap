<?php
/*
 * Needed variable definitions.
 */

// Define plugin tables prefix.
global $wpdb;
$prefix = $wpdb->prefix . 'cf_' . 'contact_form';

// Adding functionality based on information received by the client. MODAL window functionality for the contact
// form, if necessary.
$is_modal = (!get_post_custom_values('is_modal')) ? array('FALSE',) : get_post_custom_values('is_modal');
$is_modal = strtoupper($is_modal[0]);

/*
 * Creating Table in DataBase if not exist.
 */
$table_name = $prefix;

if ($wpdb->get_var("show tables like `$table_name`") != $table_name) {
	$wpdb->query("CREATE TABLE `$table_name` (
				`id` INT NOT NULL auto_increment ,
				`first_name` VARCHAR (255) NOT NULL,
				`last_name` VARCHAR (255) NOT NULL,
				`company` VARCHAR (255) NOT NULL,
				`job_title` VARCHAR (255) NULL,
				`phone1` VARCHAR (1) NULL,
				`phone2` VARCHAR (3) NULL,
				`phone3` VARCHAR (3) NULL,
				`phone4` VARCHAR (4) NULL,
				`email` VARCHAR (100) NOT NULL,
				`address` VARCHAR (255) NULL,
				`apt_suite` VARCHAR (255) NULL,
				`city_province` VARCHAR (255) NULL,
				`country` VARCHAR (100) NOT NULL,
				`region` VARCHAR (100) NOT NULL,
				`postal_code` VARCHAR (100) NULL,
				`how_did` VARCHAR (500) NULL,
				`comments` VARCHAR (500) NULL,
				`opt_in` VARCHAR (10) NULL,
				`option1` VARCHAR (10) NULL,
				`option2` VARCHAR (10) NULL,
				`option3` VARCHAR (10) NULL,
				PRIMARY KEY  ( `id` )) DEFAULT CHARSET=utf8");
}

/*
 * Countries and regions values.
 */
$countries = array(
	'AL' => 'Albania',
	'DZ' => 'Algeria',
	'AS' => 'American Samoa',
	'AD' => 'Andorra',
	'AO' => 'Angola',
	'AI' => 'Anguilla',
	'AQ' => 'Antarctica',
	'AG' => 'Antigua and Barbuda',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AW' => 'Aruba',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'AZ' => 'Azerbaijan',
	'BS' => 'Bahamas',
	'BH' => 'Bahrain',
	'BD' => 'Bangladesh',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BJ' => 'Benin',
	'BM' => 'Bermuda',
	'BT' => 'Bhutan',
	'BO' => 'Bolivia',
	'BA' => 'Bosnia and Herzegovina',
	'BW' => 'Botswana',
	'BV' => 'Bouvet Island',
	'BR' => 'Brazil',
	'IO' => 'British Indian Ocean Territory',
	'VG' => 'British Virgin Islands',
	'BN' => 'Brunei',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'BI' => 'Burundi',
	'KH' => 'Cambodia',
	'CM' => 'Cameroon',
	'CA' => 'Canada',
	'CV' => 'Cape Verde',
	'KY' => 'Cayman Islands',
	'CF' => 'Central African Republic',
	'TD' => 'Chad',
	'CL' => 'Chile',
	'CN' => 'China',
	'CX' => 'Christmas Island',
	'CC' => 'Cocos Islands',
	'CO' => 'Colombia',
	'KM' => 'Comoros',
	'CG' => 'Congo',
	'CK' => 'Cook Islands',
	'CR' => 'Costa Rica',
	'HR' => 'Croatia',
	'CU' => 'Cuba',
	'CY' => 'Cyprus',
	'CZ' => 'Czech Republic',
	'DK' => 'Denmark',
	'DJ' => 'Djibouti',
	'DM' => 'Dominica',
	'DO' => 'Dominican Republic',
	'TP' => 'East Timor',
	'EC' => 'Ecuador',
	'EG' => 'Egypt',
	'SV' => 'El Salvador',
	'GQ' => 'Equatorial Guinea',
	'ER' => 'Eritrea',
	'EE' => 'Estonia',
	'ET' => 'Ethiopia',
	'FK' => 'Falkland Islands',
	'FO' => 'Faroe Islands',
	'FJ' => 'Fiji',
	'FI' => 'Finland',
	'FR' => 'France',
	'GF' => 'French Guiana',
	'PF' => 'French Polynesia',
	'TF' => 'French Southern Territories',
	'GA' => 'Gabon',
	'GM' => 'Gambia',
	'GE' => 'Georgia',
	'DE' => 'Germany',
	'GH' => 'Ghana',
	'GI' => 'Gibraltar',
	'GR' => 'Greece',
	'GL' => 'Greenland',
	'GD' => 'Grenada',
	'GP' => 'Guadeloupe',
	'GU' => 'Guam',
	'GT' => 'Guatemala',
	'GN' => 'Guinea',
	'GW' => 'Guinea-Bissau',
	'GY' => 'Guyana',
	'HT' => 'Haiti',
	'HM' => 'Heard and McDonald Islands',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungary',
	'IS' => 'Iceland',
	'IN' => 'India',
	'ID' => 'Indonesia',
	'IR' => 'Iran',
	'IQ' => 'Iraq',
	'IE' => 'Ireland',
	'IL' => 'Israel',
	'IT' => 'Italy',
	'CI' => 'Ivory Coast',
	'JM' => 'Jamaica',
	'JP' => 'Japan',
	'JO' => 'Jordan',
	'KZ' => 'Kazakhstan',
	'KE' => 'Kenya',
	'KI' => 'Kiribati',
	'KP' => 'Korea, North',
	'KR' => 'Korea, South',
	'KW' => 'Kuwait',
	'KG' => 'Kyrgyzstan',
	'LA' => 'Laos',
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LS' => 'Lesotho',
	'LR' => 'Liberia',
	'LY' => 'Libya',
	'LI' => 'Liechtenstein',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MO' => 'Macau',
	'MK' => 'Macedonia, Former Yugoslav Republic of',
	'MG' => 'Madagascar',
	'MW' => 'Malawi',
	'MY' => 'Malaysia',
	'MV' => 'Maldives',
	'ML' => 'Mali',
	'MT' => 'Malta',
	'MH' => 'Marshall Islands',
	'MQ' => 'Martinique',
	'MR' => 'Mauritania',
	'MU' => 'Mauritius',
	'YT' => 'Mayotte',
	'MX' => 'Mexico',
	'FM' => 'Micronesia, Federated States of',
	'MD' => 'Moldova',
	'MC' => 'Monaco',
	'MN' => 'Mongolia',
	'MS' => 'Montserrat',
	'MA' => 'Morocco',
	'MZ' => 'Mozambique',
	'MM' => 'Myanmar',
	'NA' => 'Namibia',
	'NR' => 'Nauru',
	'NP' => 'Nepal',
	'NL' => 'Netherlands',
	'AN' => 'Netherlands Antilles',
	'NC' => 'New Caledonia',
	'NZ' => 'New Zealand',
	'NI' => 'Nicaragua',
	'NE' => 'Niger',
	'NG' => 'Nigeria',
	'NU' => 'Niue',
	'NF' => 'Norfolk Island',
	'MP' => 'Northern Mariana Islands',
	'NO' => 'Norway',
	'OM' => 'Oman',
	'PK' => 'Pakistan',
	'PW' => 'Palau',
	'PA' => 'Panama',
	'PG' => 'Papua New Guinea',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PN' => 'Pitcairn Island',
	'PL' => 'Poland',
	'PT' => 'Portugal',
	'PR' => 'Puerto Rico',
	'QA' => 'Qatar',
	'RE' => 'Reunion',
	'RO' => 'Romania',
	'RU' => 'Russia',
	'RW' => 'Rwanda',
	'GS' => 'S. Georgia and S. Sandwich Isls.',
	'KN' => 'Saint Kitts &amp; Nevis',
	'LC' => 'Saint Lucia',
	'VC' => 'Saint Vincent and The Grenadines',
	'WS' => 'Samoa',
	'SM' => 'San Marino',
	'ST' => 'Sao Tome and Principe',
	'SA' => 'Saudi Arabia',
	'SN' => 'Senegal',
	'SC' => 'Seychelles',
	'SL' => 'Sierra Leone',
	'SG' => 'Singapore',
	'SK' => 'Slovakia',
	'SI' => 'Slovenia',
	'SO' => 'Somalia',
	'ZA' => 'South Africa',
	'ES' => 'Spain',
	'LK' => 'Sri Lanka',
	'SH' => 'St. Helena',
	'PM' => 'St. Pierre and Miquelon',
	'SD' => 'Sudan',
	'SR' => 'Suriname',
	'SJ' => 'Svalbard and Jan Mayen Islands',
	'SZ' => 'Swaziland',
	'SE' => 'Sweden',
	'CH' => 'Switzerland',
	'SY' => 'Syria',
	'TW' => 'Taiwan',
	'TJ' => 'Tajikistan',
	'TZ' => 'Tanzania',
	'TH' => 'Thailand',
	'TG' => 'Togo',
	'TK' => 'Tokelau',
	'TO' => 'Tonga',
	'TT' => 'Trinidad and Tobago',
	'TN' => 'Tunisia',
	'TR' => 'Turkey',
	'TM' => 'Turkmenistan',
	'TC' => 'Turks and Caicos Islands',
	'TV' => 'Tuvalu',
	'UG' => 'Uganda',
	'UA' => 'Ukraine',
	'AE' => 'United Arab Emirates',
	'UK' => 'United Kingdom',
	'US' => 'United States',
	'UM' => 'U.S. Minor Outlying Islands',
	'UY' => 'Uruguay',
	'UZ' => 'Uzbekistan',
	'VU' => 'Vanuatu',
	'VA' => 'Vatican City',
	'VE' => 'Venezuela',
	'VN' => 'Vietnam',
	'VI' => 'Virgin Islands',
	'WF' => 'Wallis and Futuna Islands',
	'EH' => 'Western Sahara',
	'YE' => 'Yemen',
	'YU' => 'Yugoslavia Former',
	'ZR' => 'Zaire',
	'ZM' => 'Zambia'
);
$regioncode_us = array(
	'AL' => 'AL-Alabama',
	'AK' => 'AK-Alaska',
	'AZ' => 'AZ-Arizona',
	'AR' => 'AR-Arkansas',
	'CA' => 'CA-California',
	'CO' => 'CO-Colorado',
	'CT' => 'CT-Connecticut',
	'DE' => 'DE-Delaware',
	'DC' => 'DC-District of Columbia',
	'FL' => 'FL-Florida',
	'GA' => 'GA-Georgia',
	'HI' => 'HI-Hawaii',
	'ID' => 'ID-Idaho',
	'IL' => 'IL-Illinois',
	'IN' => 'IN-Indiana',
	'IA' => 'IA-Iowa',
	'KS' => 'KS-Kansas',
	'KY' => 'KY-Kentucky',
	'LA' => 'LA-Louisiana',
	'ME' => 'ME-Maine',
	'MD' => 'MD-Maryland',
	'MA' => 'MA-Massachusetts',
	'MI' => 'MI-Michigan',
	'MN' => 'MN-Minnesota',
	'MS' => 'MS-Mississippi',
	'MO' => 'MO-Missouri',
	'MT' => 'MT-Montana',
	'NE' => 'NE-Nebraska',
	'NV' => 'NV-Nevada',
	'NH' => 'NH-New Hampshire',
	'NJ' => 'NJ-New Jersey',
	'NM' => 'NM-New Mexico',
	'NY' => 'NY-New York',
	'NC' => 'NC-North Carolina',
	'ND' => 'ND-North Dakota',
	'OH' => 'OH-Ohio',
	'OK' => 'OK-Oklahoma',
	'OR' => 'OR-Oregon',
	'PA' => 'PA-Pennsylvania',
	'RI' => 'RI-Rhode Island',
	'SC' => 'SC-South Carolina',
	'SD' => 'SD-South Dakota',
	'TN' => 'TN-Tennessee',
	'TX' => 'TX-Texas',
	'UT' => 'UT-Utah',
	'VT' => 'VT-Vermont',
	'VA' => 'VA-Virginia',
	'WA' => 'WA-Washington',
	'WV' => 'WV-West Virginia',
	'WI' => 'WI-Wisconsin',
	'WY' => 'WY-Wyoming');
$regioncode_ca = array(
	'BC' => 'BC-British Columbia',
	'AB' => 'AB-Alberta',
	'SK' => 'SK-Saskatchewan',
	'MB' => 'MB-Manitoba',
	'ON' => 'ON-Ontario',
	'QC' => 'QC-Quebec',
	'NB' => 'NB-New Brunswick',
	'NS' => 'NS-Nova Scotia',
	'PE' => 'PE-Prince Edward Island',
	'NL' => 'NL-Newfoundland and Labrador',
	'YT' => 'YT-Yukon',
	'NT' => 'NT-Northwest Territories',
	'NU' => 'NU-Nunavut');

// Obtain all locations array of Custom Field
$locations = get_post_custom_values('location');

$maps = array();
for ($i = 0; $i < count($locations); $i++) {
	$explode = preg_split('/\r\n|\r|\n/', $locations[$i]);
	$maps['location_'.$i]['address'] = $explode[0];
	for ($j = 1; $j < count($explode); $j++) {
		$maps['location_'.$i]['header'] .= $explode[$j] . '<br />';
	}
}

/*
 * Get the submitted fields and validates them.
 */
if ($_POST) {
	$error = "";

	/*
	 * Required Fields.
	 */
	// Field: First Name.
	if (!trim($_REQUEST['first_name'])) {
		$error .= "<p>Please enter your name</p>";
	}

	// Field: Last Name.
	if (!trim($_REQUEST['last_name'])) {
		$error .= "<p>Please enter your last name</p>";
	}

	// Field: Company.
	if (!trim($_REQUEST['company'])) {
		$error .= "<p>Please enter your company</p>";
	}

	// Field: Email.
	if (!filter_var(trim($_REQUEST['email']), FILTER_VALIDATE_EMAIL)) {
		$error .= "<p>Please enter your email</p>";
	}

	// Field: Country.
	if (!trim($_REQUEST['country'])) {
		$error .= "<p>Please enter your country</p>";
	}

	// Field: Region State.
	if (!trim($_REQUEST['region']) && ($_REQUEST['country'] == 'US' || $_REQUEST['country'] == 'UK')) {
		$error .= "<p>Please enter your region</p>";
	}

	if (!$error) {
		/*
		 * Insert contact in database if not errors.
		 */
		$wpdb->insert($prefix, array('first_name' => $_REQUEST['first_name'], 'last_name' => $_REQUEST['last_name'],
			'company' => $_REQUEST['company'], 'job_title' => $_REQUEST['job_title'],
			'phone1' => $_REQUEST['phone1'], 'phone2' => $_REQUEST['phone2'],
			'phone3' => $_REQUEST['phone3'], 'phone4' => $_REQUEST['phone4'],
			'email' => $_REQUEST['email'], 'address' => $_REQUEST['address'],
			'apt_suite' => $_REQUEST['apt_suite'], 'city_province' => $_REQUEST['city_province'],
			'country' => $_REQUEST['country'], 'region' => $_REQUEST['region'],
			'postal_code' => $_REQUEST['postal_code'], 'how_did' => $_REQUEST['how_did'],
			'comments' => $_REQUEST['comments'], 'opt_in' => $_REQUEST['opt_in'],
			'option1' => $_REQUEST['option1'], 'option2' => $_REQUEST['option2'],
			'option3' => $_REQUEST['option3']));

		/*
		 * Send an email to the support with the client inquiry.
		 * wp_mail( $to, $subject, $message, $headers, $attachments );
		 * http://codex.wordpress.org/Function_Reference/wp_mail
		 */
		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

		/*
		 * Get the variables to build the email message.
		 */
		$to = "gricks@olson.com";
		$subject = (!get_post_custom_values('subject')) ? array('Contact Form Inquiry',) : get_post_custom_values('subject');
		$headers = 'From:' . trim($_REQUEST['first_name']) . ' ' . trim($_REQUEST['last_name']) . '<' . trim($_REQUEST['email']) . '>' . "\r\n";

		ob_start();
		include ('template-cf-contact-email.php');
		$message = ob_get_clean();

		// Finally, send the email.
		if ( wp_mail($to[0], $subject[0], $message, $headers) ){
			$msg = array( 'msg' => 'Your message was sent.', 'type' => 'notification' );
		}else{
			$msg = array( 'msg' => 'The message couldn\'t be delivered.', 'type' => 'error' );
			$error = 'The message couldn\'t be delivered';
		}
	}
}