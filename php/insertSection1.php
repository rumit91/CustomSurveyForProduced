<?php
	include './include/header.php';
	$gender = $con->real_escape_string($_GET['gender']);
	$age = $con->real_escape_string($_GET['age']);
	$employment = $con->real_escape_string($_GET['employment']);
	$enrollment = $con->real_escape_string($_GET['enrollment']);
	$sessionID = $con->real_escape_string($_GET['sessionID']);

	$query = "SELECT sessionID FROM section1 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE section1 SET gender = '$gender', age = '$age', employment = '$employment', enrollment = '$enrollment' WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO section1 (sessionID, gender, age, employment, enrollment) VALUES ($sessionID, '$gender', '$age', '$employment', '$enrollment')";
	$result2 = mysqli_query($con, $query2);
	return true;
?>