<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Digital River Online Style Guide</title>
<link rel="shortcut icon" href="../../favicon.png">
<link rel='stylesheet' id='fonts-css'  href='/wp-content/themes/digital-river-translated/css/fonts/fonts.css?ver=1' type='text/css' media='all' />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./bs-docs.min.css">
<link rel='stylesheet' id='bootstrap-css-css' href='./docs.css' type='text/css' media='all' />
<link rel='stylesheet' id='dr-docs-css' href='./_bootstrap.css?ver=3.0.1' type='text/css' media='all' />
<style>
#logo svg { fill: #FFF; }
</style>
</head>
<body>
<?php 

include("./classes/ExampleController.class.php");
include("./classes/MethodController.class.php");

?>

<?php //include("../header.php"); ?>
<!-- style="padding:30px 0 0;" -->
<div class="blue-bg slide" >
	<div class="container">
			<div class="row">
			<?php
				/**
				 * @todo Colors, Fonts, Icons
				 *
				 */
				$exampleController = new ExampleController();
				$exampleController->displayMenu();
			?>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-md-offset-1">
			<?php

				$exampleController->displaySidebarMenu(true);
			?>
		</div>
		<div class="col-md-8 white-bg">
			<div class="row">
				<div class="col-md-9">
				<?php
					$methodController = new MethodController();
					$methodController->displayOverview();
					$methodController->displayParameters();
					$methodController->displayExample();
				?>
				</div>
			</div>
		</div>

	</div>
</div>

			
<?php //include("./footer.php"); ?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script src="./docs.js"></script>
</body>
</html>