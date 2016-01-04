$(document).ready(function() {

	$('#editProfileBtn').on('click', function(){
		var name = $("#name").text().trim();
		var email = $("#email").text().trim();
		var mobile = $("#mobile").text().trim();
	
		$.ajax({
			url:'php/edit-profile.php',
			type:'POST',
			data:{'name':name, 'email':email, 'mobile':mobile,},
			success:function(data){
				alert(data);
				$('#editProfileForm').get(0).reset();
			}
		})
	});
});