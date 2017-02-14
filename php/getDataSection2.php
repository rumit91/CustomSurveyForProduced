<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT community1, community2, community3, community4, community5, community6, community7, community8, community9, community10, community11, community12, community13, community14, community15, community16, community17, community18, community19, community20, community21, community22, community23, community24, community25, community26, community27, community28, community29, community30, community31, community32, community33, community34, community35, community36, community37, community38, community39, community40, community41, community42, community43 FROM section2 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		for($i = 1; $i<44; $i++)
		{
			$data["community".$i] = $row["community".$i];
		}
	}
	echo json_encode($data);
	return json_encode($data);
?>