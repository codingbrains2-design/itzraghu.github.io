$(document).ready(function(){

	$('#log_btn').on('click', function(){
		var username = $('#username').val();
		var password = $('#password').val();

		$.ajax({
			url:'admin-login.php',
			type:'POST',
			data:{'username':username, 'password':password},
			success:function(data){
				
				if (data == "admin") {
					window.location.replace("home.html");
				}
				else
				{
					$("#a").html('wrong user id and password');


				}
			}
		})
	});
	
});