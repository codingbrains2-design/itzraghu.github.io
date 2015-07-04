$(document).ready(function() {
	$.ajax({
		url: 'php/user-info.php',
		type: 'GET',

		success: function(data) {

			var result = $.parseJSON(data);

			$.each(result, function(key, value) {

				$.each(value, function(key, value) {
					if(key === "name") {

						$('#full-name').append(value);
					}



					$("body").on("click", ".delete", function (e) {
						$(this).parent("div").remove();
					});
				});

			} 
		});

		});

