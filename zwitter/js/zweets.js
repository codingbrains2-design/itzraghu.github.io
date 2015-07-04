$(document).ready(function() {
	
	$.ajax({
		url: 'php/zweets.php',
		type: 'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {
					if(k === 'zweet')
					{
						$("#zweets").append(v + "<br>");
					}
				});
			});
		}
	});
	
});