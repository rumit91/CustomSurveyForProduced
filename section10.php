<?php
	include './php/include/header.php';
	include './php/include/functions.php';
	session_start();
	if(checkLoginStatus() == false)
	{
		redirect($redirect_url);
	}
	$dataExists = "no";
	if(checkIfDataExists($con, "section10"))
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
				<?php leftSideNav(10); ?>
			</div>
			<div class="span9">
				<h2 class="sectionHeader">Section 10 - Connecting to the Library</h2>
				<p>This section asks you to consider the connection that you may or may not feel with respect to the library.</p>
				<div class="row">
					<div class="span4">
						<form>
							<fieldset>	
								<label>About how often per semester do you make use of the resources available through the library?</label>
								<label class="radio">
									<input type="radio" name="SEASevents" class="frequency" value="1"> Never
								</label>
								<label class="radio">
									<input type="radio" name="SEASevents" class="frequency" value="2"> 1-3 times per semester
								</label>
								<label class="radio">
									<input type="radio" name="SEASevents" class="frequency" value="3"> 4 or more times per semester
								</label>
								
							</fieldset>
						</form>
					</div>
				</div>
				<p>Below is a list of skills and topics related to the library. Please indicate whether you are able to do the following tasks. Then, rank order the importance of each, from #1 being the most important item to #5 being the least important item, with respect helping you feel connected to the library.</p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="span7">Task</th>
							<th colspan="3">Can you perform this task?</th>
							<th class="section10rank NAborder">Rank the Importance</th>
						</tr>
					</thead>
					<tbody>
						<tr class="questionRow">
							<td>
								<p>Use the online engineering subject guides</p>
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-1" class="task1ability" value="1">Yes
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-1" class="task1ability" value="2">No
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-1" class="task1ability" value="3">Somewhat
							</td>
							<td class="NAborder section10rank">
								<div class="control-group">
									<select class="span1" id="task1rank">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="questionRow">
							<td>
								<p>Access journals and books from an off-grounds location (e.g. UVaAnywhere, Interlibrary Loan (ILL), digitizing resources, ask a librarian, etc..)</p>
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-2" class="task2ability" value="1">Yes
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-2" class="task2ability" value="2">No
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-2" class="task2ability" value="3">Somewhat
							</td>
							<td class="NAborder section10rank">
								<div class="control-group">
									<select class="span1" id="task2rank">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="questionRow">
							<td>
								<p>Use engineering databases (e.g. Compendex, Scirus, TechXtra, Science.gov, Web of Science, etc...)</p>
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-3" class="task3ability" value="1">Yes
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-3" class="task3ability" value="2">No
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-3" class="task3ability" value="3">Somewhat
							</td>
							<td class="NAborder section10rank">
								<div class="control-group">
									<select class="span1" id="task3rank">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="questionRow">
							<td>
								<p>Employ research skills (e.g. choosing a research topic, finding reliable sources, citing sources, etc..)</p>
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-4" class="task4ability" value="1">Yes
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-4" class="task4ability" value="2">No
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-4" class="task4ability" value="3">Somewhat
							</td>
							<td class="NAborder section10rank">
								<div class="control-group">
									<select class="span1" id="task4rank">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="questionRow">
							<td>
								<p>Use reference management tools (e.g. RefWorks, Mendeley, etc...)</p>
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-5" class="task5ability" value="1">Yes
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-5" class="task5ability" value="2">No
							</td>
							<td class="clickableRadio">
								<input type="radio" name="section10skills-5" class="task5ability" value="3">Somewhat
							</td>
							<td class="NAborder section10rank">
								<div class="control-group">
									<select class="span1" id="task5rank">
										<option>---</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<div class="row">
					<div class="span6">
						<label>Please list or describe any additional events or types of resources that the library could make available to you as a PRODUCED student:</label>
						<textarea rows="5" class="input-xxlarge" id="additionalTopics"></textarea>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="span2 offset7">
						<a class="btn btn-primary saveandcontinue" section="10">Save and Continue</a>
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
	<script src="./js/section10submit.js"></script>
<body>
</html>