$(document).ready(function(){

	$('#logBtn').on('click', function(){
		
		var username = $('#username').val();
		var password = $('#password').val();

		if( username ==="" || password ==="")
		{
			if (username === "")
			{
				swal('Website Says','Username Should Not be Empty','error')
			}
			else if (password === "")
			{
				swal('Website Says','Please Enter password','error')
			}
		}
		else{
			$.ajax({
				url:'php/login.php',
				type:'POST',
				data:{'username':username, 'password':password},
				success:function(data){
					if(data === "index") {
						window.location.replace("home.html");
					}
					else
					{
						swal('Website Says',data,'error');
						// $('#loginForm').get(0).reset();
					}
				}
			});
		}
	});
	
});