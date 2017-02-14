<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT bbcollab, lync, skype, socialMedia, google, email, additionalIdeas FROM section3 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		$data["bbcollab"] = $row["bbcollab"];
		$data["lync"] = $row["lync"];
		$data["skype"] = $row["skype"];
		$data["socialMedia"] = $row["socialMedia"];
		$data["google"] = $row["google"];
		$data["email"] = $row["email"];
		$data["additionalIdeas"] = $row["additionalIdeas"];
	}
	echo json_encode($data);
	return json_encode($data);
?>