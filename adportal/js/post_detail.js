$(document).ready(function() {

	//$('.post_detail_table >tbody>tr:last').html('');
	
	$.ajax({
		url: 'php/post_detail.php',
		type: 'GET',
		success: function (data) {
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {

				$.each(value, function(key, value) {

					if (key === 'id') { $('#id').append(value); };
					if (key === 'title') { $('#title').append(value); };
					if (key === 'price') { $('#price').append(value); };
					if (key === 'model') { $('#model').append(value); };
					if (key === 'description') { $('#description').append(value); };
					if (key === 'name') { $('#name').append(value); };
					if (key === 'email') { $('#email').append(value); };
					if (key === 'phone') { $('#phone').append(value); };
					if (key === 'city') { $('#city').append(value); };
					if (key === 'category') { $('#category').append(value); };
					if (key === 'path') { $('#path').attr('src', value.slice(3) ) };
				});
			});

		}
	});

});