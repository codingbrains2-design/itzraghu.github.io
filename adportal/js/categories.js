$(document).ready(function() {
	
		$.ajax({
			url: 'php/categories.php',
			type: 'GET',
			success: function (data) {
				var result = $.parseJSON(data);
				//alert(result);
				$.each(result, function(key, value) {
					//alert(value);
					
					$.each(value, function(key, value) {
						
						if (key === 'category') { $('#category').append(value); };
						if (key === 'subcategory') { $('#category').append(value); };
					});
				});

			}
		});

});