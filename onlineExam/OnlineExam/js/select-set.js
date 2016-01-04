$(document).ready(function(){

	$('#quickTestBtn').on('click', function(){

		if($("#rb1").is(":checked") || $("#rb2").is(":checked") || $("#rb3").is(":checked")){
			var set = $("input[type='radio']:checked").val();
			window.location.replace(set+".html");

		}
		else{
			alert("Please select one of these set");
		}
	});
});