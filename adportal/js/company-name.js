$(document).ready(function() {
	$.ajax({
		url: 'php/company-name.php',
		type: 'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(key, value) {
					if(key === 'name')
					{
						$("#company_name").html(value);
					}
				});
			});
		}
	});
	
});