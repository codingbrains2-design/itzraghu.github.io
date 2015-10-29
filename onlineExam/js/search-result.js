$(document).ready(function() {
	$("#searchBtn").on('click', function(e){
		e.preventDefault();
		e.stopPropagation();
		var subject = $("#subject").val();
		var set_no = $("#set_no").val();

		$("#resultTable >tbody:last").html('');
		
		$.ajax({
			url: 'php/search-result.php',
			type: 'POST',
			data: {'subject':subject, 'set_no':set_no},
			success:function(data)
			{
				var result = $.parseJSON(data);
				$.each(result,function(key,value){
					$.each(value,function(k,v){

						if(k == "id"){
							$('#resultTable >tbody:last').append(
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
						if(k == "subject"){
							$('#resultTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "set_no"){
							$('#resultTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "obtained_marks"){
							$('#resultTable >tbody >tr:last').append(
								$('<td>').append(v)
								.append($('</td>')
									)
								);
						}
						if(k == "total_marks"){
							$('#resultTable >tbody >tr:last').append(
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