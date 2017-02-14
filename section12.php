<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section12"))
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
				<?php leftSideNav(12); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 12 - Connecting to Organizations</h2>
				<p>This section asks you to consider the connection that you may or may not feel with respect to organizations that connect you to the wider field of engineering.</p>
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
								<tr>
									<td colspan='7'>
										<h4>Engineering Student Organizations at UVA</h4>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">engineering student organizations at UVA</span>.
									</td>
									<?php
										$index = 1;
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">engineering student organizations at UVA</span>.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr class="heavy-bottom-border">
									<td>
										It is important for me to feel connected to <span class="bold-blue">engineering student organizations at UVA</span> as a PRODUCED student.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h4>Non-Engineering Student Organizations at UVA</h4>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">UVA student organizations (non-engineering)</span>.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">UVA student organizations (non-engineering)</span>.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr class="heavy-bottom-border">
									<td>
										It is important for me to feel connected to <span class="bold-blue">UVA student organizations (non-engineering)</span> as a PRODUCED student. 
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h4>Engineering Honor Societies at UVA</h4>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">engineering honor societies</span> at UVA.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to the <span class="bold-blue">engineering honor societies</span> at UVA.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										It is important for me to feel connected to <span class="bold-blue">engineering honor societies</span> at UVA as a PRODUCED student.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td colspan='7'>
										<h4>National or Statewide Professional<br>Engineering Organizations</h4>
									</td>
								</tr>
								<tr>
									<td>
										I feel connected to <span class="bold-blue">national or statewide professional engineering organizations</span>.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr>
									<td>
										I am satisfied with my current level of connection to <span class="bold-blue">national or statewide professional engineering organizations</span>.
									</td>
									<?php
										radioOptionsOrganization($index);
										$index++;
									?>
								</tr>
								<tr class='heavy-bottom-border'>
									<td>
										It is important for me to feel connected to <span class="bold-blue">national or statewide professional engineering organizations</span> as a PRODUCED student.
									</td>
									<?php
										radioOptionsOrganization($index);
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
						<a class="btn btn-primary saveandcontinue" section="12">Save and Continue</a>
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
	<script src="./js/section12submit.js"></script>
<body>
</html>