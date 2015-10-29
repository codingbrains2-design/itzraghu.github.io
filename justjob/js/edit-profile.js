$(document).ready(function() {

	$('#editProfileBtn').on('click', function(){
		
		var name = $("#name").val();
		var email = $("#email").val();
		var mobile = $("#mobile").val();
		var address = $("#address").val();
		var keyskills = $("#keyskills").val();
		var experience = $("#experience").val();
		var resumeHeadline = $("#resumeHeadline").val();



		$.ajax({
			url:'php/edit-profile.php',
			type:'POST',
			data:{'name':name,'mobile':mobile, 'email':email, 'address':address,
			'keyskills':keyskills, 'experience':experience, 'resumeHeadline':resumeHeadline},
			success:function(data){
				alert(data);
				$('#editProfileForm').get(0).reset();
			}
		})
	});
	// requirejs(["emp-details","change-password"]);
});

