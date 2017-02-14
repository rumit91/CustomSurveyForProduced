<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section13"))
	{
		$dataExists = "yes";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PRODUCED Community - Student Survey</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Survey of the PRODUCED students for Erika Powell">
	<meta name="author" content="Timur Aleshin">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
	<!-- Bootstrap Files -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- My Files -->
	<link href="./css/mainstyle.css" rel="stylesheet" media="screen">
	<script src="./js/mainscript.js"></script>
	<script src="./js/jquery-ui-1.9.2.custom.js"></script>
</head>
<body sessionID="<?php echo $_SESSION['id']; ?>" data-exists="<?php echo $dataExists; ?>">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" id="surveyTitle">PRODUCED Community - Student Survey</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="span3">
				<?php leftSideNav(13); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 13 - Involvement in Organizations</h2>
				<p>This section asks you to consider your involvement in organizations that connect you to the wider field of engineering.</p>
				<div class="row">
					<div class="span4">
						<form>
							<fieldset>	
								<label>Are you involved in any engineering student organizations?</label>
								<label class="radio">
									<input type="radio" name="studentOrgs1" class="studentOrgsQuestion1" value="Yes"> Yes
								</label>
								<label class="radio">
									<input type="radio" name="studentOrgs1" class="studentOrgsQuestion1" value="No"> No
								</label>
								
							</fieldset>
						</form>
					</div>
					<div class="span4 hide" id="question2">
						<form>
							<fieldset>	
								<label>Would you like to be involved in any enginering student organizations?</label>
								<label class="radio">
									<input type="radio" name="studentOrgs2" class="studentOrgsQuestion2" value="Yes"> Yes
								</label>
								<label class="radio">
									<input type="radio" name="studentOrgs2" class="studentOrgsQuestion2" value="No"> No
								</label>
								
							</fieldset>
						</form>
					</div>
				</div>
				<div class="row hide" id="studentOrgsQuestion4">
					<div class="span6">
						<label>Please list the name(s) of any student organizations that you are a part of below:</label>
						<textarea rows="3" class="input-xxlarge" id="orgsInvolved"></textarea>
					</div>
				</div>
				<div id="studentOrgs" class="hide">
					<p>Below is a list of student organizations and societies available at U.Va. Select up to 5 that you would like to be connected to:</p>
					<div class="row">
						<div class="span9">
							<table class="table table-striped">
								<thead>
									<th></th>
									<th>Organization</th>
									<th>Description</th>
								</thead>
								<tbody>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="AlphaOmegaEpsilon">
										</td>
										<td class="span3">
											Alpha Omega Epsilon
										</td>
										<td>
											Alpha Omega Epsilon is a professional engineering sorority founded in 1983 that provides friendship, leadership and professionalism to all members of the organization, the community and our professions. The Virginia Chapter holds social events, professional workshops, study breaks, and community service events.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="SocietyofWomenEngineers">
										</td>
										<td>
											Society of Women Engineers
										</td>
										<td>
											The Society of Women Engineers is a non-profit professional organization whose purpose is to aid and promote women in engineering and encourage young women to consider pursuing an engineering education. The chapter at the University of Virginia serves as a center of information on women in engineering and provides services to its members, including workshops and scholarships.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="ESWB">
										</td>
										<td>
											Engineering Students without Borders
										</td>
										<td>
											Engineering Students without Borders is a group for students with an interest in engineering as it relates to global development. ESWB's mission is to inspire students to be proactive and contextually aware engineers who empower communities to attain their basic human needs in a sustainable manner. ESWB carries out both international and local projects.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="EngineeringStudentCouncil">
										</td>
										<td>
											Engineering Student Council
										</td>
										<td>
											Engineering Student Council represents the E-School and serves to provide a voice for the school's student body to the institution's administration and faculty, as well as the general public. The council develops social, intellectual, professional and service activities for the student body, and it strives to encourage SEAS school spirit pride. The members of the council are designated leaders and are entrusted with maintaining concern for students' opinions and needs throughout the SEAS.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="AmericanSocietyofMechanicalEngineers">
										</td>
										<td>
											American Society of Mechanical Engineers
										</td>
										<td>
											The American Society of Mechanical Engineers provides a richer experience outside the classroom for Mechanical Engineers at UVA through industry trips, conferences, professional contacts, speakers, design competitions, leadership opportunities, fund raising, connections to intemships, and social events. On the national level, ASME performs similar functions and publishes papers, fosters professional development, and creates standards.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="ASMTMSInternational">
										</td>
										<td>
											ASM/TMS International
										</td>
										<td>
											ASM/TMS, ajoint student chapter of the Minerals, Metals, and Materials Society, and ASM International, a society for materials engineers, promotes knowledge and fellowship among the Materials Science community at U.Va.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="NationalSocietyofBlackEngineers">
										</td>
										<td>
											National Society of Black Engineers
										</td>
										<td>
											National Society of Black Engineers is the largest student run organization in the nation, having over 10,000 members nationwide. Our mission is to "increase the number of eulturally responsible Black engineers who excel academically, succeed professionally, and positively impact the community.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="TauBetaPi">
										</td>
										<td>
											Tau Beta Pi
										</td>
										<td>
											Tau Beta Pi is the national engineering honor society. The U.Va. chapter's objectives are to recognize engineering students of outstanding scholarship and character, and foster a spirit of liberal culture among them.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="SolarCarTeam">
										</td>
										<td>
											Solar Car Team
										</td>
										<td>
											The Solar Car Team provides students with the opportunity to learn about business and technology through the design and construction of a solar-powered vehicle. The program serves as a partnership between students, the University and industry to maximize educational benefits and provides excellent technical, leadership and business experience.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="InstituteofElectrical&ElectronicsEngineers">
										</td>
										<td>
											Institute of Electrical & Electronics Engineers	
										</td>
										<td>
											The Institute of Electrical and Electronics Engineers helps advance global prosperity by promoting the engineering process of creating, developing, integrating, sharing, and applying knowledge about electrical and information technologies and sciences for the benefit of humanity and the profession. IEEE is the world's largest technical society, and is comprised of more than 320,000 members in about 150 countries around the globe. At the chapter level, we plan various speaking engagements, networking opportunities, presentations and field trips.
										</td>
									</tr>
									<tr>
										<td>
											<input type="checkbox" class="orgsCheckbox" value="Other">
										</td>
										<td>
											Other (please list) <br>A complete list of students organizations at UVA can be found <a href="http://www.seas.virginia.edu/students" target="_blank">here</a>.	
										</td>
										<td>
											<textarea rows="3" class="input-xxlarge" id="otherList"></textarea>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div id="section12-2" class="hide">
					<hr>
					<h2 class="sectionHeader">Connecting to the Engineering Profession through Honor Societies</h2>
					<p>This section asks you to consider the connection that you may or may not feel with respect to honor societies that connect you to the wider field of engineering.</p>
					<div class="row">
						<div class="span4">
							<form>
								<fieldset>	
									<label>Are you involved in an engineering honor society?</label>
									<label class="radio">
										<input type="radio" name="engrSociety1" class="honorQuestion1" value="Yes"> Yes
									</label>
									<label class="radio">
										<input type="radio" name="engrSociety1" class="honorQuestion1" value="No"> No
									</label>
								</fieldset>
							</form>
						</div>
						<div class="span5 hide" id="engrSocietyQuestion2">
							<form>
								<fieldset>	
									<label>Would you like to be involved in an enginerring honor society?</label>
									<label class="radio">
										<input type="radio" name="engrSociety2" class="honorQuestion2" value="Yes"> Yes
									</label>
									<label class="radio">
										<input type="radio" name="engrSociety2" class="honorQuestion2" value="No"> No
									</label>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="row hide" id="engrSocietyQuestion3">
						<div class="span6">
							<label>Please list the name(s) of any honor societies that you would like to be a part of below:</label>
							<textarea rows="3" class="input-xxlarge" id="honorDesired"></textarea>
						</div>
					</div>
					<div class="row hide" id="engrSocietyQuestion4">
						<div class="span6">
							<label>Please list the name(s) of any honor societies that you are a part of below:</label>
							<textarea rows="3" class="input-xxlarge" id="honorInvolved"></textarea>
						</div>
					</div>
				</div>
				<div id="section12-3" class="hide">
					<hr>
					<h2 class="sectionHeader">Connecting to the Engineering Profession through National or Statewide Organizations</h2>
					<p>This section asks you to consider the connection that you may or may not feel with respect to national or statewide organizations that connect you to the wider profession of engineering.</p>
					<div class="row">
						<div class="span4">
							<form>
								<fieldset>	
									<label>Are you involved in any national or statewide engineering professional organizations?</label>
									<label class="radio">
										<input type="radio" name="natOrgs1" class="natOrgsQuestions1" value="Yes"> Yes
									</label>
									<label class="radio">
										<input type="radio" name="natOrgs1" class="natOrgsQuestions1" value="No"> No
									</label>
								</fieldset>
							</form>
						</div>
						<div class="span4 hide" id="natOrgsQuestion2">
							<form>
								<fieldset>	
									<label>Would you like to be involved in any national or statewide engineering professional organizations?</label>
									<label class="radio">
										<input type="radio" name="natOrgs2" class="natOrgsQuestions2" value="Yes"> Yes
									</label>
									<label class="radio">
										<input type="radio" name="natOrgs2" class="natOrgsQuestions2" value="No"> No
									</label>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="row hide" id="natOrgsQuestion3">
						<div class="span6">
							<label>Please list the name(s) of any national or statewide engineering professional organizations that you would like to be involved with below:</label>
							<textarea rows="3" class="input-xxlarge" id="natDesired"></textarea>
						</div>
					</div>
					<div class="row hide" id="natOrgsQuestion4">
						<div class="span6">
							<label>Please list the name(s) of any national or statewide engineering professional organizations that you are a part of below:</label>
							<textarea rows="3" class="input-xxlarge" id="natInvolved"></textarea>
						</div>
					</div>
				</div>
				<div id="section12-4" class="hide">
					<hr>				
					<div class="row">
						<div class="span2 offset7">
							<a class="btn btn-primary saveandcontinue" section="13">Save and Continue</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="loadingModal">
		<div class="modal-body">
			<div class="progress progress-striped active">
				<div class="bar" style="width: 100%;"></div>
			</div>
		 </div>
	</div>
	<script src="./js/section13submit.js"></script>
<body>
</html>