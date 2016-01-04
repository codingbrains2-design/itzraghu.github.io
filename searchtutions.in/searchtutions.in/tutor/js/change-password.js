$(document).ready(function(){

	$('#changePassBtn').on('click', function(){

		var old_password = $('#oldPassword').val();
		var new_password = $('#newPassword').val();
		var confirm_password = $('#confirmPassword').val();

		if(new_password =="" || old_password=="" || confirm_password=="")
		{

			if (old_password== "") 
			{
				swal("SearchTutions Says!", "Please Enter Old password.", "error");
			}
			
			else if (new_password== "") 
			{
				swal("SearchTutions Says!", "Please Enter New password.", "error");
			}
			else if (confirm_password== "") 
			{
				swal("SearchTutions Says!", "Please confirm Password.", "error");
			}

		}
		else
		{

			if( new_password === confirm_password)
			{

				$.ajax({
					url:'php/change-password.php',
					type:'POST',
					data:{'old_password':old_password, 'new_password':new_password},
					success:function(data)
					{
						if (data === 'Update Failed') {
							swal("SearchTutions Says!", "Wrong Old Password.", "error");
							$("#change-pass-form").get(0).reset();
						}
						if (data === 'Update Successfully') {
							swal("SearchTutions Says!", "Password Changed Successfully", "success");
							$("#change-pass-form").get(0).reset();
						}
					}
				});
			}
			else
			{
				swal("","Password Mismatch... Please try again!","error");
				$("#change-pass-form").get(0).reset();

			}
		}
	});



});