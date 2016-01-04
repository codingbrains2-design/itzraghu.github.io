$(document).ready(function() {
	
	$.ajax({
		url: 'php/employee-list.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(key, value) {
					if(key === 'personal_id')
					{
						$('#empId').append("<option>"+value+"</option>");
					}
				});
			});
		}
	})
	
});