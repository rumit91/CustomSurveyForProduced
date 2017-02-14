<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
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
        padding-top: 20px;
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
<body sessionID="<?php echo $_SESSION['id']; ?>">
	<div class="container">
		<div class="row">
			<div class="span8 offset2">
				<div class="hero-unit" id="surveyIntro">
					<h1>PRODUCED Community - Student Survey</h1>
					<noscript>
						<h2>
							Please enable javascript to take this survey.
						</h2>
					</noscript>
					<hr>
					<h3><span class="bold-blue">I designed and implemented the web interface and backend to facilitate this survey as an online form. I did not design the questions or the language used.</span></h3>
					<hr>
					<p>This survey is intended to gather your feedback and insights about your experiences as a PRODUCED student. Your responses will help the PRODUCED program assess and evaluate the current level of service and the quality of programming and services available to you. The information you provide will help us create, plan and provide activities, programming and resources that build and foster a sense of community and that also connect you to the wider U.Va community.</p>
					<p>Your full participation and thoughtful responses to the questions posed in this survey are critical to the successful planning of future PRODUCED programming.  To this end, however, your participation is completely voluntary.  You may decline to participate or withdraw at any time.  There are no known risks and/or discomforts associated with this survey.  Rather, the expected benefit associated with your participation is that it will provide you with an opportunity to reflect on and evaluate your experiences as a PRODUCED student.</p>
					<p>Your name will not be associated with the data in any way and any identifying information is automatically coded as a number.  All answers will be kept confidential and unidentifiable in any final reports or summaries of the survey responses.  In appreciation for your time and participation, a summary of the results will be made available to anyone requesting them.</p>
					<p>Should you have any questions, comments, concerns, would like to request a copy of the survey results or wish to opt out of this survey completely please contact the PRODUCED program via email at:<a href='mailto:email-removed@virginia.edu'>email-removed@virginia.edu</a>.</p>
					<p>The survey should take no more than 25-35 minutes to complete. If you start the survey and need to stop and complete it at a later time, your responses will be saved if you click save and continue. By selecting the "Begin" button below, you consent with full knowledge of the nature and purpose of the survey.</p>
					<p>Thank you for your cooperation and participation.</p>
					<div>
						<a id="beginButton" class="btn btn-primary btn-large btn-block" href="./section1.php">Begin</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<body>
</html>