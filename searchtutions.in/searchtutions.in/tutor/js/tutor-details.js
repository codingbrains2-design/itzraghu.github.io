$(document).ready(function(){
	$.ajax({
		url:'php/tutor-info.php',
		type: 'GET',
		success:function(data){
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k,v){
					if (k === 'name') {
						$('#tutorName').append(v);
					}
					if (k === 'image_path') {
						$('.tutor-image').attr('src',v).css({
							width:'200px', 
							height:'180px', 
							border:'3px solid #eee', 
							'border-radius':'15px'
						});
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