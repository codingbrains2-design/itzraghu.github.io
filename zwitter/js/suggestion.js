$(document).ready(function() {
	$.ajax({
		url: 'php/suggestion.php',
		type: 'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(key, value) {
					//alert(value);
					if (key === 'id') 
					{ 
						$('#user_id').append(value); 
					}
					if (key === 'name') 
					{ 
						$('#name').append(value); 
					}
					if (key === 'mobile') 
					{ 
						$('#mobile').append(value); 
					}
					if (key === 'email') 
					{ 
						$('#email').append(value); 
					}
					// if (key === 'zweets') { $('#zweets').append(value); };

				});
			});
		}
	});
	
});