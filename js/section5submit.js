function submitData(obj) {
	var rankedList = "";
	$("ul#sortable").find("li").each(function () {
		rankedList += $(this).text();
		rankedList += "+/+";
	});
	rankedList = rankedList.substring(0, rankedList.length-3);
	var additionalIdeas = $("textarea#additionalIdeas").val();
	var sessionID = $("body").attr("sessionID");
	
	$.getJSON("./php/insertSection5.php", {rankedList: rankedList, additionalIdeas: additionalIdeas, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection5.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			var list = "";
			var i = 1;
			for(i=1; i<11; i++)
			{
				list += "<li><i class='icon-resize-vertical'></i> " + data[i] + "</li>";
			}
			$("ul#sortable").html(list);
			$("#additionalIdeas").val(data["additionalIdeas"]);
			modal.modal('hide');
		}
	});	
}