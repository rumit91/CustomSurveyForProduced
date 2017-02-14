<?php
    /**
	* Redirects to specified page 
	* 
	* @param string $page Page to redirect user to 
	* @return void 
	*/ 
	function redirect($page) { 
		header('Location: ' . $page); 
		exit(); 
	}
  
	/** 
	* Check login status 
	* 
	* @return boolean Login status 
	*/ 
	function checkLoginStatus() { 
		// If $_SESSION['logged_in'] is set, return the status 
		if (isset($_SESSION['id'])) { 
			return $_SESSION['id']; 
		} 
		return false; 
	}
	
	function checkIfDataExists($con, $section) {
		$sessionID = $_SESSION['id'];
		$query = "SELECT sessionID FROM $section WHERE sessionID = $sessionID";
		$result = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($result))
		{
			return true;
		}
		return false;
	}
	
	/** 
	* Set the left side navigation 
	* 
	*/ 
	function leftSideNav($section) {
		echo '<ul class="nav nav-tabs nav-stacked">';
		if($section == 1)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 1 - Demographics</span></a></li>';
		else
			echo '<li><a href="./section1.php" class="leftNavLink" section="1"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 1 - Demographics</span></a></li>';
		if($section == 2)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 2 - General Questions About Community</span></a></li>';
		else
			echo '<li><a href="./section2.php" class="leftNavLink" section="2"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 2 - General Questions About Community</span></a></li>';
		if($section == 3)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 3 - Using Communication and Collaboration Tools with PRODUCED Students</span></a></li>';
		else
			echo '<li><a href="./section3.php" class="leftNavLink" section="3"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 3 - Using Communication and Collaboration Tools with PRODUCED Students</span></a></li>';
		if($section == 4)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 4 - Current & Desired Level of Community among PRODUCED Students</span></a></li>';
		else
			echo '<li><a href="./section4.php" class="leftNavLink" section="4"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 4 - Current & Desired Level of Community among PRODUCED Students</span></a></li>';
		if($section == 5)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 5 - Increasing Opportunities for Community among PRODUCED Students</span></a></li>';
		else 
			echo '<li><a href="./section5.php" class="leftNavLink" section="5"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 5 - Increasing Opportunities for Community among PRODUCED Students</span></a></li>';
		if($section == 6)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 6 - Using Communication and Collaboration Tools with On-grounds Students</span></a></li>';
		else
			echo '<li><a href="./section6.php" class="leftNavLink" section="6"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 6 - Using Communication and Collaboration Tools with On-grounds Students</span></a></li>';
		if($section == 7)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 7 - Current and Desired Levels of Community with On-grounds Students</span></a></li>';
		else
			echo '<li><a href="./section7.php" class="leftNavLink" section="7"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 7 - Current and Desired Levels of Community with On-grounds Students</span></a></li>';
		if($section == 8)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 8 - Increasing Opportunities for Community among On-grounds Students</span></a></li>';
		else
			echo '<li><a href="./section8.php" class="leftNavLink" section="8"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 8 - Increasing Opportunities for Community among On-grounds Students</span></a></li>';
		if($section == 9)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 9 - Connecting to SEAS</span></a></li>';
		else
			echo '<li><a href="./section9.php" class="leftNavLink" section="9"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 9 - Connecting to SEAS</span></a></li>';
		if($section == 10)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 10 - Connecting to the Library</span></a></li>';
		else
			echo '<li><a href="./section10.php" class="leftNavLink" section="10"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 10 - Connecting to the Library</span></a></li>';
		if($section == 11)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 11 - Connecting to the Center for Engineering Career Development</span></a></li>';
		else
			echo '<li><a href="./section11.php" class="leftNavLink" section="11"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 11 - Connecting to the Center for Engineering Career Development</span></a></li>';
		if($section == 12)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 12 - Connecting to Organizations</span></a></li>';
		else
			echo '<li><a href="./section12.php" class="leftNavLink" section="12"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 12 - Connecting to Organizations</span></a></li>';
		if($section == 13)
			echo '<li class="active"><a><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 13 - Involvement in Organizations</span></a></li>';
		else
			echo '<li><a href="./section13.php" class="leftNavLink" section="13"><span class="chevron-float"><i class="icon-chevron-right"></i></span><span class="nav-item-text">Section 13 - Involvement in Organizations</span></a></li>';
		echo '</ul>';
	}
	
	function radioOptionsCommunity($index)
	{
		for($i=1; $i<7; $i++)
		{
			echo '<td class="center clickableRadio">';
				echo '<input type="radio" name="communityTable'.$index.'" class="community'.$index.'" value="'.$i.'">';
			echo '</td>';
		}
	}
	
	function radioOptionsOrganization($index)
	{
		for($i=1; $i<7; $i++)
		{
			echo '<td class="center clickableRadio">';
				echo '<input type="radio" name="organizationTable'.$index.'" class="organization'.$index.'" value="'.$i.'">';
			echo '</td>';
		}
	}
?>