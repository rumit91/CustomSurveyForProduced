function submitData(obj) {
	var frequency = $(".frequency:checked").val();
	var rankedList = "";
	var count = 0;
	$("ul#sortable").find("li").each(function () {
		if(count < 14)
		{
			rankedList += $(this).text();
			rankedList += "+/+";
			count++;
		}
	});
	rankedList = rankedList.substring(0, rankedList.length-3);
	var additionalTopics = $("textarea#additionalTopics").val();
	var sessionID = $("body").attr("sessionID");
	
	$.getJSON("./php/insertSection11.php", {frequency: frequency, rankedList: rankedList, additionalTopics: additionalTopics, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection11.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			var list = "";
			var i = 1;
			for(i=1; i<14; i++)
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