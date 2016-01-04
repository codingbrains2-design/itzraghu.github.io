$(document).ready(function() {
	
	$.ajax({
		url: 'php/requester-list.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(key, value) {
					if(key === 'email')
					{
						$('.requesterEmail').append("<option>"+value+"</option>");
					}
					
				});
			});
		}
	})
	
});