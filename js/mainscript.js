function GetURLparameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}
function fixNavChevrons() {
	$("span.chevron-float").each(function (i) {
		var wantedHeight = $(this).parent().height();
		$(this).css("line-height", wantedHeight+"px");
	});
}
function fixTableRadios() {
	$("td.center").each(function (i) {
		var wantedHeight = $(this).parent().height()-20;
		$(this).css("line-height", wantedHeight+"px");
	});
}

function checkTableHeaderPosition() {
	if($("thead#tableOneHeader").length > 0)
	{
		var headerPosition = $("thead#tableOneHeader").offset();
		var scrollTop = $(window).scrollTop();
		if((scrollTop+41) > headerPosition.top)
		{
			$("#persistentTableHeader").removeClass("hide");
			$("#persistentTableHeader").offset({ top: 41+scrollTop, left: headerPosition.left });
			$("th#spacer").width($("th#empty").width());
		}
		else
		{
			$("#persistentTableHeader").addClass("hide");
		}
	}
	if($("thead#tableFourHeader").length > 0)
	{
		var legendRowPosition = $("tr#legendRow").offset();
		var scrollTop = $(window).scrollTop();
		if((scrollTop+41) > legendRowPosition.top)
		{
			$("p.legendItem").each(function () {
				var i = $(this).attr("legnum");
				var j = $(this).attr("legitem");
				var itemMidpoint = $(this).find("span").width()/2;
				var legendRowItem1scale1 = $("th#scale-"+i+"-"+j).offset();
				$(this).css("position", "absolute");
				$(this).css("top", scrollTop+152-itemMidpoint);
				$(this).css("left", legendRowItem1scale1.left-itemMidpoint+19);
				$(this).css("z-index",2);
			});
			$("div.legendBackground").each(function () {
				var i = $(this).attr("legnum");
				var legendRowItem1scale1 = $("th#scale-"+i+"-1").offset();
				$(this).css("position", "absolute");
				$(this).css("top", scrollTop+40);
				$(this).css("left", legendRowItem1scale1.left);
				$(this).removeClass("hide");
			});
		}
		else
		{
			$("p.legendItem").each(function () {
				var i = $(this).attr("legnum");
				var j = $(this).attr("legitem");
				var itemMidpoint = $(this).find("span").width()/2;
				var legendRowItem1scale1 = $("th#scale-"+i+"-"+j).offset();
				$(this).css("position", "absolute");
				$(this).css("top", legendRowItem1scale1.top-itemMidpoint-28);
				$(this).css("left", legendRowItem1scale1.left-itemMidpoint+19);
			});
			$("div.legendBackground").addClass("hide");
		}
		
	}
}
function fixLegend() {	
	if($("thead#tableFourHeader").length > 0)
	{
		$("p.legendItem").each(function () {
			var i = $(this).attr("legnum");
			var j = $(this).attr("legitem");
			var itemMidpoint = $(this).find("span").width()/2;
			var legendRowItem1scale1 = $("th#scale-"+i+"-"+j).offset();
			$(this).css("position", "absolute");
			$(this).css("top", legendRowItem1scale1.top-itemMidpoint-28);
			$(this).css("left", legendRowItem1scale1.left-itemMidpoint+19);
		});
	}
}
function nextPage(obj) {
	if(!isNaN(obj))
	{
		window.location = "./section" + obj + ".php";
	}
	if( obj.attr("section") == 13 )
	{
		window.location = "./lastPage.php";
	}
	else if( obj.attr("section") == "lastPage")
	{
		window.location = "./thankYou.php";
	}
	else
	{
		var nextSection = Number( obj.attr("section"))+1;
		window.location = "./section" + nextSection + ".php";
	}
}

function isComplete(sectionNum) {
	var complete = true;
	switch(Number(sectionNum))
	{
		case 1:
			//quick reset of borders
			$("select#gender").removeClass("input-error");
			$("select#age").removeClass("input-error");
			$("select#employment").removeClass("input-error");
			$("select#enrollment").removeClass("input-error");
			//check for error
			if($("select#gender").val() == "----") {
				$("select#gender").addClass("input-error");
				complete = false;
			}
			if($("select#age").val() == "----") {
				$("select#age").addClass("input-error");
				complete = false;
			}
			if($("select#employment").val() == "----") {
				$("select#employment").addClass("input-error");
				complete = false;
			}
			if($("select#enrollment").val() == "----") {
				$("select#enrollment").addClass("input-error");
				complete = false;
			}
		break;
		case 2:
			//quick reset of borders
			for(var q=1; q<44; q++)
			{
				$("input.community"+q).parent().parent().removeClass("input-error-bg");
			}
			for(var q=1; q<44; q++)
			{
				if($("input.community"+q+":checked").length == 0)
				{
					$("input.community"+q+":not(:checked)").parent().parent().addClass("input-error-bg");
					complete = false;
				}
			}
		break;
		case 3:
			//reset 
			$("tr.commToolRow").removeClass("input-error-bg");
			if($("input.bbcollab:checked").length == 0)
			{
				$("input.bbcollab:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.lync:checked").length == 0)
			{
				$("input.lync:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.skype:checked").length == 0)
			{
				$("input.skype:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.socialMedia:checked").length == 0)
			{
				$("input.socialMedia:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.google:checked").length == 0)
			{
				$("input.google:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.email:checked").length == 0)
			{
				$("input.email:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
		break;
		case 4:
			//quick reset
			$("tr.questionRow").removeClass("input-error-right");
			$("tr.questionRow").removeClass("input-error-left");
			for(var q=1; q<9; q++)
			{
				if($("input.q"+q+"current:checked").length == 0)
				{
					$("input.q"+q+"current:not(:checked)").parent().parent().addClass("input-error-left");
					complete = false;
				}
				if($("input.q"+q+"desired:checked").length == 0)
				{
					$("input.q"+q+"desired:not(:checked)").parent().parent().addClass("input-error-right");
					complete = false;
				}
			}
		break;
		case 6:
			//reset 
			$("tr.commToolRow").removeClass("input-error-bg");
			if($("input.bbcollab:checked").length == 0)
			{
				$("input.bbcollab:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.lync:checked").length == 0)
			{
				$("input.lync:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.skype:checked").length == 0)
			{
				$("input.skype:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.socialMedia:checked").length == 0)
			{
				$("input.socialMedia:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.google:checked").length == 0)
			{
				$("input.google:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.email:checked").length == 0)
			{
				$("input.email:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
		break;
		case 7:
			//quick reset
			$("tr.questionRow").removeClass("input-error-right");
			$("tr.questionRow").removeClass("input-error-left");
			for(var q=1; q<9; q++)
			{
				if($("input.q"+q+"current:checked").length == 0)
				{
					$("input.q"+q+"current:not(:checked)").parent().parent().addClass("input-error-left");
					complete = false;
				}
				if($("input.q"+q+"desired:checked").length == 0)
				{
					$("input.q"+q+"desired:not(:checked)").parent().parent().addClass("input-error-right");
					complete = false;
				}
			}
		break;
		case 9:
			$("input.frequency").parent().parent().removeClass("input-error-bg");
			if($("input.frequency:checked").length == 0)
			{
				$("input.frequency:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
		break;
		case 10:
			$("input.frequency").parent().parent().removeClass("input-error-bg");
			if($("input.frequency:checked").length == 0)
			{
				$("input.frequency:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			$("tr.questionRow").removeClass("input-error-right");
			for(var q=1; q<6; q++)
			{
				if($("input.task"+q+"ability:checked").length == 0)
				{
					$("input.task"+q+"ability:not(:checked)").parent().parent().addClass("input-error-right");
					complete = false;
				}
				if($("#task"+q+"rank").val() == "---")
				{
					$("#task"+q+"rank").parent().parent().parent().addClass("input-error-right");
					complete = false;
				}
			}
			if($("div.control-group.error").length > 0)
			{
				$("div.control-group.error").parent().parent().addClass("input-error-right");
				alert("Please check your ranks. Each rank can only be assigned once.");
				complete = false;
			}
		break;
		case 11:
			$("input.frequency").parent().parent().removeClass("input-error-bg");
			if($("input.frequency:checked").length == 0)
			{
				$("input.frequency:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
		break;
		case 12:
			//quick reset of borders
			for(var q=1; q<13; q++)
			{
				$("input.organization"+q).parent().parent().removeClass("input-error-bg");
			}
			for(var q=1; q<13; q++)
			{
				if($("input.organization"+q+":checked").length == 0)
				{
					$("input.organization"+q+":not(:checked)").parent().parent().addClass("input-error-bg");
					complete = false;
				}
			}
		break;
		case 13:
			$("input.studentOrgsQuestion1").parent().parent().removeClass("input-error-bg");
			$("input.honorQuestion1").parent().parent().removeClass("input-error-bg");
			$("input.natOrgsQuestions1").parent().parent().removeClass("input-error-bg");
			if($("input.studentOrgsQuestion1:checked").length == 0)
			{
				$("input.studentOrgsQuestion1:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.honorQuestion1:checked").length == 0)
			{
				$("input.honorQuestion1:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
			if($("input.natOrgsQuestions1:checked").length == 0)
			{
				$("input.natOrgsQuestions1:not(:checked)").parent().parent().addClass("input-error-bg");
				complete = false;
			}
		break;
	}
	return complete;
}

$(document).ready(function () {
	// Dummy login info for demo 
	$("input#email").val("timur.aleshin@outlook.com");
	$("input#password").val("password");

	$(".nonIEversion").removeClass("hide");
	$(".IEversion").addClass("hide");
	fixNavChevrons();
	fixTableRadios();
	fixLegend();
	$(window).resize(function() {
		fixNavChevrons();
		fixTableRadios();
		fixLegend();
	});
	var clonedHeaderRow;
	if($("#sortable").length > 0)
	{
		$( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
	}
	
	//when scrolling is active
	//check the position of our table header
	$(window).scroll(checkTableHeaderPosition);
	
	$("td.clickableRadio").hover(function () {
		$(this).addClass("hover-bg");
	},function () {
		$(this).removeClass("hover-bg");
	});
	$("td.clickableRadio").click(function () {
		if($(this).find("input[type='radio']").is(":checked"))
		{
			$(this).find("input[type='radio']").removeAttr('checked');
			$(this).removeClass("selected-bg");
		}
		else
		{
			$(this).find("input[type='radio']").prop('checked',"checked");
			$(this).addClass("selected-bg");
			var radioClass = $(this).find("input[type='radio']").attr("class");
			$(this).siblings().find("."+radioClass).parent().removeClass("selected-bg");
		}
	});
	$("input[type='radio']").change(function (evt) {
		if(!$(this).hasClass("frequency") && !$(this).hasClass("studentOrgsQuestion1") && !$(this).hasClass("studentOrgsQuestion2") && !$(this).hasClass("honorQuestion1") && !$(this).hasClass("honorQuestion2") && !$(this).hasClass("natOrgsQuestions1") && !$(this).hasClass("natOrgsQuestions2"))
		{
			if($(this).is(":checked"))
			{
				$(this).removeAttr('checked');
				$(this).parent().removeClass("selected-bg");
			}
			else
			{
				$(this).prop('checked',"checked");
				$(this).parent().addClass("selected-bg");
				var radioClass = $(this).attr("class");
				$(this).parent().siblings().find("."+radioClass).parent().removeClass("selected-bg");
			}
			evt.stopPropagation();
		}
	});
	
	//Section 13 - STUDENT ORG QUESTIONS
	$("input.studentOrgsQuestion1").change(function() {
		if($(this).is(':checked'))
		{
			if( $(this).val() == "No") {
				$("div#question2").removeClass("hide");
				$("div#studentOrgsQuestion4").addClass("hide");
			}
			else {
				$("div#question2").addClass("hide");
				$("div#studentOrgs").addClass("hide");
				$("div#studentOrgsQuestion4").removeClass("hide");
				$("div#section12-2").removeClass("hide");
			}			
		}
	});
	$("input.studentOrgsQuestion2").change(function() {
		if($(this).is(':checked'))
		{
			if( $(this).val() == "Yes")
				$("div#studentOrgs").removeClass("hide");
			else
				$("div#studentOrgs").addClass("hide");
			$("div#section12-2").removeClass("hide");
		}
	});
	//Section 13 - ENGR SOCIETY QUESTIONS
	$("input.honorQuestion1").change(function() {
		if($(this).is(':checked'))
		{
			if( $(this).val() == "No") {
				$("div#engrSocietyQuestion2").removeClass("hide");
				$("div#engrSocietyQuestion4").addClass("hide");
			}
			else {
				$("div#engrSocietyQuestion2").addClass("hide");
				$("div#engrSocietyQuestion3").addClass("hide");
				$("div#engrSocietyQuestion4").removeClass("hide");
				$("div#section12-3").removeClass("hide");
			}			
			
		}
	});
	$("input.honorQuestion2").change(function() {
		if($(this).is(':checked'))
		{	
			if( $(this).val() == "Yes")
				$("div#engrSocietyQuestion3").removeClass("hide");
			else
				$("div#engrSocietyQuestion3").addClass("hide");
			$("div#section12-3").removeClass("hide");
		}
	});
	//Section 13	 - NAT ORGS QUESTIONS
	$("input.natOrgsQuestions1").change(function() {
		if($(this).is(':checked'))
		{
			if( $(this).val() == "No") {
				$("div#natOrgsQuestion2").removeClass("hide");
				$("div#natOrgsQuestion4").addClass("hide");
			}
			else {
				$("div#natOrgsQuestion2").addClass("hide");
				$("div#natOrgsQuestion3").addClass("hide");
				$("div#natOrgsQuestion4").removeClass("hide");
				$("div#section12-4").removeClass("hide");
			}
		}
	});
	$("input.natOrgsQuestions2").change(function() {
		if($(this).is(':checked'))
		{
			if( $(this).val() == "Yes")
				$("div#natOrgsQuestion3").removeClass("hide");
			else
				$("div#natOrgsQuestion3").addClass("hide");
			$("div#section12-4").removeClass("hide");
		}
	});
	//Section 12 - Make sure only 5 are selected
	$("input:checkbox").change(function() {
		if($("input:checkbox:checked").length >= 5)
		{
			$("input:checkbox:not(:checked)").attr("disabled", true);
		}
		else
		{
			$("input:checkbox:not(:checked)").attr("disabled", false);
		}
	});
	
	//section 10 - the rank input error marking
	$("td.section10rank").change(function () {
		$("td.section10rank").find("div.control-group").removeClass("error");
		$("td.section10rank").removeClass("mark");
		for(var i=1; i<6; i++)
		{
			var numMarked = 0;
			$("td.section10rank").each(function () {
				if($(this).find("select").val() == i)
				{
					$(this).addClass("mark");
					numMarked++;
				}
			});
			if(numMarked > 1) {
				$("td.section10rank.mark").find("div.control-group").addClass("error");
			}
			$("td.section10rank").removeClass("mark");
		}
	});
	
	//loading modal
	$('#loadingModal').modal({
		keyboard: false,
		show: true,
	});
	//check for data
	var dataExists = $("body").attr("data-exists");
	var lastPage = $("body").attr("last-page")
	if(dataExists == "no" || lastPage == "yes")
	{
		//if no data exists then just hide the modal and we are all good
		$('#loadingModal').modal('hide');
	}
	else if(dataExists == "yes")
	{
		//get the data
		var modal = $('#loadingModal');
		getData(modal);
	}
	
	//save and continue button 
	$("a.saveandcontinue").click(function () {
		var sectionNum = $(this).attr("section");
		if(isComplete(sectionNum))
		{
			$('#loadingModal').modal('show');
			var obj = $(this);
			submitData(obj);
		}
		else
		{
			alert("We really appreciate your feedback!  Please complete this current section before moving to another section.  If you need to stop and complete this rest of the survey at a later, please finish this section and click 'Save and Continue'.  Your responses will be saved and available to you the next time you log in.");
			return false;
		}
	});
	
	
	//tooltips for sections 5, 8, 9, and 11
	$("[rel='tooltip']").tooltip({
		placement: "left",
		html: true,
		title: "Most<br>Important",
		selector: "#mostImportant",
		trigger: "manual",
	});
	$("ul#sortable").hover(function (){
		$("[rel='tooltip']").tooltip('show');
	}, function () {
		$("[rel='tooltip']").tooltip('hide');
	});
	
	var alreadyTook = GetURLparameter("alreadyTook");
	var nosubmit = GetURLparameter("nosubmit");
	var notfoundinDB = GetURLparameter("notfoundinDB");
	if(alreadyTook == 1)
	{
		$("#loginAlert").text("Our records indicate that you have already taken this survey. If you think this is a mistake, please contact the survey administers.");
		$("#loginAlert").removeClass("hide");
		$("#loginAlert").removeClass("alert-error");
		$("#loginAlert").addClass("alert-warning");
	}
	else if(nosubmit == 1)
	{
		$("#loginAlert").text("Please fill out all the fields.");
		$("#loginAlert").removeClass("hide");
	}
	else if(notfoundinDB == 1)
	{
		$("#loginAlert").text("Login error. Please double check your login information. If this error persists, please contact the survey administers.");
		$("#loginAlert").removeClass("hide");
	}
	
	
	//Check to see if all data is inserted before moving to a section
	$("a.leftNavLink").click(function ()  {
		var sectionNum = $("a.saveandcontinue").attr("section");
		//save the data
		$('#loadingModal').modal('show');
		var obj = sectionNum;
		submitData(obj);
		//allow to go to the next section
	});
});