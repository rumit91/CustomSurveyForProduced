<?php
	include './include/header.php';
	$frequency = $con->real_escape_string($_GET['frequency']);
	for($i=1; $i<6; $i++)
	{
		$taskAbility[$i] = $con->real_escape_string($_GET['taskAbility'.$i]);
	}
	for($i=1; $i<6; $i++)
	{
		$taskRank[$i] = $con->real_escape_string($_GET['taskRank'.$i]);
	}
	$additionalTopics = $con->real_escape_string($_GET['additionalTopics']);
	$sessionID = $con->real_escape_string($_GET['sessionID']);

	$query = "SELECT sessionID FROM section10 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE section10 SET frequency = '$frequency', task1ability = '$taskAbility[1]', task2ability = '$taskAbility[2]', task3ability = '$taskAbility[3]', task4ability = '$taskAbility[4]', task5ability = '$taskAbility[5]', task1rank = $taskRank[1], task2rank = $taskRank[2], task3rank = $taskRank[3], task4rank = $taskRank[4], task5rank = $taskRank[5], additionalTopics = '$additionalTopics' WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO section10 (sessionID, frequency, task1ability, task2ability, task3ability, task4ability, task5ability, task1rank, task2rank, task3rank, task4rank, task5rank, additionalTopics) VALUES ($sessionID, '$frequency', '$taskAbility[1]', '$taskAbility[2]', '$taskAbility[3]', '$taskAbility[4]', '$taskAbility[5]', $taskRank[1], $taskRank[2], $taskRank[3], $taskRank[4], $taskRank[5], '$additionalTopics')";
	$result2 = mysqli_query($con, $query2);
	return true;
?>