<?php
	include './include/header.php';
	$frequency = $con->real_escape_string($_GET['frequency']);
	$rankedList = $con->real_escape_string($_GET['rankedList']);
	$additionalTopics = $con->real_escape_string($_GET['additionalTopics']);
	$sessionID = $con->real_escape_string($_GET['sessionID']);

	$query = "SELECT sessionID FROM section11 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE section11 SET frequency = '$frequency', rankedList = '$rankedList', additionalTopics = '$additionalTopics' WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO section11 (sessionID, frequency, rankedList, additionalTopics) VALUES ($sessionID, '$frequency', '$rankedList', '$additionalTopics')";
	$result2 = mysqli_query($con, $query2);
	return true;
?>