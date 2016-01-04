$(document).ready(function() {
	$.ajax({
		url: 'php/view-leave-application.php',
		type: 'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {

					if(k == "s_no"){
						$('#leaveTable >tbody:last').append(
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
					if(k == "personal_id"){
						$('#leaveTable >tbody >tr:last').append(
							$('<td>').append(v)
							.append(
								$('</td>')
								)
							);
					}
					if(k == "date_from"){
						$('#leaveTable >tbody >tr:last').append(
							$('<td>').append(v)
							.append(
								$('</td>')
								)
							);
					}
					if(k == "date_to"){
						$('#leaveTable >tbody >tr:last').append(
							$('<td>').append(v)
							.append(
								$('</td>')
								)
							);
					}
					if(k == "reason"){
						$('#leaveTable >tbody >tr:last').append(
							$('<td>').append(v)
							.append(
								$('</td>')
								)
							);
					}
					if(k == "reason"){
						$('#leaveTable >tbody >tr:last').append(
							$('<td>').append($('<a href="#" type="button" class="edit_b btn btn-warning btn-sm"><span class="fa fa-times"></span> Discard</a>       <a type="button" class="btn btn-info btn-sm"><i class="fa fa-check"></i> Accept</a>') 				    		
								.append(
									$('</td>')
									)
								)
							);
						$('#leaveTable >tbody >tr:last').on('click', '.edit_b', function() {

							var $td = $(this).closest('tr').children('td');
							var s_no = $td.eq(0).text();
							var emp_id = $td.eq(1).text();
							$.ajax({
								url: 'php/discard-application.php',
								type: 'POST',
								data: { 's_no': s_no , 'emp_id':emp_id },
								success: function(data) {
									alert(data);
								},
								error: function(xhr, desc, err) {
									console.log(xhr);
									console.log("Details: " + desc + "\nError:" + err);
								},

								cache: false
							});
						});
					}
				});
});
}
});
});