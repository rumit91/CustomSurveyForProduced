function submitData(obj) {
	var frequency = $(".frequency:checked").val();
	var taskAbility = new Array();
	var i = 1;
	for(i=1; i<6; i++)
	{
		taskAbility[i] = $(".task"+i+"ability:checked").val();
	}
	var taskRank = new Array();
	var j = 1;
	for(j=1; j<6; j++)
	{
		taskRank[j] = $("#task"+j+"rank").val();
		if(isNaN(taskRank[j]))
		{
			taskRank[j] = 0;
		}
	}
	var additionalTopics = $("textarea#additionalTopics").val();
	var sessionID = $("body").attr("sessionID");
	
	$.getJSON("./php/insertSection10.php", {frequency: frequency, taskAbility1: taskAbility[1], taskAbility2: taskAbility[2], taskAbility3: taskAbility[3], taskAbility4: taskAbility[4], taskAbility5: taskAbility[5], taskRank1: taskRank[1], taskRank2: taskRank[2], taskRank3: taskRank[3], taskRank4: taskRank[4], taskRank5: taskRank[5], additionalTopics: additionalTopics, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection10.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			$("#additionalTopics").val(data["additionalTopics"]);
			$("input.frequency[value='"+data["frequency"]+"']").attr('checked',true);
			var i = 1;
			for(i=1; i<6; i++)
			{
				$(".task"+i+"ability[value='"+data["task"+i+"ability"]+"']").attr('checked', 'checked');
				$(".task"+i+"ability[value='"+data["task"+i+"ability"]+"']").parent().addClass("selected-bg");
				$("#task"+i+"rank").val(data["task"+i+"rank"]);
			}
			modal.modal('hide');
		}
	});	
}