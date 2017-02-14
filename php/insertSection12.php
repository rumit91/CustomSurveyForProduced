<?php
	include './include/header.php';
	for($i=1; $i<13; $i++)
	{
		$organization[$i] = $con->real_escape_string($_GET['organization'.$i]);
	}
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT sessionID FROM section12 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists) {
		$query2 = "UPDATE section12 SET organization1 = $organization[1], organization2 = $organization[2], organization3 = $organization[3], organization4 = $organization[4], organization5 = $organization[5], organization6 = $organization[6], organization7 = $organization[7], organization8 = $organization[8], organization9 = $organization[9], organization10 = $organization[10], organization11 = $organization[11], organization12 = $organization[12] WHERE sessionID = $sessionID";
	} else {
		$query2 = "INSERT INTO section12 (organization1, organization2, organization3, organization4, organization5, organization6, organization7, organization8, organization9, organization10, organization11, organization12, sessionID) VALUES ($organization[1], $organization[2], $organization[3], $organization[4], $organization[5], $organization[6], $organization[7], $organization[8], $organization[9], $organization[10], $organization[11], $organization[12], $sessionID)";
	}
	$result2 = mysqli_query($con, $query2);
	return true;
?>