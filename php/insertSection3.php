<?php
	include './include/header.php';
	$bbcollab = $con->real_escape_string($_GET['bbcollab']);
	$lync = $con->real_escape_string($_GET['lync']);
	$skype = $con->real_escape_string($_GET['skype']);
	$socialMedia = $con->real_escape_string($_GET['socialMedia']);
	$google = $con->real_escape_string($_GET['google']);
	$email = $con->real_escape_string($_GET['email']);
	$additionalIdeas = $con->real_escape_string($_GET['additionalIdeas']);
	$sessionID = $con->real_escape_string($_GET['sessionID']);

	$query = "SELECT sessionID FROM section3 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists)
		$query2 = "UPDATE section3 SET bbcollab = $bbcollab, lync = $lync, skype = $skype, socialMedia = $socialMedia, google = $google, email = $email, additionalIdeas = '".$additionalIdeas."' WHERE sessionID = $sessionID";
	else
		$query2 = "INSERT INTO section3 (sessionID, bbcollab, lync, skype, socialMedia, google, email, additionalIdeas) VALUES ($sessionID, $bbcollab, $lync, $skype, $socialMedia, $google, $email, '".$additionalIdeas."')";
	$result2 = mysqli_query($con, $query2);
	return true;
?>