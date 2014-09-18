
function messagelength(){
	var textarea = document.getElementById('sendermessage');
	var messagelength = document.getElementById('messagecount');
	var totallength = 140 ;
	messagelength.value=totallength-textarea.value.length;
}

$(document).ready(function(){

	$(".contact_desgin li").click(function(){

		var selectedname = $(this).children('.contactsname').text();
		var selectednumber = $(this).children('.contactsnumber').text();
		$("#sendermobileno").attr("value",selectedname+"<"+selectednumber+">");

	});

});



