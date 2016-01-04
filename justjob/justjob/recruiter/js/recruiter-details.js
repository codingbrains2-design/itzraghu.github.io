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
						$('#name').append(v);
					}
					if(k === 'designation'){
						$('#designation').append(v);
					}
					
					if(k === 'username'){
						$('#username').append(v);
					}
					if(k === 'email'){
						$('#email').append(v);
					}
					if(k === 'contact'){
						$('#mobile').append(v);
					}
					
					if(k === 'recruiting_area'){
						$('#recruiting_area').append(v);
					}
					if(k === 'experience'){
						$('#experience').append(v);
					}
					if(k === 'location'){
						$('#location').append(v);
					}
					if(k === 'company'){
						$('#company').append(v);
					}
					if(k === 'img_path'){
						$('.userImage').attr('src',v.slice(3));
					}
				});
			});
		}
	})

});