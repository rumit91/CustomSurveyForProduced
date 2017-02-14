	function submitData(obj) {
	var gender = $("#gender").val();
	var age = $("#age").val();
	var employment = $("#employment").val();
	var enrollment = $("#enrollment").val();
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/insertSection1.php", {gender: gender, age: age, employment: employment, enrollment: enrollment, sessionID: sessionID}, function () {
		nextPage(obj);
	});
}

function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection1.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			$("#gender").val(data["gender"]);
			$("#age").val(data["age"]);
			$("#employment").val(data["employment"]);
			$("#enrollment").val(data["enrollment"]);
			modal.modal('hide');
		}
	});	
}