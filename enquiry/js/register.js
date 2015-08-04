$(document).ready(function() {

	$('#regBtn').on('click', function(){
		
		var accountType = $("#accountType option:selected").text();
		var companyName = $("#companyName").val();
		var name = $("#name").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();
		var address = $("#address").val();
		var mobile = $("#mobile").val();
		var telephone = $("#telephone").val();
		
		$.ajax({
			url:'php/register.php',
			type:'POST',
			data:{'accountType':accountType, 'companyName':companyName , 'name':name,
			'username':username, 'password':password, 'email':email, 'address':address,
			'mobile':mobile, 'telephone':telephone},
			success:function(data){
				alert(data);
				$("#regForm").get(0).reset();

			}
		})
	});

});