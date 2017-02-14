function submitData(obj) {
	var finalComment = $("textarea#finalComment").val();
	var sessionID = $("body").attr("sessionID");
		
	$.getJSON("./php/insertLastPage.php", {finalComment: finalComment, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}