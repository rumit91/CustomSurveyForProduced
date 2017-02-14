<?php
	$redirect_url = "./login.html";
	$server = '';
	$con = mysqli_connect($server, '', '');
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db($con, "produced_survey_demo");
?>