$(document).ready(function() {
	
	$.ajax({
		url: 'php/emp-details.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {
					// alert(value);
					if(k === 'first_name'){
						$('#first_name').append(v);
					}
					if(k === 'last_name'){
						$('#last_name').append(v);
					}
					if(k === 'date_of_birth'){
						$('#d_o_b').append(v);
					}
					if(k === 'gender'){
						$('#gender').append(v);
					}
					if(k === 'date_of_joining'){
						$('#d_o_j').append(v);
					}
					if(k === 'type_of_employee'){
						$('#type_of_emp').append(v);
					}

					if(k === 'personal_id'){
						$('#emp_id').append(v);
					}
					if(k === 'age'){
						$('#age').append(v);
					}
					if(k === 'mobile'){
						$('#mobile').append(v);
					}
					if(k === 'email'){
						$('#email').append(v);
					}
					if(k === 'address'){
						$('#address').append(v);
					}
					if(k === 'postal_code'){
						$('#postal_code').append(v);
					}
					if(k === 'marital_status'){
						$('#marital_status').append(v);
					}
					if(k === 'qualification'){
						$('#qualification').append(v);
					}
					if(k === 'experience'){
						$('#experience').append(v);
					}
					if(k === 'designation'){
						$('#designation').append(v);
					}
				});
});
}
})

});