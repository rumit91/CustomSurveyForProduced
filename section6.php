<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section6"))
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
				<?php leftSideNav(6); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 6 - Using Communication and Collaboration Tools with On-grounds Students</h2>
				<p>Below is a list of different online communication and collaboration tools.<br>
				Please indicate the <span class="bold-blue">frequency</span> with which you use each tool to communicate and collaborate with <span class="bold-blue">on-grounds students outside of class.</span></p>
				<div class="row">
					<div class="span9">
						
						<!-- start the first table -->
						<table class="table table-striped">
							<thead id="tableOneHeader">
								<tr>
									<th id="empty"></th>
									<th class="center">Several Times a Day</th>
									<th class="center">Once a Day</th>
									<th class="center">Several Times a Week</th>
									<th class="center">Once a Week</th>
									<th class="center">Never</th>
								</tr>
							</thead>
							<tbody>
								<tr class="commToolRow">
									<td>
										Blackboard Collaborate
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable1" class="bbcollab" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable1" class="bbcollab" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable1" class="bbcollab" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable1" class="bbcollab" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable1" class="bbcollab" value="5">
									</td>
								</tr>
								<tr class="commToolRow">
									<td>
										Lync
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable2" class="lync" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable2" class="lync" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable2" class="lync" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable2" class="lync" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable2" class="lync" value="5">
									</td>
								</tr>
								<tr class="commToolRow">
									<td>
										Skype
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable3" class="skype" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable3" class="skype" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable3" class="skype" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable3" class="skype" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable3" class="skype" value="5">
									</td>
								</tr>
								<tr class="commToolRow">
									<td>
										Social Media: Facebook or Twitter
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable4" class="socialMedia" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable4" class="socialMedia" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable4" class="socialMedia" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable4" class="socialMedia" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable4" class="socialMedia" value="5">
									</td>
								</tr>
								<tr class="commToolRow">
									<td>
										Google Suite: G-chat or Google Hangout
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable5" class="google" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable5" class="google" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable5" class="google" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable5" class="google" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable5" class="google" value="5">
									</td>
								</tr>
								<tr class="commToolRow">
									<td>
										Email
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable6" class="email" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable6" class="email" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable6" class="email" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable6" class="email" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="commTable6" class="email" value="5">
									</td>
								</tr>
							</tbody>
						</table>
						<!-- end the table -->
					</div>
				</div>
				<div class="row">
					<div class="span6">
						<label>Please list any other online communication or collaboration tools that you use to communicate and collaborate with <span class="bold-blue">on-grounds students</span> outside of class:</label>
						<textarea rows="5" class="input-xxlarge" id="additionalIdeas"></textarea>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="6">Save and Continue</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Persistent Table Header that stays at the top as you scroll -->
		<div id="persistentTableHeader" class="hide">
			<table class="table table-striped">
				<thead>
					<tr>
						<th id="spacer"></th>
						<th class="center">Several Times a Day</th>
						<th class="center">Once a Day</th>
						<th class="center">Several Times a Week</th>
						<th class="center">Once a Week</th>
						<th class="center">Never</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="modal" id="loadingModal">
		<div class="modal-body">
			<div class="progress progress-striped active">
				<div class="bar" style="width: 100%;"></div>
			</div>
		 </div>
	</div>
	<script src="./js/section6submit.js"></script>
<body>
</html>