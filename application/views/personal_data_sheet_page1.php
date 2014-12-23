<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Page 1</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/global.css">
		<link rel="stylesheet" href="assets/css/personal_data_sheet_page1.css">
		<link rel="stylesheet" href="assets/css/vendor/tablesorter/themes/blue/style.css">
		<script type="text/javascript" src="assets/js/vendor/jquery-1.11.1.min.js"></script> 
		<script type="text/javascript" src="assets/js/vendor/tablesorter/jquery.tablesorter.min.js"></script> 
	</head>
	<body>
		<nav id="main_navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">DMMMMSU HRIS</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="#">PDS</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">
								<label for="open_settings_tab" class="tab-label"><span class="glyphicon glyphicon-cog"></span></label>
							</a>
						</li>
						<li><a href="#"><span class="glyphicon glyphicon-log-out"></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="main_container" class="container">
			<form action="/pds_forms/process_personal_info" method="post" role="form">
				<h1>Personal Data Sheet <small>Page(1 of 5)</small></h1>
				<h4>I. PERSONAL INFORMATION</h4>
				<label for="">Name</label>
				<div id="personal_information_top_container">
					<ul class="list-unstyled">
						<li><input type="text" name="surname" class="form-control" placeholder="Surname"></li>
						<li><input type="text" name="first_name" class="form-control" placeholder="First Name"></li>
						<li><input type="text" name="middle_name" class="form-control" placeholder="Middle Name"></li>
						<li><input type="text" name="name_extension" class="form-control" placeholder="Name extension (e.g. Jr, Sr)"></li>
					</ul>
				</div>
				<div id="bottom_information">
					<div id="personal_information_left_container" class="">
						<ul class="list-unstyled">
							<li>
								<label for="">Date of Birth</label>
								<li><input type="date" name="date_of_birth" class="form-control" placeholder="Start Date"></li>
							</li>
							<li>
								<label for="">Place of Birth</label>
								<input type="text" name="place_of_birth" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">Gender</label>
								<select name="gender" class="form-control">
								  	<option value="1">Male</option>
								  	<option value="0">Female</option>
								</select>
							</li>
							<li>
								<label for="">Civil Status</label>
								<select name="civil_status" class="form-control">
								  	<option value="1">Single</option>
								  	<option value="2">Married</option>
								  	<option value="3">Separated</option>
								  	<option value="4">Annulled</option>
								  	<option value="5">Widowed</option>
								</select>
							</li>
							<li>
								<label for="">Residential Address</label>
								<input type="text" name="residential_address" class="form-control" placeholder="Residential Address">
								<input type="text" name="residential_zip_code" class="form-control" placeholder="Zip Code">
								<input type="text" name="residential_telephone_number" class="form-control" placeholder="Telephone No.">
							</li>
								<li>
								<label for="">Permanent Address</label>
								<input type="text" name="permanent_address" class="form-control" placeholder="Permanent Address">
								<input type="text" name="permanent_zip_code" class="form-control" placeholder="Zip Code">
								<input type="text" name="permanent_telephone_number" class="form-control" placeholder="Telephone No.">
							</li>
							<li>
								<label for="">Citizenship</label>
								<input type="text" name="citizenship" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">Height</label>
								<input type="text" name="height" class="form-control" placeholder="(cm)">
								<label for="">Weight</label>
								<input type="text" name="weight" class="form-control" placeholder="(kg)">
							</li>
							<li>
								<label for="">Blood Type</label>
								<input type="text" name="blood_type" class="form-control" placeholder="">
							</li>
						</ul>
					</div><!-- end personal_information_left_container -->
					<div id="personal_information_right_container" class="">
						<ul class="list-unstyled">
							<li>
								<label for="">Email</label>
								<input type="email" name="email_address" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">Cellphone No.</label>
								<input type="text" name="cellphone_number" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">GSIS ID No.</label>
								<input type="text" name="gsis_id" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">PhilHealth No.</label>
								<input type="text" name="philhealth_id" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">SSS No.</label>
								<input type="text" name="sss_id" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">PAG-IBIG ID. No.</label>
								<input type="text" name="pagibig_id" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">Agency Employee No.</label>
								<input type="text" name="agency_employee_number" class="form-control" placeholder="">
							</li>
							<li>
								<label for="">Tin</label>
								<input type="text" name="tin_number" class="form-control" placeholder="">
							</li>
						</ul>
					</div>
				</div>
				<nav>
				  	<ul class="pager">
				   		<li class="previous disabled">
				   			<a href="#.html">
				   				<button type="submit" class="btn btn-default" disabled="disabled"><span aria-hidden="true">&larr;</span> Previous</button>
				   			</a>
				   		</li>
				   		<li class="next">
				   			<a href="personal_data_sheet_page2.html">
				   				<button type="submit" class="btn btn-default">Next <span aria-hidden="true">&rarr;</span></button>
				   			</a>
				   		</li>
				  	</ul>
				</nav>
			</form>
		</div>
	</body>
</html>