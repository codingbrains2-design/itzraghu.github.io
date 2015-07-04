$(document).ready(function(){

	$('#change_btn').on('click', function(){

		var old_password = $('#old_password').val();
		var new_password = $('#new_password').val();

		$.ajax({
			url:'change-password.php',
			type:'POST',
			data:{'new_password':new_password, 'old_password':old_password},
			success:function(data)
			{
				alert(data);
			}
		})
	});
});