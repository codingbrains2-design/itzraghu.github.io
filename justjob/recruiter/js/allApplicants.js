$(document).ready(function() {
	$.ajax({
		url: 'php/allApplicants.php',
		type: 'GET',

		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {

					if(k === "id"){
						$("#ApplicantsTable >tbody:last").append(
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
					if(k === "name"){
						$("#ApplicantsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
							);
					}
					if(k == "email"){
						$("#ApplicantsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "mobile"){
						$("#ApplicantsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "address"){
						$("#ApplicantsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					
					if(k == "experience"){
						$("#ApplicantsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)

							);
					}
					if(k == "keyskills"){
						$("#ApplicantsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "resume_headlines"){
						$("#ApplicantsTable >tbody >tr:last").append(

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