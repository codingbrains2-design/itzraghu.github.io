$(document).ready(function() {
	
	$.ajax({
		url: 'php/working-hour.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(k, v){
				if (k === 'working_hour') {
					$('#working_hour').append(v);
				}
			});
		}
	})
});