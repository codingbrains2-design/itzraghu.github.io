$(document).ready(function() {
	$.ajax({
		url:'php/free-tutors.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){


					var div_image = $('<div class="col-md-6 images text-center"></div>');
					var div_data = $('<div class="col-md-6 data"></div>');

					if (k === 'image_path') {
						var div = $(div_image).html("<img class='img-responsive center-block' src="+v.slice(3)+" style='width:200px; height:250px; border:5px solid #F5F7FA; border-radius:15px;'/><br><button id='imgBtn' class='btn btn-success'><i class='fa fa-user'></i> View Profile</button><br><br><br><br><br>");
						$('#free_tutor .freeTutor').append(div);
						$('#free_tutor .freeTutor >.images:last').on('click', '#imgBtn', function(){

							var imgPath=$(this).parent().find('img').attr('src');
							$.ajax({
								url:'php/imgPath.php',
								type:'POST',
								data:{'imgPath':imgPath},
								success:function(data){
									if (data === "Ok") {
										window.open('tutors-profile.html','_blank');
									}
								}
							})
						});
					}
					if (k === 'name') {
						var name = $(div_data).html("<h4>"+v+"</h4><hr>");
						$('#free_tutor .freeTutor').append(name);
					}
					if (k === 'about') {
						var about = $(div_data).html("<label class='label label-info'>About</label>&nbsp;<label>"+ v +"</label>");
						$('#free_tutor .freeTutor >.col-md-6:last').append(about);
					}
					if (k === 'contact_number') {
						var number = $(div_data).html("<label class='label label-info'>Contact</label>&nbsp;<label>"+ v +"</label>");
						$('#free_tutor .freeTutor >.col-md-6:last').append(number);
					}
					if (k === 'qualification') {
						var qualification = $(div_data).html("<label class='label label-info'>qualification</label>&nbsp;<label>"+v+"</label>");
						$('#free_tutor .freeTutor >.col-md-6:last').append(qualification);
					}
					if (k === 'location') {
						var location = $(div_data).html("<label class='label label-info'>Location</label>&nbsp;<label>"+ v +"</label>");
						$('#free_tutor .freeTutor >.col-md-6:last').append(location);
					}
					if (k === 'board') {
						var board = $(div_data).html("<label class='label label-info'>Board</label>&nbsp;<label>"+ v +"</label>");
						$('#free_tutor .freeTutor >.col-md-6:last').append(board);
					}
					if (k === 'class') {
						var classes = $(div_data).html("<label class='label label-info'>Class</label>&nbsp;<label>"+ v +"</label>");
						$('#free_tutor .freeTutor >.col-md-6:last').append(classes);
					}

				});
});
}
})
});