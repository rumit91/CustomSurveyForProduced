<?php
	include './include/header.php';
	for($i=1; $i<9; $i++)
	{
		$current[$i] = $con->real_escape_string($_GET['current'.$i]);
	}
	for($i=1; $i<9; $i++)
	{
		$desired[$i] = $con->real_escape_string($_GET['desired'.$i]);
	}
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT sessionID FROM section7 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists) {
		$query2 = "UPDATE section7 SET q1current = $current[1], q2current = $current[2], q3current = $current[3], q4current = $current[4], q5current = $current[5], q6current = $current[6], q7current = $current[7], q8current = $current[8], q1desired = $desired[1], q2desired = $desired[2], q3desired = $desired[3], q4desired = $desired[4], q5desired = $desired[5], q6desired = $desired[6], q7desired = $desired[7], q8desired = $desired[8] WHERE sessionID = $sessionID";
	} else {
		$query2 = "INSERT INTO section7 (q1current, q2current, q3current, q4current, q5current, q6current, q7current, q8current, q1desired, q2desired, q3desired, q4desired, q5desired, q6desired, q7desired, q8desired, sessionID) VALUES ($current[1], $current[2], $current[3], $current[4], $current[5], $current[6], $current[7], $current[8], $desired[1], $desired[2], $desired[3], $desired[4], $desired[5], $desired[6], $desired[7], $desired[8], $sessionID)";
	}
	$result2 = mysqli_query($con, $query2);
	return true;
?>