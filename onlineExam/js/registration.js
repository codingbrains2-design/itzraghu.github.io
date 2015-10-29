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
				
				swal("Name Should Not Be Empty");

			}

			else if(username === "")
			{
				swal("Username Should Not Be Empty");
			}
			else if(password === "")
			{
				swal("Password Should Not Be Empty");
			}

		}
		else
		{
			$.ajax({
				url:'php/registration.php',
				type:'POST',
				data:{'name':name,'username':username,'password':password,'email':email,'mobile':mobile},
				success:function(data){
					swal(data);
					$('#regForm').get(0).reset();
				}
			})
		}
	});

});