<?php
/**
 * Template for the email sent via the contact form
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>

	<script type="text/javascript">
		var theme_dir = "<?php bloginfo('template_directory'); ?>";
	</script>

	<link rel="stylesheet" type="text/css"
		  href="<?php echo  get_template_directory_uri(); ?>/cf-contact-form-resources/css/reset.css"/>
	<link rel="stylesheet" type="text/css"
		  href="<?php echo  get_template_directory_uri(); ?>/cf-contact-form-resources/js/external/bootstrap/css/bootstrap.css"/>

	<style type="text/css">
			/* -----------------------------------------------------------------------------
				Contact Form.
			----------------------------------------------------------------------------- */
			/* -----------------------------------------------------------------------------
				Contact Form. Helpers.
			----------------------------------------------------------------------------- */
			/* -----------------------------------------------------------------------------
			  Contact Form. Headings.
			----------------------------------------------------------------------------- */
		h2 {
			border-bottom: 1px solid #CCCCCC !important;
			font-size: 1.7em;
			font-weight: normal;
			letter-spacing: -0.02em;
			line-height: 1.2em;
			margin-top: 1em;
			margin-bottom: 1em;
			padding-bottom: 8px;
		}

		h3 {
			font-size: 1.2em;
			font-weight: normal;
		}

			/* -----------------------------------------------------------------------------
			  Contact Form. Font.
			----------------------------------------------------------------------------- */
		body {
			font-family: Verdana sans-serif !important;
		}

		.main_content {
			background-color: #E6E6E6;
			background-image: -moz-linear-gradient(center top, #E6E6E6, lightBlue 25%, #FFFFFF);
			background-image: -webkit-linear-gradient(top, #E6E6E6, #FFFFFF);
			background-image: -ms-linear-gradient(top, #E6E6E6, #FFFFFF);
			filter: progid:DXImageTransform.Microsoft.gradient(GradientType = 0, startColorstr = '#E6E6E6', endColorstr = '#FFFFFF');
			background-image: -o-linear-gradient(top, #E6E6E6, #FFFFFF);
			background-image: linear-gradient(top, #E6E6E6, #FFFFFF);
			background-repeat: no-repeat;

			border: 1px solid gray;
			border-radius: 30px 30px 30px 30px;
			box-shadow: 1px 1px 15px #111111;
			margin: auto;
			margin-top: 3em;
			width: 50%;
		}

		.content_inner {
			padding-left: 2em;
			padding-right: 2em;
			padding-bottom: 2em;
		}

			/* -----------------------------------------------------------------------------
			  Contact Form. Images.
			----------------------------------------------------------------------------- */
		h2 img {
			margin-top: -0.1em;
		}

		table {
			width: 100%;
		}

		table th, table td {
			padding: 0.5em;
			text-align: left;
		}
		table th {
			width: 25%;
		}
	</style>
</head>

<body>
<div class="main_content">
	<div class="content_inner">
		<h2>
			<img src="<?php echo get_template_directory_uri(); ?>/cf-contact-form-resources/images/event.png"/>
			Contact Details
		</h2>

		<table>
			<tbody>
			<tr>
				<th>First Name:</th>
				<td><?php echo $_REQUEST['first_name'];?></td>
			</tr>
			<tr>
				<th>Last Name:</th>
				<td><?php echo $_REQUEST['last_name'];?></td>
			</tr>
			<tr>
				<th>Company:</th>
				<td><?php echo $_REQUEST['company'];?></td>
			</tr>
			<tr>
				<th>Title:</th>
				<td><?php echo $_REQUEST['job_title'];?></td>
			</tr>
			<tr>
				<th>Email:</th>
				<td><?php echo $_REQUEST['email'];?></td>
			</tr><tr>
				<th>Phone:</th>
				<td>
					<?php echo $_REQUEST['phone1'];?> - <?php echo $_REQUEST['phone2'];?>
					- <?php echo $_REQUEST['phone3'];?>
					- <?php echo $_REQUEST['phone4'];?>
				</td>
			</tr>

			</tbody>
		</table>

		<h2>
			<img src="<?php echo  get_template_directory_uri(); ?>/cf-contact-form-resources/images/event.png"/>
			Your Location
		</h2>

		<table>
			<tbody>
			<tr>
				<th>Address:</th>
				<td><?php echo $_REQUEST['address'];?></td>
			</tr>
			<tr>
				<th>Apt/Suite:</th>
				<td><?php echo $_REQUEST['apt_suite'];?></td>
			</tr>
			<tr>
				<th>City/Province:</th>
				<td><?php echo $_REQUEST['city_province'];?></td>
			</tr>
			<tr>
				<th>Country:</th>
				<td><?php echo $_REQUEST['country'];?></td>
			</tr>
			<tr>
				<th>State/Province:</th>
				<td><?php echo $_REQUEST['region'];?></td>
			</tr>
			<tr>
				<th>Postal Code:</th>
				<td><?php echo $_REQUEST['postal_code'];?></td>
			</tr>
			<tr>
				<th>Message:</th>
				<td><?php echo $_REQUEST['comments'];?></td>
			</tr>
			<tr>
				<td colspan="2"><?php echo ($_REQUEST['opt_in'] == 1) ? 'Opt-Int: Lorem Ipsum Opt-In' : ''; ?></td>
			</tr>
			</tbody>
		</table>

		<h2>
			<img src="<?php echo  get_template_directory_uri(); ?>/cf-contact-form-resources/images/review.png"/>
			Interested In
		</h2>

		<?php if ($_REQUEST['option1'] == 1 || $_REQUEST['option2'] == 1 || $_REQUEST['option3'] == 1) { ?>
		<div class="row-fluid">
			<?php echo ($_REQUEST['option1'] == 1) ? 'Option 1: Something' : ''; ?>
			<br/>
			<?php echo ($_REQUEST['option2'] == 1) ? 'Option 2: Something' : ''; ?>
			<br/>
			<?php echo ($_REQUEST['option3'] == 1) ? 'Option 3: Something' : ''; ?>
		</div>
		<?php } ?>
	</div>
</div>
</body>
</html>