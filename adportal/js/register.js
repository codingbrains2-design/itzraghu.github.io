$(document).ready(function() {

	$('#regBtn').on('click', function(){
		
		var name = $('#name').val();
		var contact = $('#contact').val();
		var email = $('#email').val();
		var password = $('#password').val();

		alert(name);

		$.ajax({
			url:'php/register.php',
			type:'POST',
			data:{'name':name, 'contact':contact, 'email':email, 'password':password},
			success:function(data){
				alert(data);
			}
		})
	});
	
});