<?php
	include './include/header.php';
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT q1current, q2current, q3current, q4current, q5current, q6current, q7current, q8current, q1desired, q2desired, q3desired, q4desired, q5desired, q6desired, q7desired, q8desired FROM section7 WHERE sessionID = $sessionID";
	
	$result = mysqli_query($con, $query);
	$data;
	while($row = mysqli_fetch_array($result))
	{
		for($i=1; $i<9; $i++)
		{
			$data["q".$i."current"] = $row['q'.$i.'current'];
		}
		for($j=1; $j<9; $j++)
		{
			$data["q".$j."desired"] = $row['q'.$j.'desired'];
		}
	}
	echo json_encode($data);
	return json_encode($data);
?>