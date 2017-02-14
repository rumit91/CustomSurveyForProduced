<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	$query = "SELECT organization1, organization2, organization3, organization4, organization5, organization6, organization7, organization8, organization9, organization10, organization11, organization12 FROM section12 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		for($i = 1; $i<13; $i++)
		{
			$data["organization".$i] = $row["organization".$i];
		}
	}
	echo json_encode($data);
	return json_encode($data);
?>