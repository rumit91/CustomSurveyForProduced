<?php
	include './include/header.php';
	$finalComment = $con->real_escape_string($_GET['finalComment']);
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	$endTime = time();
	
	$query = "SELECT sessionID FROM sessions WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE sessions SET finalComment= '$finalComment', endTime= $endTime WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO sessions (sessionID, finalComment, endTime) VALUES ($sessionID, '$finalComment', $endTime)";
	$result2 = mysqli_query($con, $query2);
	session_start();
	if(isset($_SESSION['email']))
	{
		$email = $_SESSION['email'];
		$query3 = "UPDATE login SET sessionID = 0 WHERE email = '$email'";
		$result3 = mysqli_query($con, $query3);
	}
	return true;
?>