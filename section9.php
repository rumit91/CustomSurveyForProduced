<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section9"))
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
	<script src="./js/jquery-ui-1.9.2.custom.js"></script>
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
				<?php leftSideNav(9); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 9 - Connecting to SEAS</h2>
				<p>This section asks you to consider the connection that you may or may not feel with respect to the School of Engineering and Applied Science (SEAS).</p>
				<div class="row">
					<div class="span4">
						<form>
							<fieldset>	
								<label>About how often per semester do you participate in events or workshops offered through SEAS?</label>
								<label class="radio">
									<input type="radio" name="SEASevents" class="frequency" value="1"> Never
								</label>
								<label class="radio">
									<input type="radio" name="SEASevents" class="frequency" value="2"> 1-3 times per semester
								</label>
								<label class="radio">
									<input type="radio" name="SEASevents" class="frequency" value="3"> 4 or more times per semester
								</label>
								
							</fieldset>
						</form>
					</div>
				</div>
				<p>Below is a list of events that are offered or could be offered through SEAS. Please rank order the importance of each, from #1 being the most important item to #6 being the least important item, that would would help you feel connected to SEAS.</p>
				<p><span class="nonIEversion hide">To change the rank order of an  item <span class="shouldEmphasis">click and drag</span> it either above or below the item of the target rank.</span></p>
				<div class="row">
					<div class="span1">
						<p class="bold" style="text-align:right">Rank</p>
						<ul id="ranking">
							<li><span rel='tooltip' data-original-title="Most<br>Important">1</span></li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li><span rel='tooltip' data-original-title="Least<br>Important">6</span></li>
						</ul>
					</div>
					<div class="span8 nonIEversion hide">
						<p class="bold">Type of Event</p>
						<ul id="sortable">
							<li><i class="icon-resize-vertical"></i> Alumni Talks</li>
							<li><i class="icon-resize-vertical"></i> Company Presentations</li>
							<li><i class="icon-resize-vertical"></i> Student Competitions</li>
							<li><i class="icon-resize-vertical"></i> Research Seminars</li>
							<li><i class="icon-resize-vertical"></i> Award Ceremonies</li>
							<li><i class="icon-resize-vertical"></i> Meet and chat with SEAS faculty, department chairs or deans online</li>
						</ul>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="span6">
						<label>Please list or describe any additional events or types of resources that SEAS could make available to you as a PRODUCED student:</label>
						<textarea rows="5" class="input-xxlarge" id="additionalTopics"></textarea>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="9">Save and Continue</a>
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
	<script src="./js/section9submit.js"></script>
<body>
</html>