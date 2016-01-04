$(document).ready(function() {

	$('#editProfileBtn').on('click', function(){
		
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var d_o_b = $("#d_o_b").val();
		var age = $("#age option:selected").text();
		var gender = $("input:checked").val();
		var mobile_no = $("#mobile_no").val();
		var email = $("#email").val();
		var address = $("#address").val();
		var postal_code = $("#postal_code").val();
		var marital_status = $("#marital_status option:selected").text();
		var qualification = $("#qualification").val();
		var experience = $("#experience").val();
		var d_o_j = $("#d_o_j").val();
		var type_of_emp = $("#type_of_emp option:selected").text();
		var designation = $("#designation").val();


		$.ajax({
			url:'php/edit-profile.php',
			type:'POST',
			data:{'first_name':first_name, 'last_name':last_name ,'d_o_b':d_o_b,'age':age, 'gender':gender,
			'mobile_no':mobile_no, 'email':email, 'address':address, 'postal_code':postal_code,
			'marital_status':marital_status,'qualification':qualification, 'experience':experience,
			'd_o_j':d_o_j, 'type_of_emp':type_of_emp, 'designation':designation},
			success:function(data){
				alert(data);
				$('#editProfileForm').get(0).reset();
			}
		})
	});
});

