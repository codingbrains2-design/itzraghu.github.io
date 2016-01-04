$(document).ready(function() {
	
	$.ajax({
		url: 'php/message.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			// alert(result);
			$.each(result, function(key, value){
				if (key === 'message') {
					$('#msg').append(value);
				}
			});
		}
	})
});