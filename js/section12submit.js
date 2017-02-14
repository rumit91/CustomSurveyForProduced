function submitData(obj) {
	var organization = new Array();
	var i = 1;
	for(i=1; i<13; i++)
	{
		organization[i] = $(".organization"+i+":checked").val();
		if(isNaN(organization[i]))
		{
			organization[i] = 0;
		}
	}
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/insertSection12.php", {organization1: organization[1], organization2: organization[2], organization3: organization[3], organization4: organization[4], organization5: organization[5], organization6: organization[6], organization7: organization[7], organization8: organization[8], organization9: organization[9], organization10: organization[10], organization11: organization[11], organization12: organization[12], sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection12.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			for(var i=1; i<13; i++)
			{
				$("input.organization"+i+"[value='"+data["organization"+i]+"']").attr('checked','checked');
				$("input.organization"+i+"[value='"+data["organization"+i]+"']").parent().addClass("selected-bg");
			}
			modal.modal('hide');
		}
	});	
}