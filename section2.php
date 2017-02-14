<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section2"))
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
				<?php leftSideNav(2); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 2 - General Questions About Community</h2>
				<p>Please consider your experiences as a PRODUCED student.<br>
				Please read each statement and select the button that best reflects your opinion.</p>
				<div class="row">
					<div class="span9">
						<!-- start the first table -->
						<table class="table table-striped">
							<thead id="tableOneHeader">
								<tr>
									<th id="empty"></th>
									<th class="center">Strongly Disagree <br> (1)</th>
									<th class="center">Disagree <br>(2)</th>
									<th class="center">Somewhat Disagree <br> (3)</th>
									<th class="center">Somewhat Agree <br> (4)</th>
									<th class="center">Agree <br>(5)</th>
									<th class="center">Strongly Agree <br> (6)</th>
								</tr>
							</thead>
							<tbody>
								<tr class="heavy-bottom-border">
									<td>
										Overall, I feel a sense of community in the PRODUCED program.
									</td>
									<?php
										$index = 1;
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>Faculty</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">faculty</span> members that teach PRODUCED classes.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">faculty</span> members that teach PRODUCED classes.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class="heavy-bottom-border">
									<td>
										As a PRODUCED student it is important for me to feel connected to <span class="bold-blue">faculty</span> members that teach PRODUCED classes.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>Other PRODUCED Students</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to other <span class="bold-blue">PRODUCED</span> students.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to other <span class="bold-blue">PRODUCED</span> students. 
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class="heavy-bottom-border">
									<td>
										As a PRODUCED student it is important for me to feel connected to other <span class="bold-blue">PRODUCED</span> students.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>On-grounds Students</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">on-grounds</span> students.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">on-grounds</span> students.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to <span class="bold-blue">on-grounds</span> students.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>SEAS Events</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">events</span> offered by the School of Engineering & Applied Science.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">events</span> offered by the School of Engineering & Applied Science.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class="heavy-bottom-border">
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">events</span> offered by the School of Engineering & Applied Science .
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>SEAS Resources</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">resources</span> available through the School of Engineering & Applied Science.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">resources</span> offered by the School of Engineering & Applied Science.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">resources</span> offered by the School of Engineering & Applied Science.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>CECD Events</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">events</span> offered by the Center for Engineering Career Development.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">events</span> offered by the Center for Engineering Career Development.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">events</span> offered by the Center for Engineering Career Development.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>CECD Resources and Services</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">resources and services</span> offered by the Center for Engineering Career Development.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">resources and services</span> offered by the Center for Engineering Career Development.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">resources and services</span> offered by the Center for Engineering Career Development.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>CECD Staff</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">Center for Engineering Career Development staff</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">Center for Engineering Career Development staff</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">Center for Engineering Career Development staff</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>Library Resources and Services</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">resources and services</span> available through the Library.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">resources and services</span> available through the Library.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">resources and services</span> available through the Library.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>Library Staff</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to the <span class="bold-blue">Library staff</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">Library staff</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to the <span class="bold-blue">Library staff</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>Local Business</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">local engineering business, companies or firms</span> in my area.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">local engineering business, companies or firms</span> in my area.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to <span class="bold-blue">local engineering business, companies or firms</span> in my area.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>Local Engineering Job Opportunities</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">engineering job opportunities</span> in my area.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">engineering job opportunities</span> in my area.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to <span class="bold-blue">engineering job opportunities</span> in my area.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>PRODUCED Alumni</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">PRODUCED alumni</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">PRODUCED alumni</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to <span class="bold-blue">PRODUCED alumni</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h3>UVA Engineering Alumni</h3>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">U.Va engineering alumni</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">U.Va engineering alumni</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										As a PRODUCED student it is important for me to feel connected to <span class="bold-blue">U.Va engineering alumni</span>.
									</td>
									<?php
										radioOptionsCommunity($index);
										$index++;
									?>
								</tr>
							</tbody>
						</table>
						<!-- end the table -->
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="2">Save and Continue</a>
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
						<th class="center">Strongly Disagree <br> (1)</th>
						<th class="center">Disagree <br>(2)</th>
						<th class="center">Somewhat Disagree <br> (3)</th>
						<th class="center">Somewhat Agree <br> (4)</th>
						<th class="center">Agree <br>(5)</th>
						<th class="center">Strongly Agree <br> (6)</th>
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
	<script src="./js/section2submit.js"></script>
<body>
</html>