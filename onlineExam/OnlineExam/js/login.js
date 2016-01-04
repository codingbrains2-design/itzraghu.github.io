$(document).ready(function(){

	$('#logBtn').on('click', function(e){
		e.stopPropagation();
		e.preventDefault();
		var username = $("#username").val();
		var password = $("#password").val();

		if(username === "" || password === "")
		{
			
			if(username === "")
			{
				alert("usename field cannot be empty");
			}
			if(password === "")
			{
				alert("password field cannot be empty");
			}

		}
		else
		{

			$.ajax({
				url:'php/login.php',
				type:'POST',
				data:{'username':username, 'password':password},
				success:function(data){
					if(data === "user") {
						window.location.replace("user-home.html");
					}

					else{
						alert(data);
						window.location.replace("index.html");

					}
				}
			});
		}
		
	});
});