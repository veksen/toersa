<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>TOERSA Security INC. - Close Protection</title>


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
					<h1>Close Protection</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="single-project">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="left-info">
						<h4>Close Protection</h4>
						<p>Toersa Security has one of Ottawa’s only Close Protection Divisions with a roster
						 of trained and experienced Close Protection Specialists. Our highly skilled Specialists
						 have provided protection for Celebrities, Athletes, Corporate Leaders, Diplomats, Royal Families,
						 and High profile individuals throughout Ontario.</p>

						 <p>Our specialist have no less than three years of close protection experience with most having
						  over 10 years of experience in the security field.</p>
					</div>
					<div class="quote-btn">
						<a href="" data-toggle="modal" data-target="#myModal">Get a Quote</a>
					</div> 
				</div>
				<div class="col-md-7">
					<div class="right-content">
						<div class="project-owl">
						    <div class="item">
						    	<img src="assets/images/close_protection.png" alt="" />
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Executives/VIP Protection</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					<p>
					</p>
				</div>
			</div>

			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Personal Protection</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					<p>
					</p>
				</div>
			</div>

			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Residential Protection</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					<p>
					</p>
				</div>
			</div>

			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Assets Protection</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					<p>
					</p>
				</div>
			</div>

			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Executive Drivers</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					<p>
					</p>
				</div>
			</div>

			<div class="row section-body">
				<div class="section-heading col-md-12">
					<h2>Security Risk Management</h2>
					<div class="line-dec"></div>	
				</div>
				<div class="section-body col-md-12">
					<p>
					</p>
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
	        <h4 class="modal-title">Get a Quote - Close Protection</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="quote-form">
	      		<form id="quote_close_protection" action="quote-close-protection.php" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<input type="text" class="companyName" name="companyName" placeholder="Company/Client Name" value="">
						</div>
						<div class="col-md-12">
							<label for="event type">Type of Service:</label>
							<select name="evenType">
							  <option value="Executives/VIP Protection">Executives/VIP Protection</option>
							  <option value="Personal Protection">Personal Protection</option>
							  <option value="Residential Protection">Residential Protection</option>
							  <option value="Assets Protection">Assets Protection</option>
							  <option value="Executive Drivers">Executive Drivers</option>
							  <option value="Security Risk Management">Security Risk Management</option>
							</select>
						</div>	
						<div class="col-md-12">
							<input type="number" class="principles" name="principles" placeholder="Number of Principles" value="">
						</div>
						<div class="col-md-12">
							<input type="number" class="hours" name="hours" placeholder="Lenght of Service" value="">
						</div>
						<div class="col-md-12">
							<input type="text" class="demographic" name="demographic" placeholder="Client Demographics" value="">
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