$(document).ready(function(){

	$('#changePassBtn').on('click', function(){

		var old_password = $('#oldPassword').val();
		var new_password = $('#newPassword').val();
		var confirm_password = $('#confirmPassword').val();

		if( old_password ==="" || new_password ==="" || confirm_password==="")
		{
			if (old_password === "")
			{
				swal('Website Says','old password Should Not be Empty','error')
			}
			else if (new_password === "")
			{
				swal('Website Says','Please Enter New password','error')
			}
			else if (confirm_password === "")
			{
				swal('Website Says','Please confirm new password','error')
			}
			
		}
		else if(new_password !== confirm_password)
		{
			swal('Website Says',"New password and confirm Password didn't match",'error');
			$("#change-pass-form").get(0).reset();

		}
		else
		{

			$.ajax({
				url:'php/change-password.php',
				type:'POST',
				data:{'old_password':old_password, 'new_password':new_password},
				success:function(data)
				{
					if(data === 'ok')
					{
						swal('Website Says','Password Changed Successfully','success');
					}
					else
					{
						swal('Website Says',data,'error');
					}
				}
			});
		}
	});
});