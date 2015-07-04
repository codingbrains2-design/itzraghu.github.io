$(document).ready(function() {
	$("#login").on('click', function(event) {
		event.preventDefault();
		var email = $("#email").val();
		var  password = $("#password").val();

		$.ajax({
			url: 'php/login.php',
			type: 'POST',
			data: {'email':email, 'password':password},
			success:function(data)
			{

				if(data === "home") {
					window.location.replace('home.html');
				}

				else {
					
					alert(data);
				}
				
			}
		})
		
	});
});