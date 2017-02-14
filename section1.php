<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section1"))
	{
		$dataExists = "yes";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PRODUCED Community - Student Survey</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Survey of the PRODUCED students for Erika Powell">
	<meta name="author" content="Timur Aleshin">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
	<!-- Bootstrap Files -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- My Files -->
	<link href="./css/mainstyle.css" rel="stylesheet" media="screen">
	<script src="./js/mainscript.js"></script>
</head>
<body sessionID="<?php echo $_SESSION['id']; ?>" data-exists="<?php echo $dataExists; ?>">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" id="surveyTitle">PRODUCED Community - Student Survey</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="span3">
				<?php leftSideNav(1); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 1 - Demographics</h2>
				<div class="row">
					<div class="span4">
						<form>
							<fieldset>	
								<label>Gender</label>
								<select class="span4" id="gender">
									<option>----</option>
									<option>Male</option>
									<option>Female</option>
								</select>
								<label>Age</label>
								<select class="span4" id="age">
									<option>----</option>
									<option>19 and under</option>
									<option>20-24</option>
									<option>25-29</option>
									<option>30-34</option>
									<option>35-39</option>
									<option>40-44</option>
									<option>45-49</option>
									<option>50 or over</option>
								</select>
							</fieldset>
						</form>
					</div>
					<div class="span4">
						<form>
							<fieldset>
								<label>Employment Status</label>
								<select class="span4" id="employment">
									<option>----</option>
									<option>Work full-time (35+ hours per week)</option>
									<option>Work part-time (less than 35 hours per week)</option>
									<option>Full-time engineering internship (35+ hr/wk)</option>
									<option>Part-time engineering internship (<35 hr/wk)</option>
									<option>Currently not employed</option>
								</select>
								<label>Enrollment Status (Spring 2013)</label>
								<select class="span4" id="enrollment">
									<option>----</option>
									<option>10 credits or more</option>
									<option>Less than 10 credits</option>
								</select>
							</fieldset>
						</form>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="1">Save and Continue</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="loadingModal">
		<div class="modal-body">
			<div class="progress progress-striped active">
				<div class="bar" style="width: 100%;"></div>
			</div>
		 </div>
	</div>
	<script src="./js/section1submit.js"></script>
<body>
</html>