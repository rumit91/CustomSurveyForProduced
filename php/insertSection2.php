<?php
	include './include/header.php';
	for($i=1; $i<44; $i++)
	{
		$community[$i] = $con->real_escape_string($_GET['community'.$i]);
	}
	$sessionID = $con->real_escape_string($_GET['sessionID']);
	
	$query = "SELECT sessionID FROM section2 WHERE sessionID = $sessionID";
	$result = mysqli_query($con, $query);
	$sessionExists = false;
	while($row = mysqli_fetch_array($result))
	{
		$sessionExists = true;
	}
	
	if($sessionExists) {
		$query2 = "UPDATE section2 SET community1 = $community[1], community2 = $community[2], community3 = $community[3], community4 = $community[4], community5 = $community[5], community6 = $community[6], community7 = $community[7], community8 = $community[8], community9 = $community[9], community10 = $community[10], community11 = $community[11], community12 = $community[12], community13 = $community[13], community14 = $community[14], community15 = $community[15], community16 = $community[16], community17 = $community[17], community18 = $community[18], community19 = $community[19], community20 = $community[20], community21 = $community[21], community22 = $community[22], community23 = $community[23], community24 = $community[24], community25 = $community[25], community26 = $community[26], community27 = $community[27], community28 = $community[28], community29 = $community[29], community30 = $community[30], community31 = $community[31], community32 = $community[32], community33 = $community[33], community34 = $community[34], community35 = $community[35], community36 = $community[36], community37 = $community[37], community38 = $community[38], community39 = $community[39], community40 = $community[40], community41 = $community[41], community42 = $community[42], community43 = $community[43] WHERE sessionID = $sessionID";
	} else {
		$query2 = "INSERT INTO section2 (community1, community2, community3, community4, community5, community6, community7, community8, community9, community10, community11, community12, community13, community14, community15, community16, community17, community18, community19, community20, community21, community22, community23, community24, community25, community26, community27, community28, community29, community30, community31, community32, community33, community34, community35, community36, community37, community38, community39, community40, community41, community42, community43, sessionID) VALUES ($community[1], $community[2], $community[3], $community[4], $community[5], $community[6], $community[7], $community[8], $community[9], $community[10], $community[11], $community[12], $community[13], $community[14], $community[15], $community[16], $community[17], $community[18], $community[19], $community[20], $community[21], $community[22], $community[23], $community[24], $community[25], $community[26], $community[27], $community[28], $community[29], $community[30], $community[31], $community[32], $community[33], $community[34], $community[35], $community[36], $community[37], $community[38], $community[39], $community[40], $community[41], $community[42], $community[43], $sessionID)";
	}
	$result2 = mysqli_query($con, $query2);
	return true;
?>