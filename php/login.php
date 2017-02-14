<?php 
	// Include required MySQL configuration file and functions 
	require_once('./include/header.php'); 
	require_once('./include/functions.php'); 
	  
	// Start session 
	session_start(); 
	unset($_SESSION['id']); 
	  
	// Check if user is already logged in 
	if (isset($_SESSION['id'])) { 
		// If user is already logged in, redirect to main page 
		redirect('../intro.php?alreadyloggedin'); 
	} else { 
		// Make sure that user submitted an email/password
		if ( (!isset($_POST['email'])) || (!isset($_POST['password'])) ) { 
			redirect('../login.html?nosubmit=1'); 
		}
		// Escape any unsafe characters before querying database 
		$email = $con->real_escape_string($_POST['email']); 
		$password = $con->real_escape_string($_POST['password']); 

		// Construct SQL statement for query & execute 
		$query = "SELECT email, password, tookSurvey, sessionID FROM login WHERE email = '" . $email . "' AND password = '" . md5($password) . "'";
		$result = mysqli_query($con, $query); 

		// If one row is returned, email and password are valid 
		if (is_object($result) && $result->num_rows == 1) { 
			while($row = mysqli_fetch_array($result)) {
				$email = $row['email'];
				$sessionID = $row['sessionID'];
				if($row['tookSurvey'] == 1)	{
					redirect('../login.html?alreadyTook=1'); 
				}
				else if($sessionID > 0)
				{
					$_SESSION['id'] = $sessionID;
					$_SESSION['email'] = $email;
					redirect('../intro.php');
				}
				else {
					$startTime = time();
					$query2 = "INSERT INTO sessions (startTime) VALUES ($startTime)";
					$result2 = mysqli_query($con, $query2);
					$sessionID = json_encode(mysqli_insert_id($con));
					$_SESSION['id'] = $sessionID;
					$_SESSION['email'] = $email;
					$query3 = "UPDATE login SET sessionID=".$sessionID." WHERE email='".$email."'";
					$result3 = mysqli_query($con, $query3);
					redirect('../intro.php');
				}
			}
		} else { 
			// If number of rows returned is not one, redirect back to login screen 
			redirect('../login.html?notfoundinDB=1'); 
		} 
	} 
?> 
