$(document).ready(function() {
	$("#searchBtn").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		var keyskills = $("#keyskills").val();
		var location = $("#location").val();
		var experience = $("#experience").val();

		$('#jobSearchTable >tbody:last').html('');
		
		$.ajax({
			url: 'php/job-search.php',
			type: 'POST',
			data: {'keyskills':keyskills, 'location':location, 'experience':experience},
			success:function(data)
			{
				var result = $.parseJSON(data);
				$.each(result,function(key,value){
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
						if(k == "company"){
							$('#jobSearchTable >tbody >tr:last').append(
								$('<td>').append($('<a type="button" class="btn btn-info btn-sm applyBtn"><i class="fa fa-check"></i> Apply</a>') 				    		
									.append(
										$('</td>')
										)
									)
								);
							$('#jobSearchTable >tbody >tr:last').on('click', '.applyBtn', function() {

								var $td = $(this).closest('tr').children('td');
								var val1 = $td.eq(0).text();
								var val2 = $td.eq(1).text();
								var val3 = $td.eq(2).text();
								var val4 = $td.eq(3).text();
								var val5 = $td.eq(4).text();
								var val6 = $td.eq(5).text();
								var val7 = $td.eq(6).text();
								var val8 = $td.eq(7).text();
								var val9 = $td.eq(8).text();
								var val10 = $td.eq(9).text();

								alert(val1);
								alert(val2);
								alert(val3);
								alert(val4);
								alert(val5);
								alert(val6);
								alert(val7);
								alert(val8);
								alert(val9);
								alert(val10);
								// $.ajax({
								// 	url: '',
								// 	type: 'POST',
								// 	data: {},
								// 	success: function(data) {
								// 		alert(data);
								// 	},
								// 	error: function(xhr, desc, err) {
								// 		console.log(xhr);
								// 		console.log("Details: " + desc + "\nError:" + err);
								// 	},

								// 	cache: false
								// });
							});
						}
					});
});
}
})
});
});