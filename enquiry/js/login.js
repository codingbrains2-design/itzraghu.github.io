$(document).ready(function(){

	$('#logBtn').on('click', function(){
		
		var username = $('#username').val();
		var password = $('#password').val();


		$.ajax({
			url:'php/login.php',
			type:'POST',
			data:{'username':username, 'password':password},
			success:function(data){
				//alert(data);
				if(data === "index") {
					window.location.replace("home.html");
				}
				else
				{
					alert(data);
					window.location.replace("login.html");
				}
			}
		});
	});
	
});