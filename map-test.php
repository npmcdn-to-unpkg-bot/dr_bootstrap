<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>World Payments Map</title>
<link rel='stylesheet' id='reset-css'  href='http://digitalriver.staging.wpengine.com/wp-content/themes/digital-river-translated/css/reset.css?ver=1' type='text/css' media='all' />
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/5b754b48-1f51-4b99-8293-043692be6c0d.css"/>    
    <link type="text/css" rel="stylesheet" href="./css/drwpStyles.css"/> 
    <link type="text/css" rel="stylesheet" href="./css/interactiveMap.css"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<div class='drwp-wrapper overview'>

	<div class='featured-country'></div>
	<div class='country-list-wrapper' data-region="north-america">

		<div class='top-wrapper' id='top'>

			<div class='breadcrumb'>
				<div class="main-crumb">Map Overview</div>
				<div class='clear'></div>
			</div>

			<div class='heading'>Select A Region</div>
			<div class="resetContainer">
				<button class="resetCTA" id="reset"><i class="fa fa-repeat"></i> Start Over</button>
				</div>
			<div class='clear'></div>
		</div>

		<div class='country-wrapper'>

			<div class='world-wrapper'>
				<div class='region' data-region='northAmerica'><span>North America</span></div>
				<div class='region' data-region='southAmerica'><span>South America</span></div>
				<div class='region' data-region='europe'><span>Europe</span></div>
				<div class='region' data-region='africa'><span>Africa</span></div>
				<div class='region' data-region='asia'><span>Asia</span></div>
				<div class='region' data-region='apac'><span>Australia and Oceania</span></div>
				<div class='clear'></div>
			</div>

			<div class='region-wrapper' data-region="northAmerica">
				<div class='country' data-name='Canada' data-countryid='38'><span>Canada</span></div>
				<div class='country' data-name='United States'  data-countryid='228'><span>United States</span></div>
				<div class='country' data-name='Mexico'  data-countryid='140'><span>Mexico</span></div>
				<div class='country other-supported' data-name='Other Supported Countries' data-countryid='North America' ><span>Other Supported Countries</span></div>
				<div class='clear'></div>
			</div>

			<div class='region-wrapper' data-region="europe">
				<div class='country' data-name='United Kingdom' data-countryid='227' ><span>United Kingdom</span></div>
				<div class='country' data-name='Denmark' data-countryid='58' ><span>Denmark</span></div>
				<div class='country' data-name='Finland' data-countryid='72' ><span>Finland</span></div>
				<div class='country' data-name='Netherlands' data-countryid='152' ><span>Netherlands</span></div>
				<div class='country' data-name='Poland' data-countryid='172' ><span>Poland</span></div>
				<div class='country' data-name='Sweden' data-countryid='207' ><span>Sweden</span></div>
				<div class='country' data-name='Austria' data-countryid='14' ><span>Austria</span></div>
				<div class='country' data-name='Belgium' data-countryid='21' ><span>Belgium</span></div>
				<div class='country' data-name='Bulgaria' data-countryid='33' ><span>Bulgaria</span></div>
				<div class='country' data-name='Cyprus' data-countryid='56' ><span>Cyprus</span></div>
				<div class='country' data-name='Czech Republic' data-countryid='57' ><span>Czech Republic</span></div>
				<div class='country' data-name='Estonia' data-countryid='67' ><span>Estonia</span></div>
				<div class='country' data-name='France' data-countryid='73' ><span>France</span></div>
				<div class='country' data-name='Germany' data-countryid='80' ><span>Germany</span></div>
				<div class='country' data-name='Greece' data-countryid='83' ><span>Greece</span></div>
				<div class='country' data-name='Hungary' data-countryid='98' ><span>Hungary</span></div>
				<div class='country' data-name='Ireland' data-countryid='104' ><span>Ireland</span></div>
				<div class='country' data-name='Italy' data-countryid='106' ><span>Italy</span></div>
				<div class='country' data-name='Latvia' data-countryid='119' ><span>Latvia</span></div>
				<div class='country' data-name='Liechtenstein' data-countryid='124' ><span>Liechtenstein</span></div>
				<div class='country' data-name='Lithuania' data-countryid='125' ><span>Lithuania</span></div>
				<div class='country' data-name='Luxembourg' data-countryid='126' ><span>Luxembourg</span></div>
				<div class='country' data-name='Malta' data-countryid='134' ><span>Malta</span></div>
				<div class='country' data-name='Norway' data-countryid='162' ><span>Norway</span></div>
				<div class='country' data-name='Romania' data-countryid='177' ><span>Romania</span></div>
				<div class='country' data-name='Slovakia' data-countryid='196' ><span>Slovakia</span></div>
				<div class='country' data-name='Slovenia' data-countryid='197' ><span>Slovenia</span></div>
				<div class='country' data-name='Spain' data-countryid='201' ><span>Spain</span></div>
				<div class='country other-supported' data-name='Other Supported Countries' data-countryid='Europe' ><span>Other Supported Countries</span></div>
				<div class='clear'></div>
			</div>
	
			<div class='region-wrapper' data-region="asia">
				<div class='country' data-name='India' data-countryid='100' ><span>India</span></div>
				<div class='country other-supported' data-name='Other Supported Countries' data-countryid='Asia' ><span>Other Supported Countries</span></div>
				<div class='clear'></div>
			</div>

			<div class='region-wrapper' data-region="apac">
				<div class='country' data-name='Australia' data-countryid='13' ><span>Australia</span></div>
				<div class='country other-supported' data-name='Other Supported Countries' data-countryid='Asia Pacific' ><span>Other Supported Countries</span></div>
				<div class='clear'></div>
			</div>

			<div class='region-wrapper' data-region="southAmerica">
				<div class='country' data-name='Brazil' data-countryid='30' ><span>Brazil</span></div>
				<div class='country other-supported' data-name='Other Supported Countries' data-countryid='South America' ><span>Other Supported Countries</span></div>
				<div class='clear'></div>
			</div>

		</div>

	</div>
	<div class="map-wrapper-wrapper">
		<div class='map-wrapper'>
			<?php echo file_get_contents("world-map3.svg"); ?>
		</div>
	</div>
	<div class='overlay'></div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
<script src="./js/svg.js"></script> 
<script src="./js/interactiveMap.js"></script>
</body>
</html> 