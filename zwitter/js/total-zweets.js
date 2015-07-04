$(document).ready(function() {
	$.ajax({
		url: 'php/total-zweets.php',
		type: 'GET',

		success: function(data) {

			var result = $.parseJSON(data);
			
			$.each(result, function(key, value) {

				$.each(value, function(key, value) {
					if(key === "zweets") {

						$('#total-zweets').html(value + " " + 'Zweets');
					}


				});
			});

		} 
	});
	
});