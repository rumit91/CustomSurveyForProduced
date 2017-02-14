function submitData(obj) {
	var community = new Array();
	var i = 1;
	for(i=1; i<44; i++)
	{
		community[i] = $(".community"+i+":checked").val();
		if(isNaN(community[i]))
		{
			community[i] = 0;
		}
	}
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/insertSection2.php", {community1: community[1], community2: community[2], community3: community[3], community4: community[4], community5: community[5], community6: community[6], community7: community[7], community8: community[8], community9: community[9], community10: community[10], community11: community[11], community12: community[12], community13: community[13], community14: community[14], community15: community[15], community16: community[16], community17: community[17], community18: community[18], community19: community[19], community20: community[20], community21: community[21], community22: community[22], community23: community[23], community24: community[24], community25: community[25], community26: community[26], community27: community[27], community28: community[28], community29: community[29], community30: community[30], community31: community[31], community32: community[32], community33: community[33], community34: community[34], community35: community[35], community36: community[36], community37: community[37], community38: community[38], community39: community[39], community40: community[40], community41: community[41], community42: community[42], community43: community[43], sessionID: sessionID}, function () {
		nextPage(obj);
	});
}
function getData (modal) {
	var sessionID = $("body").attr("sessionID");
	$.getJSON("./php/getDataSection2.php", {sessionID: sessionID}, function (data) {
		if(data != null)
		{
			for(var i=1; i<44; i++)
			{
				$("input.community"+i+"[value='"+data["community"+i]+"']").attr('checked','checked');
				$("input.community"+i+"[value='"+data["community"+i]+"']").parent().addClass("selected-bg");
			}
			modal.modal('hide');
		}
	});	
}