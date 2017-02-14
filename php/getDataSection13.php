<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	$query = "SELECT orgsQuestion1, orgsQuestion2, orgsInvolved, orgsDesired, honorQuestion1, honorQuestion2, honorInvolved, honorDesired, natQuestion1, natQuestion2, natInvolved, natDesired FROM section13 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		$list = preg_split("/\+\/\+/", $row["orgsDesired"]);
		for($i=1; $i<6; $i++)
		{
			$data[$i] = $list[$i-1];
		}
		$data[6] = $list[5];
		$data["orgsQuestion1"] = $row["orgsQuestion1"];
		$data["orgsQuestion2"] = $row["orgsQuestion2"];
		$data["orgsInvolved"] = $row["orgsInvolved"];
		$data["honorQuestion1"] = $row["honorQuestion1"];
		$data["honorQuestion2"] = $row["honorQuestion2"];
		$data["honorInvolved"] = $row["honorInvolved"];
		$data["honorDesired"] = $row["honorDesired"];
		$data["natQuestion1"] = $row["natQuestion1"];
		$data["natQuestion2"] = $row["natQuestion2"];
		$data["natInvolved"] = $row["natInvolved"];
		$data["natDesired"] = $row["natDesired"];
		
	}
	echo json_encode($data);
	return json_encode($data);
?>