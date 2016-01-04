$(document).ready(function() {
	
	$.ajax({
		url: 'php/jobseeker-details.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {
					if(k === 'name'){
						$('#name').val(v);
					}
					if(k === 'email'){
						$('#email').val(v);
					}
					if(k === 'mobile'){
						$('#mobile').val(v);
					}
					if(k === 'address'){
						$('#address').val(v);
					}
					if(k === 'keyskills'){
						$('#keyskills').val(v);
					}
					
					if(k === 'experience'){
						$('#experience').val(v);
					}if(k === 'resume_headlines'){
						$('#resumeHeadline').val(v);
					}
					
				});
			});
		}
	})

});