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
						$('#name').append(v);
					}
					if(k === 'username'){
						$('#username').append(v);
					}
					if(k === 'email'){
						$('#email').append(v);
					}
					if(k === 'mobile'){
						$('#mobile').append(v);
					}
					if(k === 'address'){
						$('#address').append(v);
					}
					if(k === 'keyskills'){
						$('#keyskills').append(v);
					}
					
					if(k === 'experience'){
						$('#experience').append(v);
					}if(k === 'resume_headlines'){
						$('#resumeHeadline').append(v);
					}
					
				});
			});
		}
	})

});