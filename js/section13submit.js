function submitData(obj) {
	var orgsQuestion1 = $(".studentOrgsQuestion1:checked").val();
	var orgsQuestion2 = $(".studentOrgsQuestion2:checked").val();
	var orgsInvolved = $("textarea#orgsInvolved").val();
	var orgsDesired = "";
	$("input.orgsCheckbox:checked").each(function () {
		if($(this).val() == "Other")
		{
			orgsDesired += "Other+/+";
			orgsDesired += $("textarea#otherList").val();
			orgsDesired += "+/+";
		}
		else
		{
			orgsDesired += $(this).val();
			orgsDesired += "+/+";
		}
	});
	orgsDesired = orgsDesired.substring(0, orgsDesired.length-3);
	var honorQuestion1 = $(".honorQuestion1:checked").val();
	var honorQuestion2 = $(".honorQuestion2:checked").val();
	var honorInvolved = $("#honorInvolved").val();
	var honorDesired = $("#honorDesired").val();
	
	var natQuestion1 = $(".natOrgsQuestions1:checked").val();
	var natQuestion2 = $(".natOrgsQuestions2:checked").val();
	var natInvolved = $("#natInvolved").val();
	var natDesired = $("#natDesired").val();
	
	var sessionID = $("body").attr("sessionID");
	
	$.getJSON("./php/insertSection13.php", {orgsQuestion1: orgsQuestion1, orgsQuestion2: orgsQuestion2, orgsInvolved: orgsInvolved, orgsDesired: orgsDesired, honorQuestion1: honorQuestion1, honorQuestion2: honorQuestion2, honorInvolved: honorInvolved, honorDesired: honorDesired, natQuestion1: natQuestion1, natQuestion2: natQuestion2, natInvolved: natInvolved, natDesired: natDesired, sessionID: sessionID}, function (complete) {
		//check that all the sections are filled out
		var allSectionsComplete = true;
		for(var i=1; i<13; i++)
		{
			if(complete[i] == 0)
			{
				allSectionsComplete = false;
				$("a.leftNavLink[section='"+i+"']").css("color", "#b94a48");
			}
		}
		if(allSectionsComplete)
		{
			nextPage(obj);
		}
		else
		{
			$('#loadingModal').modal('hide');
			alert("Please return to the sections marked in the left panel to finish up this survey.");
		}
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection13.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			//student orgs
			$("input.studentOrgsQuestion1[value='"+data["orgsQuestion1"]+"']").attr('checked',true);
			$("input.studentOrgsQuestion2[value='"+data["orgsQuestion2"]+"']").attr('checked',true);
			$("#orgsInvolved").val(data["orgsInvolved"]);
			var i = 1;
			for(i=1; i<6; i++)
			{
				$("input.orgsCheckbox[value='"+data[i]+"']").attr('checked',true);
			}
			if(data[6] != "")
				$("#otherList").val(data[6]);
			
			//honor societies
			$("input.honorQuestion1[value='"+data["honorQuestion1"]+"']").attr('checked',true);
			$("input.honorQuestion2[value='"+data["honorQuestion2"]+"']").attr('checked',true);
			$("#honorDesired").val(data["honorDesired"]);
			$("#honorInvolved").val(data["honorInvolved"]);
			
			//national organizations
			$("input.natOrgsQuestions1[value='"+data["natQuestion1"]+"']").attr('checked',true);
			$("input.natOrgsQuestions2[value='"+data["natQuestion2"]+"']").attr('checked',true);
			$("#natDesired").val(data["natDesired"]);
			$("#natInvolved").val(data["natInvolved"]);
			
			
			//make sure the right things are shown
			if(data["orgsQuestion2"] == "Yes")
				$("#studentOrgs").removeClass("hide");
			if(data["orgsInvolved"] != "")
				$("#studentOrgsQuestion4").removeClass("hide");
			$("#section12-2").removeClass("hide");
			$("#section12-3").removeClass("hide");
			$("#section12-4").removeClass("hide");
			if(data["orgsQuestion2"] == "Yes" || data["orgsQuestion2"] == "No")
				$("#question2").removeClass("hide");
			if(data["honorDesired"] != "")
				$("#engrSocietyQuestion3").removeClass("hide");
			if(data["honorInvolved"] != "")
				$("#engrSocietyQuestion4").removeClass("hide");
			if(data["honorQuestion2"] == "Yes" || data["honorQuestion2"] == "No")
				$("#engrSocietyQuestion2").removeClass("hide");
			if(data["natDesired"] != "")
				$("#natOrgsQuestion3").removeClass("hide");
			if(data["natInvolved"] != "")
				$("#natOrgsQuestion4").removeClass("hide");
			if(data["natQuestion2"] == "Yes" || data["natQuestion2"] == "No")
				$("#natOrgsQuestion2").removeClass("hide");
				
			//hide the modal
			modal.modal('hide');
		}
	});	
}