<?php
	include './include/header.php';
	$rankedList = $con->real_escape_string($_GET['rankedList']);
	$additionalIdeas = $con->real_escape_string($_GET['additionalIdeas']);
	$sessionID = $con->real_escape_string($_GET['sessionID']);

	$query = "SELECT sessionID FROM section5 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE section5 SET rankedList = '$rankedList', additionalIdeas = '$additionalIdeas' WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO section5 (sessionID, rankedList, additionalIdeas) VALUES ($sessionID, '$rankedList', '$additionalIdeas')";
	$result2 = mysqli_query($con, $query2);
	return true;
?>