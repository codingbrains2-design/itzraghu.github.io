$(document).ready(function(){

	$('#changePassBtn').on('click', function(){

		var old_password = $('#oldPassword').val();
		var new_password = $('#newPassword').val();
		var confirm_password = $('#confirmPassword').val();

		if( new_password === confirm_password)
		{

			$.ajax({
				url:'php/change-password.php',
				type:'POST',
				data:{'old_password':old_password, 'new_password':new_password},
				success:function(data)
				{
					alert(data);
					$("#changePassForm").get(0).reset();
				}
			});
		}
		else
		{
			alert("new password and confirm password entries are not same..Enter Again!");
			$("#changePassForm").get(0).reset();
		}
	});
});