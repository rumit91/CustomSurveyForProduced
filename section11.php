<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section11"))
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
				<?php leftSideNav(11); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 11 - Connecting to the Center for Engineering Career Development</h2>
				<p>This section asks you to consider the connection that you may or may not feel with respect to the Center for Engineering Career Development.</p>
				<div class="row">
					<div class="span4">
						<form>
							<fieldset>	
								<label>About how often per semester do you make use of the resources available through the Center for Engineering Career Development?</label>
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
				<p>Below is a list of topics covered by the Center for Engineering Career Development. Select the top 8 that would be most important to helping you feel connected to the Center for Engineering Career Development.</p>
				<p>To change the rank order of an  item <span class="shouldEmphasis">click and drag</span> it either above or below the item of the target rank. Only your <span class="shouldEmphasis">top 8</span> will be recorded.</p>
				<div class="row">
					<div class="span1">
						<p class="bold" style="text-align:right">Rank</p>
						<ul id="ranking">
							<li><span rel='tooltip' data-original-title="Most<br>Important">1</span></li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
							<li>6</li>
							<li>7</li>
							<li><span rel='tooltip' data-original-title="Least<br>Important">8</span></li>
						</ul>
					</div>
					<div class="span8 nonIEversion hide">
						<p class="bold">Strategy, Idea, Suggestion</p>
						<ul id="sortable">
							<li><i class="icon-resize-vertical"></i> Orientation to the resources available through the Center for Engineering Career Development</li>
							<li><i class="icon-resize-vertical"></i> Resumes (e.g. resume critique, creating a first resume, highlighting certain skills, etc...)</li>
							<li><i class="icon-resize-vertical"></i> Interviewing Techniques & Strategies (e.g. mock interviews, interview preparation, interview coaching, etc...)</li>
							<li><i class="icon-resize-vertical"></i> Career Fairs</li>
							<li><i class="icon-resize-vertical"></i> Networking & Communicating Effectively</li>
							<li><i class="icon-resize-vertical"></i> Continuing to graduate school (e.g. applications, personal statements, financing & scholarships, etc...)</li>
							<li><i class="icon-resize-vertical"></i> Using social media for a job search (e.g. Facebook, LinkedIn, Twitter, etc...)</li>
							<li><i class="icon-resize-vertical"></i> Starting a new job (e.g. negotiating salaries, meeting new co-workers, orientating yourself, what to ask for, etc..)</li>
							<li><i class="icon-resize-vertical"></i> Career Transitions (e.g. changing fields, navigating a promotion, etc...)</li>
							<li><i class="icon-resize-vertical"></i> Internships and Job Search</li>
							<li><i class="icon-resize-vertical"></i> Personal branding</li>
							<li><i class="icon-resize-vertical"></i> Opportunities for women in engineering</li>
							<li><i class="icon-resize-vertical"></i> Opportunities for underrepresented populations in engineering</li>
						</ul>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="span6">
						<label>Please list or describe any additional events or types of resources that the library could make available to you as a PRODUCED student:</label>
						<textarea rows="5" class="input-xxlarge" id=
						"additionalTopics"></textarea>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="11">Save and Continue</a>
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
	<script src="./js/section11submit.js"></script>
<body>
</html>