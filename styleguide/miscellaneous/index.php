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
<link rel='stylesheet' id='dr-docs-css' href='../../bootstrap/assets/stylesheets/_bootstrap.css?ver=3.0.1' type='text/css' media='all' />
</head>
<body>
<?php include("../classes/CssController.class.php"); ?>

<?php include("../header.php"); ?>

<div class="container dr-docs-container">
	<div class="row">
		<div class="col-md-10">
			<?php

			$cssController = new CssController();


			?>
			<div class="dr-docs-section"><?php $cssController->displayTypography(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayCode(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayTables(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayForms(); ?></div>
			<div class="dr-docs-section"><?php $cssController->displayButtons(); ?></div>
		</div>
		<div class="col-md-2">
			<?php include("sidenav.php"); ?>
		</div>
	</div>
</div>

			
<?php include("../footer.php"); ?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script src="../docs.js"></script>
</body>
</html>