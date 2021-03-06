<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section8"))
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
<body sessionID="<?php echo $_SESSION['id']; ?>"  data-exists="<?php echo $dataExists; ?>">
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
				<?php leftSideNav(8); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 8 - Increasing Opportunities for Community with On-grounds Students</h2>
				<p>Below is a list of strategies, ideas and suggestions that could help PRODUCED students interact, communicate, collaborate, bond and connect more with on-grounds students.</p>
				<p>Please consider each one below.  Then, rank order the importance of each, from #1 being the most important item to #5 being the least important item, that would help you interact, communicate, collaborate, bond and connect with on-grounds students outside of class.</p>
				<p><span class="nonIEversion hide">To change the rank order of an  item <span class="shouldEmphasis">click and drag</span> it either above or below the item of the target rank.</span></p>
				<div class="row">
					<div class="span1">
						<p class="bold" style="text-align:right">Rank</p>
						<ul id="ranking">
							<li><span rel='tooltip' data-original-title="Most<br>Important">1</span></li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li><span rel='tooltip' data-original-title="Least<br>Important">5</span></li>
						</ul>
					</div>
					<div class="span8 nonIEversion hide">
						<p class="bold">Strategy, Idea, Suggestion</p>
						<ul id="sortable">
							<li><i class="icon-resize-vertical"></i> Provide PRODUCED students access to student clubs and organizations</li>
							<li><i class="icon-resize-vertical"></i> Extend opportunities for multidisciplinary student projects (e.g. solar cars) to PRODUCED students</li>
							<li><i class="icon-resize-vertical"></i> Provide opportunities for PRODUCED and on-grounds students to participate in virtual team building activities</li>
							<li><i class="icon-resize-vertical"></i> Create student competitions made of interdisciplinary teams of on-grounds and PRODUCED students</li>
							<li><i class="icon-resize-vertical"></i> Ensure that PRODUCED students have representation in student council or student government</li>
						</ul>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="span6">
						<label>Please list any additional ideas or suggestions that could help PRODUCED students interact, communicate, collaborate, and connect more with on-grounds students below:</label>
						<textarea rows="5" class="input-xxlarge" id="additionalIdeas"></textarea>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="8">Save and Continue</a>
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
	<script src="./js/section8submit.js"></script>
<body>
</html>