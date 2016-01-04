$(document).ready(function(){

	$('#logBtn').on('click', function(){
		
		var email = $('#email').val();
		var password = $('#password').val();


		$.ajax({
			url:'php/login.php',
			type:'POST',
			data:{'email':email, 'password':password},
			success:function(data){
				if(data === "index") {
					window.location.replace("home.php");
				}
				else
				{
					swal("SearchTutions Says ! ", data, "warning");
					$('#tutorLoginForm')[0].reset();
				}
			}
		});
	});
	
});