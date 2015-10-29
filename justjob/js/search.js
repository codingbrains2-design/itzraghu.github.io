$(document).ready(function() {
	$("#searchBtn").on('click', function(){
	
		$.ajax({
			url: 'php/job-search.php',
			type: 'GET',
			success:function(data)
			{
				var response = $.parseJSON(data);

				$.each(response,function(key,value){
					$.each(value,function(k,v){

						if(k == "id"){
							$('#jobSearchTable >tbody:last').append(
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
						if(k == "job_title"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "keyskills"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "required_experience"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "salary"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "role"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "location"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "contact_details"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "description"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "company"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
					});
});
}
})
});
});