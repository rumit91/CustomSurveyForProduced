<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT age, gender, employment, enrollment FROM section1 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		$data["age"] = $row["age"];
		$data["gender"] = $row["gender"];
		$data["employment"] = $row["employment"];
		$data["enrollment"] = $row["enrollment"];
	}
	echo json_encode($data);
	return json_encode($data);
?>