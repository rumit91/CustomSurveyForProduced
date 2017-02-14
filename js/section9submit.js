function submitData(obj) {
	var frequency = $(".frequency:checked").val();
	var rankedList = "";
	$("ul#sortable").find("li").each(function () {
		rankedList += $(this).text();
		rankedList += "+/+";
	});
	rankedList = rankedList.substring(0, rankedList.length-3);
	var additionalTopics = $("textarea#additionalTopics").val();
	var sessionID = $("body").attr("sessionID");
	
	$.getJSON("./php/insertSection9.php", {frequency: frequency, rankedList: rankedList, additionalTopics: additionalTopics, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection9.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			var list = "";
			var i = 1;
			for(i=1; i<7; i++)
			{
				list += "<li><i class='icon-resize-vertical'></i> " + data[i] + "</li>";
			}
			$("ul#sortable").html(list);
			$("#additionalTopics").val(data["additionalTopics"]);
			$("input.frequency[value='"+data["frequency"]+"']").attr('checked',true);
			modal.modal('hide');
		}
	});	
}