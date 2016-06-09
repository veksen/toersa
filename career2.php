<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>TOERSA Security Inc. - Career</title>


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
					<h1>Career</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="career">
		<div class="container">
			<div class="row">
				<div class="section-heading col-md-12">
					<h2>Security Guard</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="job-post">

					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="#" class="job-title"><h4>Security Guard, Bar/Nightclub</h4></a>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="career-btn">
							<a href="" data-toggle="modal" data-target="#myModal">Apply</a>
						</div>
					</div>

					<div class="job-subtitle col-md-12 col-sm-12 col-xs-12">
						<span>Ottawa,ON</span>
						<span>Security Guard</span>
					</div>
				
				</div>

				<div class="job-post">

					<div class="col-md-6 col-sm-6 col-xs-6">
						<a href="#" class="job-title"><h4>Security Guard, Special Events</h4></a>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="career-btn">
							<a href="" data-toggle="modal" data-target="#myModal">Apply</a>
						</div>
					</div>

					<div class="job-subtitle col-md-12 col-sm-12 col-xs-12">
						<span>Ottawa,ON</span>
						<span>Security Guard</span>
					</div>
				
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
	        <h4 class="modal-title">Apply</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="quote-form">
	      		<form id="apply_job" action="email-career.php" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<a href="#" class="application-link">
								<i class="fa fa-paperclip"></i>
								<span>Resume/CV</span>
								<input class="application-file-input" type="file" name="file" tabindex="-1">
							</a>
							<div class="bar">
								<span class="bar-fill"></span></span>
							</div>
							<div id="uploads" class="uploads">
							</div>
						</div>
						<div class="col-md-12">
							<input type="text" class="name" name="name" placeholder="Full Name" value="">
						</div>
						<div class="col-md-12">
							<input type="text" class="email" name="email" placeholder="Email address" value="">
						</div>
						<div class="col-md-12">
							<input type="tel" class="phone" name="phone" placeholder="Phone" value="">
						</div>
						<div class="col-md-12">
							<input type="text" class="currentCompany" name="currentCompany" placeholder="Current Company" value="">
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