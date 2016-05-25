<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>TOERSA Security INC. - Contact Us</title>


	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/css/innovation.css">

	<link rel="stylesheet" href="assets/rs-plugin/css/settings.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<?php require("header.php"); ?>

	<div id="page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Get in touch</h1>
					<span>Post-ironic scenester four dollar toast</span>
				</div>
			</div>
		</div>
	</div>

	<section class="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="contact-form">
						<form id="contact_form" action="email.php" method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<input type="text" class="name" name="name" placeholder="First name" value="">
									<input type="text" class="email" name="email" placeholder="Email address" value="">
									<textarea id="note" class="note" name="note" placeholder="Write message"></textarea>
									<div class="accent-button">
										<button type="submit" id="submit-button">Send Message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="right-info">
						<h4>Contact information</h4>
						<div class="line-dec"></div>
						<p>To contact us, please leave us your name, email address and a quick message</p>
						<ul>
							<li><i class="fa fa-map-marker"></i>20C Cleopatra Drive, Ottawa, ON, K2G 0B3</li>
							<li><i class="fa fa-phone"></i>613-695-9371</li>
							<li><i class="fa fa-envelope"></i>info@toersa.com</li>
							<li><i class="fa fa-clock-o"></i>Mon - Fri : 10:00 - 18:00</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="map">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="map">
						<iframe width="100%" height="390" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=20%20Cleopatra%20Drive%2C%20Ottawa%2C%20ON%20K2G%200B3%2C%20Canada&amp;key=AIzaSyDFRBpurxMPVomfEV1Mn9ZsG7meLna28wk"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require("footer.php"); ?>
</body>
</html>
