$(document).ready(function() {

	$('#recruiterRegBtn').on('click', function(){
		
		var name = $("#name").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();
		var mobile = $("#mobile").val();

		if(name === "" || username === "" || password === "" || email === "")
		{

			if(name === "")
			{
				swal('Website Says', 'Name Should Not Be Empty','error')
			}
			else if(username === "")
			{
				swal('Website Says', 'Username Should Not Be Empty','error')
			}
			else if(password === "")
			{
				swal('Website Says', 'Password Should Not Be Empty','error')
			}
			else if(email === "")
			{
				swal('Website Says', 'Email Should Not Be Empty','error')
			}
			
		}
		else
		{
			$.ajax({
				url:'php/registration.php',
				type:'POST',
				data:{'name':name,'username':username, 'password':password, 'email':email, 'mobile':mobile},
				success:function(data){
					swal('',data,'success');

				}
			})
		}
	});

});