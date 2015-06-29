$(document).ready(function(){

	$('#submit').on('click', function(){
		
		var email = $('#email').val();
		var password = $('#password').val();

		$.ajax({
			url:'php/login.php',
			type:'POST',
			data:{'email':email, 'password':password},
			success:function(data){
				// alert(data);
				if (data=="Login Successful") {
					window.location.replace("home.html");
				}
			}
		})
	});
	
});
