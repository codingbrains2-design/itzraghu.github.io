$(document).ready(function() {

	$('#recruiterRegBtn').on('click', function(){
		
		var name = $("#name").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();
		var mobile = $("#mobile").val();

		$.ajax({
			url:'php/registration.php',
			type:'POST',
			data:{'name':name,'username':username, 'password':password, 'email':email, 'mobile':mobile},
			success:function(data){
				alert(data);
				$("#recruiterRegForm").get(0).reset();

			}
		})
	});

});