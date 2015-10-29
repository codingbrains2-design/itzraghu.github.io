$(document).ready(function() {

	$('#editProfileBtn').on('click', function(){
		
		var name = $("#name").val();
		var mobile = $("#mobile").val();
		var email = $("#email").val();
		var location = $("#location").val();
		var recruiting_area = $("#recruiting_area").val();
		var experience = $("#experience").val();
		var company = $("#company").val();
		var designation = $("#designation").val();



		$.ajax({
			url:'php/edit-profile.php',
			type:'POST',
			data:{'name':name,'mobile':mobile, 'email':email, 'location':location,'recruiting_area':recruiting_area,
			'experience':experience, 'company':company, 'designation':designation},
			success:function(data){
				alert(data);
				$('#editProfileForm').get(0).reset();
			}
		})
	});
});

