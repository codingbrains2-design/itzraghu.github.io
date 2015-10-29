$(document).ready(function() {
	$.ajax({
		url: 'php/all-post-jobs.php',
		type: 'GET',

		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {

					if(k === "id"){
						$("#allJobsTable >tbody:last").append(
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
					if(k === "job_title"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
							);
					}
					if(k === "keyskills"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
							);
					}
					if(k == "required_experience"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "salary"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "role"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					
					if(k == "location"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)

							);
					}
					if(k == "contact_details"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "description"){
						$("#allJobsTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							);
					}
					if(k == "company"){
						$("#allJobsTable >tbody >tr:last").append(

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