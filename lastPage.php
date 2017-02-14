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
<body sessionID="<?php echo $_SESSION['id']; ?>" last-page="yes">
	<div class="container">
		<div class="row">
			<div class="span8 offset2">
				<div class="hero-unit" id="surveyIntro">
					<h1>PRODUCED Community - Student Survey</h1>
					<br>
					<label>Please use the space below to record any final comments or feedback that will help us understand your experience as a PRODUCED student and/or that will help us optimize plans for connecting PRODUCED students to each other as well as the wider U.Va community:</label>
					<textarea rows="5" class="span7" id="finalComment"></textarea>
					<div class="row">
						<div class="span3">
							<a class="btn btn-block hugeButton" href="./section13.php">Go Back</a>
						</div>
						<div class="span4">
							<a class="btn btn-primary btn-block saveandcontinue hugeButton" section="lastPage">Submit Survey</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="./js/lastPageSubmit.js"></script>
<body>
</html>