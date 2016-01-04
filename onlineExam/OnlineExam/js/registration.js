$(document).ready(function() {

	$('#regBtn').on('click', function(){
		
		var name = $("#name").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();
		var mobile = $("#mobile").val();
		
		if(name === "" || username === "" || password === "")
		{
			if(name ==="")
			{
				alert("Name field cannot be empty");

			}

			if(username === "")
			{
				alert("Username field cannot be empty");
			}
			if(password === "")
			{
				alert("Password field cannot be empty");
			}

		}
		else
		{
			$.ajax({
				url:'php/registration.php',
				type:'POST',
				data:{'name':name,'username':username,'password':password,'email':email,'mobile':mobile},
				success:function(data){
					alert(data);
					$('#regForm').get(0).reset();
				}
			})
		}
	});

});