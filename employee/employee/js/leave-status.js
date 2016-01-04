$(document).ready(function() {
	$.ajax({
		url: 'php/leave-status.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(k, v){
				if (k === 'leave_status') {
					$('#leave_status').append(v);
				}
			});
		}
	})
	
});