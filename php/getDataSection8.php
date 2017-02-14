<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	$query = "SELECT rankedList, additionalIdeas FROM section8 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		$list = preg_split("/\+\/\+/", $row["rankedList"]);
		for($i=1; $i<6; $i++)
		{
			$data[$i] = $list[$i-1];
		}
		$data["additionalIdeas"] = $row["additionalIdeas"];
	}
	echo json_encode($data);
	return json_encode($data);
?>