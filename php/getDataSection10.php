<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	$query = "SELECT frequency, task1ability, task2ability, task3ability, task4ability, task5ability, task1rank, task2rank, task3rank, task4rank, task5rank, additionalTopics FROM section10 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		for($i=1; $i<6; $i++)
		{
			$data["task".$i."ability"] = $row["task".$i."ability"];
			$data["task".$i."rank"] = $row["task".$i."rank"];
		}
		$data["additionalTopics"] = $row["additionalTopics"];
		$data["frequency"] = $row["frequency"];
	}
	echo json_encode($data);
	return json_encode($data);
?>