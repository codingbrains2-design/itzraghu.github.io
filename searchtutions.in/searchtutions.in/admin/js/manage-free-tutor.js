$(document).ready(function() {
	$.ajax({
		url:'php/freeTutors.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){


					var div_image = $('<div class="col-md-6 images"></div>');
					var div_data = $('<div class="col-md-6 data"></div>');

					if (k == 'image_path') {
						var div = $(div_image).html("<br><img id='tutorImg' src="+v+" style='width:200px; height:250px; border:5px solid #F5F7FA; border-radius:15px;'/><button id='profileBtn' class='btn btn-success'><i class='fa fa-user'></i> View Profile</button><button id='profileDelBtn' class='btn btn-danger'><i class='fa fa-times'></i> Delete</button><br><br><br>");
						$('#searchTutor .row').append(div);
						$('#searchTutor .row >.images:last').on('click', '#profileBtn', function(){

							var imgPath=$(this).parent().find('img').attr('src');
							imgPath=imgPath.slice(3);
							$.ajax({
								url:'../php/imgPath.php',
								type:'POST',
								data:{'imgPath':imgPath},
								success:function(data){
									if (data === "Ok") {
										window.open('../tutors-profile.html','_blank');
									}
								}
							})
						});
						$('#searchTutor .row >.images:last').on('click', '#profileDelBtn', function(){

							var imgPath=$(this).parent().find('img').attr('src');
							$.ajax({
								url:'php/delete-tutor.php',
								type:'POST',
								data:{'imgPath':imgPath},
								success:function(data){
									swal("SearchTutions Says!",data,"success");
									window.location.reload();
								}
							})
						});

					}
					if (k == 'name') {
						var name = $(div_data).html("<h4>"+v+"</h4><span'><button id='viewTutor' class='btn btn-success'><i class='fa fa-user'></i> View Profile</button>&nbsp;&nbsp;&nbsp;<button class='btn btn-danger'><i class='fa fa-times'></i> Delete</button></span><hr>");
						$('#searchTutor .row').append(name);
					}
					if (k == 'about') {
						var about = $(div_data).html("<label class='label label-info'>About</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(about);
					}
					if (k == 'contact_number') {
						var number = $(div_data).html("<label class='label label-info'>Contact</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(number);
					}
					if (k == 'qualification') {
						var qualification = $(div_data).html("<label class='label label-info'>qualification</label>&nbsp;<label>"+v+"</label>");
						$('#searchTutor .row >.col-md-6:last').append(qualification);
					}
					if (k == 'location') {
						var location = $(div_data).html("<label class='label label-info'>Location</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(location);
					}
					if (k == 'board') {
						var board = $(div_data).html("<label class='label label-info'>Board</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(board);
					}
					if (k == 'class') {
						var classes = $(div_data).html("<label class='label label-info'>Class</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(classes);
					}
				});
});
}
})


$.ajax({
	url:'php/login-time.php',
	type:'GET',
	success:function(data)
	{
		$("#lastLoginTime").append(data);
	}
});
});