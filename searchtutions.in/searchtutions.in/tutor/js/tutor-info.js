$(document).ready(function(){

	$('#video_div').hide();

	$.ajax({
		url:'php/tutor-info.php',
		type: 'GET',
		success:function(data){
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k,v){
					if (k === 'name') {
						$('#tutorName').append(v);
						$('#name').val(v);
					}
					if (k === 'email') {
						$('#email').val(v);
					}
					if (k === 'address') {
						$('#address').val(v);
					}
					if (k === 'contact_number') {
						$('#number').val(v);
					}
					if (k === 'about') {
						$('#about').val(v);
					}
					if (k === 'qualification') {
						$('#qualification').val(v);
					}

					if (k === 'tutor_category') {
						if (v === "Diamond" || v === "Silver" || v === "Gold" ||v === "Super Premium") {
							$('#video_div').show();

						}
					}
					if (k === 'location') {
						$('#location').val(v);
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