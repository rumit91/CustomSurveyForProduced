<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	$query = "SELECT frequency, rankedList, additionalTopics FROM section9 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		$list = preg_split("/\+\/\+/", $row["rankedList"]);
		for($i=1; $i<7; $i++)
		{
			$data[$i] = $list[$i-1];
		}
		$data["additionalTopics"] = $row["additionalTopics"];
		$data["frequency"] = $row["frequency"];
	}
	echo json_encode($data);
	return json_encode($data);
?>