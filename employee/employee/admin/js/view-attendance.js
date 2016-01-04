$(document).ready(function() {
	$.ajax({
		url: 'php/attendance.php',
		type: 'GET',

		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {

					if(k == "emp_id"){
						$("#viewLeaveApplicantionTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
							);
					}
					if(k == "date_from"){
						$("#viewLeaveApplicantionTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "date_to"){
						$("#viewLeaveApplicantionTable >tbody >tr:last").append(

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