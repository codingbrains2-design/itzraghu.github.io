$(document).ready(function() {
	$.ajax({
		url:'php/tutor-request.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){


					var div_image = $('<div class="col-md-4 images text-center"></div>');
					var div_data = $('<div class="col-md-6 data"></div>');

					if (k == 'image_path') {
						var div = $(div_image).html("<br><img id='tutorImg' src="+v+" style='width:200px; height:250px; border:5px solid #F5F7FA; border-radius:15px;'/><div class='btn-group'><button id='profileApproveBtn' class='btn btn-success'><i class='fa fa-check'></i> Approve</a><button id='profileDelBtn' class='btn btn-danger'><i class='fa fa-times'></i> Delete</button></div><br><br><br>");
						$('#searchTutor .row').append(div);
						$('#searchTutor .row >.images:last').on('click', '#profileDelBtn', function(){

							var imgPath=$(this).closest(".images").find('#tutorImg').attr('src');
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
						$('#searchTutor .row >.images:last').on('click', '#profileApproveBtn', function(){

							var imgPath=$(this).closest(".images").find('#tutorImg').attr('src');
							$.ajax({
								url:'php/approve-tutor.php',
								type:'POST',
								data:{'imgPath':imgPath},
								success:function(data){
									swal("SearchTutions Says!",data,"success");
									window.location.replace('manage-category.php');
									
								}

							})
						});
					}
					if (k == 'name') {
						var name = $(div_data).html("<h4>"+v+"</h4><span'><hr>");
						$('#searchTutor .row').append(name);
					}
					if (k == 'email') {
						var about = $(div_data).html("<label class='label label-info'>Email</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(about);
					}
					if (k == 'contact_number') {
						var number = $(div_data).html("<label class='label label-info'>Contact</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(number);
					}
					if (k == 'gender') {
						var gender = $(div_data).html("<label class='label label-info'>Gender</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(gender);
					}
					if (k == 'about') {
						var about = $(div_data).html("<label class='label label-info'>About himself</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(about);
					}
					if (k == 'qualification') {
						var qualification = $(div_data).html("<label class='label label-info'>Qualification</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(qualification);
					}
					if (k == 'location') {
						var location = $(div_data).html("<label class='label label-info'>Location</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(location);
					}
					if (k == 'board') {
						var board = $(div_data).html("<label class='label label-info'>Preferred Board</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(board);
					}
					if (k == 'class') {
						var classes = $(div_data).html("<label class='label label-info'>Preferred Class</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.data:last').append(classes);
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