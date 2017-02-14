function submitData(obj) {
	var bbcollab = $(".bbcollab:checked").val();
	if(isNaN(bbcollab))
		bbcollab = 0;
	var lync = $(".lync:checked").val();
	if(isNaN(lync))
		lync = 0;
	var skype = $(".skype:checked").val();
	if(isNaN(skype))
		skype = 0;
	var socialMedia = $(".socialMedia:checked").val();
	if(isNaN(socialMedia))
		socialMedia = 0;
	var google = $(".google:checked").val();
	if(isNaN(google))
		google = 0;
	var email = $(".email:checked").val();
	if(isNaN(email))
		email = 0;
	var additionalIdeas = $("#additionalIdeas").val();
	var sessionID = $("body").attr("sessionID");
	
	$.getJSON("./php/insertSection6.php", {bbcollab: bbcollab, lync: lync, skype: skype, socialMedia: socialMedia, google: google, email:email, additionalIdeas:additionalIdeas, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}

function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection6.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			$("input.bbcollab[value='"+data["bbcollab"]+"']").attr('checked',true);
			$("input.bbcollab[value='"+data["bbcollab"]+"']").parent().addClass("selected-bg");
			$("input.lync[value='"+data["lync"]+"']").attr('checked',true);
			$("input.lync[value='"+data["lync"]+"']").parent().addClass("selected-bg");
			$("input.skype[value='"+data["skype"]+"']").attr('checked',true);
			$("input.skype[value='"+data["skype"]+"']").parent().addClass("selected-bg");
			$("input.socialMedia[value='"+data["socialMedia"]+"']").attr('checked',true);
			$("input.socialMedia[value='"+data["socialMedia"]+"']").parent().addClass("selected-bg");
			$("input.google[value='"+data["google"]+"']").attr('checked',true);
			$("input.google[value='"+data["google"]+"']").parent().addClass("selected-bg");
			$("input.email[value='"+data["email"]+"']").attr('checked',true);
			$("input.email[value='"+data["email"]+"']").parent().addClass("selected-bg");
			$("#additionalIdeas").val(data["additionalIdeas"]);
			modal.modal('hide');
		}
	});	
}