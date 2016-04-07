<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Digital River Online Style Guide</title>
<link rel="shortcut icon" href="../../favicon.png">
<link rel='stylesheet' id='fonts-css' href='../../fonts/font.css?ver=1' type='text/css' media='all' />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../bs-docs.min.css">
<link rel='stylesheet' id='bootstrap-css-css' href='../docs.css' type='text/css' media='all' />
<link rel='stylesheet' id='dr-docs-css' href='../../css/stylesheets/_bootstrap.css?ver=3.0.1' type='text/css' media='all' />
</head>
<body>
<?php include("../classes/CssController.class.php"); ?>

<?php include("./header.php"); ?>

<div class="container dr-docs-container">
	<div class="row">
		<div class="col-md-10">
		<?php
		/**
		 * @todo Colors, Fonts, Icons
		 *
		 */
		?>
			<?php $cssController = new CssController(); ?>
			<div class="dr-docs-section"><?php $cssController->displayTypography(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayColors(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayCode(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayExample(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayAlerts(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayTables(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayButtons(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayBreadcrumbs(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayPagination(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayPanels(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayTabs(); ?></div>

		</div>
		<div class="col-md-2">
			<?php include("sidenav.php"); ?>
		</div>
	</div>
</div>

			
<?php include("./footer.php"); ?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script src="./docs.js"></script>
<script>
var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"); 
//Function to convert hex format to a rgb color
function rgb2hex(rgb) {
 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
 return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}
function hex(x) {
  return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
 }

 $.each($('#dr-docs-colors .color'), function(){
	var color = $(this).parent().css('background-color');
	$(this).text(rgb2hex(color));
});
</script>
</body>
</html>