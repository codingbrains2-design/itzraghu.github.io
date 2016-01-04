$(document).ready(function() {

	$.ajax({
		url: 'php/recruiter-details.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {
					if(k === 'name'){
						$('#name').val(v);
					}
					if(k === 'contact'){
						$('#mobile').val(v);
					}
					if(k === 'email'){
						$('#email').val(v);
					}
					if(k === 'location'){
						$('#location').val(v);
					}
					if(k === 'recruiting_area'){
						$('#recruiting_area').val(v);
					}

					if(k === 'experience'){
						$('#experience').val(v);
					}
					if(k === 'designation'){
						$('#designation').val(v);
					}
					if(k === 'company'){
						$('#company').val(v);
					}

				});
			});
		}
	})

});