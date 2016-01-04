$(document).ready(function() {
	$.ajax({
		url: 'php/view-applicant.php',
		type: 'GET',

		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {

					if(k == "first_name"){
						$("#viewApplicantTable >tbody:last").append(
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
					if(k == "email"){
						$("#viewApplicantTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
							);
					}
					if(k == "applied_for"){
						$("#viewApplicantTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "expected_salary"){
						$("#viewApplicantTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "mobile"){
						$("#viewApplicantTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)

							);
					}
					if(k == "last_company"){
						$("#viewApplicantTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "experience"){
						$("#viewApplicantTable >tbody >tr:last").append(

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