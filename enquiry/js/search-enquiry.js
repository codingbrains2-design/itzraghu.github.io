$(document).ready(function() {
	$.ajax({
		url: 'php/search-enquiry.php',
		type: 'GET',

		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(k, v) {

					if(k == "reference"){
						$("#enquiryTable >tbody:last").append(
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
					if(k == "name"){
						$("#enquiryTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>')
								
								)
							
							);
					}
					if(k == "email"){
						$("#enquiryTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "address"){
						$("#enquiryTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "contact"){
						$("#enquiryTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)

							);
					}
					if(k == "mode"){
						$("#enquiryTable >tbody >tr:last").append(

							$('<td>').append(v)
							.append(
								$('</td>').append(
									$('</tr>')
									)
								)
							
							);
					}
					if(k == "status"){
						$("#enquiryTable >tbody >tr:last").append(

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