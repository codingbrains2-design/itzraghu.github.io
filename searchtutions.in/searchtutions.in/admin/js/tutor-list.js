$(document).ready(function() {
	
	$.ajax({
		url: 'php/tutor-list.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value) {
				$.each(value, function(key, value) {
					if(key === 'email')
					{
						$('.tutorList1').append("<option>"+value+"</option>");
					}
					if(key === 'email')
					{
						$('.tutorList2').append("<option>"+value+"</option>");
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