$(document).ready(function() {

	$('#empId').on('change', function(){
		$('#attendanceTable >tbody:last').html('');
		
		var empId = $('#empId option:selected').text();
		$.ajax({
			url:'php/attendance.php',
			type:'POST',
			data:{'empId':empId},
			success:function(data){

				var result = $.parseJSON(data);
				$.each(result, function(key, value){
					$.each(value, function(k, v){
						if(k == "personal_id"){
							$("#attendanceTable >tbody:last").append(
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
						if(k == "date"){
							$("#attendanceTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>')

									)

								);
						}
						if(k == "sign_in_time"){
							$("#attendanceTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>')

									)

								);
						}
						if(k == "sign_out_time"){
							$("#attendanceTable >tbody >tr:last").append(

								$('<td>').append(v)
								.append(
									$('</td>')

									)

								);
						}
					});
				});
			}
		})		
});
});