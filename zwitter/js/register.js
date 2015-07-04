$(document).ready(function() {
	$('#register').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();

		var name = $('#name').val();
		var mobile = $('#mobile').val();
		var email = $('#reg_email').val();
		var password = $('#reg_pass').val();

		$.ajax({
			url: 'php/register.php',
			type: 'POST',
			data: {'name': name, 'mobile': mobile, 'email': email, 'password': password},

			success: function(data) {

				alert(data);

			}
		});
	});
});