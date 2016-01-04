$(document).ready(function() {
	$('#empId').on('change', function(){

		var empId = $('#empId option:selected').text();
		$("#empTable >tbody:last").html('');
		$.ajax({
			url: 'php/view-employee.php',
			type: 'POST',
			data:{'empId':empId},
			success:function(data)
			{
				var result = $.parseJSON(data);
				$.each(result, function(key, value) {
					$.each(value, function(k, v) {

						if(k == "personal_id"){
							$("#empTable >tbody:last").append(
								$('<tr>').append(
									$('<td>').append(v)
									.append(
										$('</td>').append(
											$('</tr>')
											)
										)
									)
								);
						}
						if(k == "first_name"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>')
									
									)
								
								);
						}
						if(k == "mobile"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>').append(
										$('</tr>')
										)
									)
								
								);
						}
						if(k == "email"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>').append(
										$('</tr>')
										)
									)
								
								);
						}
						if(k == "qualification"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>').append(
										$('</tr>')
										)
									)

								);
						}
						if(k == "date_of_joining"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>').append(
										$('</tr>')
										)
									)
								
								);
						}
						if(k == "designation"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>').append(
										$('</tr>')
										)
									)
								);
						}if(k == "leaves"){
							$("#empTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>').append(
										$('</tr>')
										)
									)
								);
						}
						
					});
});
}
});
});
});