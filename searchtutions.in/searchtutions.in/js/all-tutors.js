$(document).ready(function(){
	$.ajax({
		url:'php/all-tutors.php',
		type: 'GET',
		success:function(data){
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k,v){

					var owl = $("#owl-demo"),
					i = 0,
					textholder,
					booleanValue = false;
					owl.owlCarousel();	
					
					if (k === 'image_path') {
						i += 1;
						var img = "<div class='item'><img id='tutorImg' style='width:200px; height:280px; border:5px solid #F5F7FA; border-radius:15px;' src="+v.slice(3)+"><br><br><a id='viewTutor' class='btn btn-primary'>View Profile</a></div>";
						owl.data('owlCarousel').addItem(img);
					}
					$('.item').on('click', '#viewTutor', function(){
						var imgPath=$(this).parent().find('img').attr('src');
						$.ajax({
							url:'php/imgPath.php',
							type:'POST',
							data:{'imgPath':imgPath},
							success:function(data){
								if (data === "Ok") {
									window.location.replace('tutors-profile.html');
								}
							}
						})
					});	
				});
			});
		}
	})


	// 	$.ajax({
	// 	url:'php/all-tutors.php',
	// 	type: 'GET',
	// 	success:function(data){
	// 		var result = $.parseJSON(data);
	// 		$.each(result, function(key, value){
	// 			$.each(value, function(k,v){
	// 				if (k === 'image_path') {
	// 					$('#allTutors .lists:first')
	// 					.clone()
	// 					.append("<img id='tutorImg' src="+v.slice(3)+"><button id='viewTutor' class='btn btn-primary'>View Profile</button>")
	// 					.appendTo($('#allTutors'));
	// 				}
	// 				if (k === 'name') {
	// 					$('#allTutors .lists:first')
	// 					.clone()
	// 					.append("<h4 id='tutorList'>"+v+"</h4>")
	// 					.appendTo($('#allTutors'));
	// 				}
	// 			});
	// 		});
	// 	}
	// })
	// $('#allTutors').on('click', '#viewTutor', function(){
	// 	var imgPath=$(this).parent().find('img').attr('src');
	// 	$.ajax({
	// 		url:'php/imgPath.php',
	// 		type:'POST',
	// 		data:{'imgPath':imgPath},
	// 		success:function(data){
	// 			if (data === "Ok") {
	// 				window.location.replace('tutors-profile.html');
	// 			}
	// 		}
	// 	})
	// });	
});