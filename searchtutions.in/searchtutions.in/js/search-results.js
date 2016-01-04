$(document).ready(function() {
	$.ajax({
		url:'php/search-tutor.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){

					// var div_block = $("<div class='div_block'></div>").css({
					// 	float:"right",
					// 	display:"table-row",
					// 	clear:"both",
					// 	position:"relative"
					// });

					var div_image = $('<div class="col-md-6 images"></div>');
					var div_data = $('<div class="col-md-6 data"></div>');

					if (k === 'image_path') {
						var div = $(div_image).html("<img src="+v.slice(3)+" style='width:200px; height:250px; border:5px solid #F5F7FA; border-radius:15px;'/><br><br><br>");

						$('#searchTutor .row').append(div);
					}
					if (k === 'name') {
						var name = $(div_data).html("<h4>"+v+"</h4><hr>");
						$('#searchTutor .row').append(name);
					}
					if (k === 'about') {
						var about = $(div_data).html("<label class='label label-info'>About</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(about);
					}
					if (k === 'contact_number') {
						var number = $(div_data).html("<label class='label label-info'>Contact</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(number);
					}
					if (k === 'qualification') {
						var qualification = $(div_data).html("<label class='label label-info'>qualification</label>&nbsp;<label>"+v+"</label>");
						$('#searchTutor .row >.col-md-6:last').append(qualification);
					}
					if (k === 'location') {
						var location = $(div_data).html("<label class='label label-info'>Location</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(location);
					}
					if (k === 'board') {
						var board = $(div_data).html("<label class='label label-info'>Board</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(board);
					}
					if (k === 'class') {
						var classes = $(div_data).html("<label class='label label-info'>Class</label>&nbsp;<label>"+ v +"</label>");
						$('#searchTutor .row >.col-md-6:last').append(classes);
					}
					// if (k === 'class') {
					// 	var button = $(div_data).html("<button class='btn btn-primary'>View Profile</button>");
					// 	$('#searchTutor .row >.col-md-6:last').append(button);
					// }
				});
});
}
})

















	// $.ajax({
	// 	url:'php/search-tutor.php',
	// 	type:'GET',
	// 	success:function(data)
	// 	{
	// 		var result = $.parseJSON(data);
	// 		$.each(result, function(key, value){
	// 			$.each(value, function(k, v){
	// 				if (k === 'image_path') {
	// 					var div = $('<div class="images"></div>').html("<img src="+v.slice(3)+" /><label>This is demo</label>");

	// 					$('.search-tt .col-md-4').append(div);
	// 				}
	// 				if (k === 'name') {
	// 					var name = $('<div class="images"></div>').html("<label>"+v+"</label><hr>");
	// 					$('.search-tt .col-md-4').append(name);
	// 				}
	// 				if (k === 'contact_number') {
	// 					var number = $('<div class="images"></div>').html("<label>"+v+"</label><hr>");
	// 					$('.search-tt .col-md-4').append(number);
	// 				}
	// 			});
	// 		});
	// 	}
	// })
});