<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>TOERSA Security INC. - Lost Prevention</title>


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
					<h1>Lost Prevention</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="single-project">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="left-info">
						<h4>Lost Prevention</h4>
						<p>TOERSA Security offers numerous loss prevention services that fit your needs.
						 We operate a roster of fully qualified guard weither in uniforms or in plain cloths,
						  capable of working with both small or major retailers.</p>						
					</div>
					<div class="quote-btn">
						<a href="" data-toggle="modal" data-target="#myModal">Get a Quote</a>
					</div>
				</div>
				<div class="col-md-7">
					<div class="right-content">
						<div class="project-owl">
						    <div class="item">
						    	<img src="assets/images/lost_prevention.png" alt="" />
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Retail Lost Prevention</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Get a Quote - Lost Prevention</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="quote-form">
	      		<form id="quote_guard_services" action="quote-guard-services.php" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<input type="text" class="companyName" name="companyName" placeholder="Company Name" value="">
						</div>
						<div class="col-md-12">
							<label for="event type">Type of Service:</label>
							<select name="evenType">
							  <option value="Bar/NightClub">Bar/Nightclub</option>
							  <option value="Special Event">Site & Perimeter Security</option>
							  <option value="Special Event">24H Propertiy Surveillance</option>
							  <option value="Special Event">Access Management</option>
							  <option value="Special Event">Emergency Response</option>

							</select>
						</div>
						<div class="col-md-12">
							<input type="number" class="hours" name="hours" placeholder="Times of Operation" value="">
						</div>
						<div class="col-md-12">
							<label for="event type">Date of Service:</label>
							<input type="date" class="date" name="date" value="">
						</div>
						<div class="col-md-12">
							<input type="text" class="email" name="email" placeholder="Email address" value="">
						</div>
						<div class="col-md-12">
							<textarea id="note" class="note" name="note" placeholder="Addtional Information"></textarea>
						</div>
					</div>
				
	      	</div>
	      </div>
	      <div class="modal-footer">
	      	<button type="submit" class="btn btn-default">Submit</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>	
	    </div>

	  </div>
	</div>

	<?php require("footer.php"); ?>
</body>
</html>