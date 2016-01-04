$(document).ready(function() {
	$.fn.editable.defaults.mode = 'inline';
	$('#name').editable();
	$('#email').editable();
	$('#mobile').editable();

	$.ajax({
		url: 'php/user-details.php',
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
				});
			});
		}
	})

});