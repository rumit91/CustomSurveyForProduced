<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section7"))
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
				<?php leftSideNav(7); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 7 - Current and Desired Levels of Community with On-grounds Students</h2>
				<p>Please read each statement in the center column.  Then rate the PRODUCED program based on how it is doing now (left column) and how things should be (right column) <span class="bold-blue">in terms of what makes you feel a sense of community or connection with on-grounds students.</span></p>
				<div class="row">
					<div class="span9">
						
						<!-- start the first table -->
						<table class="table table-striped">
							<thead id="tableFourHeader">
								<tr id="legendRow">
									<th colspan="6" id="legendRowItem1"></th>
									<th></th>
									<th colspan="6" id="legendRowItem2"></th>
								</tr>
								<tr class="numberScale">
									<th class="center" id="scale-1-1">(1)</th>
									<th class="center" id="scale-1-2">(2)</th>
									<th class="center" id="scale-1-3">(3)</th>
									<th class="center" id="scale-1-4">(4)</th>
									<th class="center" id="scale-1-5">(5)</th>
									<th class="center" id="scale-1-6">(6)</th>
									<th></th>
									<th class="center" id="scale-2-1">(1)</th>
									<th class="center" id="scale-2-2">(2)</th>
									<th class="center" id="scale-2-3">(3)</th>
									<th class="center" id="scale-2-4">(4)</th>
									<th class="center" id="scale-2-5">(5)</th>
									<th class="center" id="scale-2-6">(6)</th>
								</tr>
								<tr>
									<th class="center" colspan="6">What Is:<br> Rate how PRODUCED <span class="shouldEmphasis">currently</span> operates</th>
									<th></th>
									<th class="center" colspan="6">What Should Be:<br> Rate how PRODUCED <span class="shouldEmphasis">should</span> operate</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="13"><h3 style='text-align:center;'>Opportunities (e.g. events, meetings etc...)</h3></td>
								<tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-1" class="q1current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-1" class="q1current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-1" class="q1current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-1" class="q1current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-1" class="q1current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-1" class="q1current" value="6">
									</td>
									<td>
										PRODUCED provides opportunities for me to <span class="bold-blue">contact and communicate</span> with on-grounds students outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-2" class="q1desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-2" class="q1desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-2" class="q1desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-2" class="q1desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-2" class="q1desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour1-2" class="q1desired" value="6">
									</td>
								</tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-1" class="q2current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-1" class="q2current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-1" class="q2current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-1" class="q2current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-1" class="q2current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-1" class="q2current" value="6">
									</td>
									<td>
										PRODUCED provides opportunities for me to <span class="bold-blue">share resources and exchange ideas</span> with on-grounds students outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-2" class="q2desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-2" class="q2desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-2" class="q2desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-2" class="q2desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-2" class="q2desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour2-2" class="q2desired" value="6">
									</td>
								</tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-1" class="q3current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-1" class="q3current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-1" class="q3current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-1" class="q3current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-1" class="q3current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-1" class="q3current" value="6">
									</td>
									<td>
										PRODUCED provides opportunities for me to <span class="bold-blue">bond and develop friendships</span> with on-grounds students outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-2" class="q3desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-2" class="q3desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-2" class="q3desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-2" class="q3desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-2" class="q3desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour3-2" class="q3desired" value="6">
									</td>
								</tr>
								<tr class="heavy-bottom-border questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-1" class="q4current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-1" class="q4current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-1" class="q4current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-1" class="q4current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-1" class="q4current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-1" class="q4current" value="6">
									</td>
									<td>
										PRODUCED provides opportunities for me to <span class="bold-blue">study and collaborate</span> with on-grounds students on homework and/or projects outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-2" class="q4desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-2" class="q4desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-2" class="q4desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-2" class="q4desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-2" class="q4desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour4-2" class="q4desired" value="6">
									</td>									
								</tr>
								<tr>
									<td colspan="13"><h3 style='text-align:center;'>Resources and Tools (e.g. software, instructions, staff etc...)</h3></td>
								<tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-1" class="q5current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-1" class="q5current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-1" class="q5current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-1" class="q5current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-1" class="q5current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-1" class="q5current" value="6">
									</td>
									<td>
										PRODUCED provides resources and tools for me to <span class="bold-blue">contact and communicate</span> with on-grounds students outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-2" class="q5desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-2" class="q5desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-2" class="q5desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-2" class="q5desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-2" class="q5desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour5-2" class="q5desired" value="6">
									</td>
								</tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-1" class="q6current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-1" class="q6current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-1" class="q6current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-1" class="q6current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-1" class="q6current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-1" class="q6current" value="6">
									</td>
									<td>
										PRODUCED provides resources and tools for me to <span class="bold-blue">share resources and exchange ideas</span> with on-grounds students outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-2" class="q6desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-2" class="q6desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-2" class="q6desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-2" class="q6desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-2" class="q6desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour6-2" class="q6desired" value="6">
									</td>
								</tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-1" class="q7current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-1" class="q7current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-1" class="q7current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-1" class="q7current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-1" class="q7current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-1" class="q7current" value="6">
									</td>
									<td>
										PRODUCED provides resources and tools for me to <span class="bold-blue">bond and develop friendships</span> with on-grounds students outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-2" class="q7desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-2" class="q7desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-2" class="q7desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-2" class="q7desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-2" class="q7desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour7-2" class="q7desired" value="6">
									</td>
								</tr>
								<tr class="questionRow">
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-1" class="q8current" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-1" class="q8current" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-1" class="q8current" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-1" class="q8current" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-1" class="q8current" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-1" class="q8current" value="6">
									</td>
									<td>
										PRODUCED provides resources and tools for me to <span class="bold-blue">study and collaborate</span> with on-grounds students on homework and/or projects outside of class.
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-2" class="q8desired" value="1">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-2" class="q8desired" value="2">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-2" class="q8desired" value="3">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-2" class="q8desired" value="4">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-2" class="q8desired" value="5">
									</td>
									<td class="center clickableRadio">
										<input type="radio" name="TableFour8-2" class="q8desired" value="6">
									</td>
								</tr>
							</tbody>
						</table>
						<!-- end the table -->
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="7">Save and Continue</a>
					</div>
				</div>
			</div>
		</div>
		<!-- The actual legend above the numbers in the table -->
		<p class="rotateBT-LR legendItem" id="legend-1-1" legnum="1" legitem="1">
			<span>Strongly Disagree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-1-2" legnum="1" legitem="2">
			<span>Disagree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-1-3" legnum="1" legitem="3">
			<span>Somewhat Disagree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-1-4" legnum="1" legitem="4">
			<span>Somewhat Agree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-1-5" legnum="1" legitem="5">
			<span>Agree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-1-6" legnum="1" legitem="6">
			<span>Strongly Agree</span>
		</p>
		<!-- the second legend set -->
		<p class="rotateBT-LR legendItem" id="legend-2-1" legnum="2" legitem="1">
			<span>Strongly Disagree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-2-2" legnum="2" legitem="2">
			<span>Disagree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-2-3" legnum="2" legitem="3">
			<span>Somewhat Disagree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-2-4" legnum="2" legitem="4">
			<span>Somewhat Agree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-2-5" legnum="2" legitem="5">
			<span>Agree</span>
		</p>
		<p class="rotateBT-LR legendItem" id="legend-2-6" legnum="2" legitem="6">
			<span>Strongly Agree</span>
		</p>
		<!-- END legend -->
		<!-- Persistent Table Header that stays at the top as you scroll -->
		<div class="legendBackground hide" legnum="1"></div>
		<div class="legendBackground hide" legnum="2"></div>
	</div>
	<div class="modal" id="loadingModal">
		<div class="modal-body">
			<div class="progress progress-striped active">
				<div class="bar" style="width: 100%;"></div>
			</div>
		 </div>
	</div>
	<script src="./js/section7submit.js"></script>
<body>
</html>