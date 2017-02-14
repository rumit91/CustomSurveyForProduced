<?php
	include './include/header.php';
	$orgsQuestion1 = $con->real_escape_string($_GET['orgsQuestion1']);
	$orgsQuestion2 = $con->real_escape_string($_GET['orgsQuestion2']);
	$orgsInvolved = $con->real_escape_string($_GET['orgsInvolved']);
	$orgsDesired = $con->real_escape_string($_GET['orgsDesired']);
	
	$honorQuestion1 = $con->real_escape_string($_GET['honorQuestion1']);
	$honorQuestion2 = $con->real_escape_string($_GET['honorQuestion2']);
	$honorInvolved = $con->real_escape_string($_GET['honorInvolved']);
	$honorDesired = $con->real_escape_string($_GET['honorDesired']);
	
	$natsQuestion1 = $con->real_escape_string($_GET['natsQuestion1']);
	$natsQuestion2 = $con->real_escape_string($_GET['natsQuestion2']);
	$natsInvolved = $con->real_escape_string($_GET['natsInvolved']);
	$natsDesired = $con->real_escape_string($_GET['natsDesired']);
	
	$sessionID = $con->real_escape_string($_GET['sessionID']);

	$query = "SELECT sessionID FROM section13 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE section13 SET orgsQuestion1= '$orgsQuestion1', orgsQuestion2= '$orgsQuestion2', orgsInvolved= '$orgsInvolved', orgsDesired= '$orgsDesired', honorQuestion1= '$honorQuestion1', honorQuestion2= '$honorQuestion2', honorInvolved= '$honorInvolved', honorDesired= '$honorDesired', natQuestion1= '$natQuestion1', natQuestion2= '$natQuestion2', natInvolved= '$natInvolved', natDesired= '$natDesired' WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO section13 (sessionID, orgsQuestion1, orgsQuestion2, orgsInvolved, orgsDesired, honorQuestion1, honorQuestion2, honorInvolved, honorDesired, natQuestion1, natQuestion2, natInvolved, natDesired) VALUES ($sessionID, '$orgsQuestion1', '$orgsQuestion2', '$orgsInvolved', '$orgsDesired', '$honorQuestion1', '$honorQuestion2', '$honorInvolved', '$honorDesired', '$natQuestion1', '$natQuestion2', '$natInvolved', '$natDesired')";
	$result2 = mysqli_query($con, $query2);
	
	//check if all the sections are filled out
	for($i = 1; $i < 13; $i++)
	{
		$complete[$i] = 0;
		$query3 = "SELECT sessionID FROM section$i WHERE sessionID = $sessionID";
		$result3 = mysqli_query($con, $query3);
		if (is_object($result3) && $result3->num_rows > 0) {
			$complete[$i] = 1;
		}
	}
	echo json_encode($complete);
	return json_encode($complete);
?>