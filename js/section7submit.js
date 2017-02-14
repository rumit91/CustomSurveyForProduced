function submitData(obj) {
	var current = new Array();
	var i = 1;
	for(i=1; i<9; i++)
	{
		current[i] = $(".q"+i+"current:checked").val();
		if(isNaN(current[i]))
		{
			current[i] = 0;
		}
	}
	var desired = new Array();
	var j = 1;
	for(j=1; j<9; j++)
	{
		desired[j] = $(".q"+j+"desired:checked").val();
		if(isNaN(desired[j]))
		{
			desired[j] = 0;
		}
	}
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/insertSection7.php", {current1: current[1], current2: current[2], current3: current[3], current4: current[4], current5: current[5], current6: current[6], current7: current[7], current8: current[8], desired1: desired[1], desired2: desired[2], desired3: desired[3], desired4: desired[4], desired5: desired[5], desired6: desired[6], desired7: desired[7], desired8: desired[8], sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection7.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			var i = 1;
			for(i=1; i<9; i++)
			{
				$("input.q"+i+"current[value='"+data["q"+i+"current"]+"']").attr('checked',true);
				$("input.q"+i+"current[value='"+data["q"+i+"current"]+"']").parent().addClass("selected-bg");
			}
			var j = 1;
			for(j=1; j<9; j++)
			{
				$("input.q"+j+"desired[value='"+data["q"+j+"desired"]+"']").attr('checked',true);
				$("input.q"+j+"desired[value='"+data["q"+j+"desired"]+"']").parent().addClass("selected-bg");
			}
			modal.modal('hide');
		}
	});	
}