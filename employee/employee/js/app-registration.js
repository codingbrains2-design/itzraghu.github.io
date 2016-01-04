$(document).ready(function() {

	$('#regBtn').on('click', function(){
		
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var email = $("#email").val();
		var applied_for = $("#applied_for").val();
		var expected_salary = $("#expected_salary").val();
		var mobile = $("#mobile").val();
		var willing_to_relocate = $("input:checked").val();
		var last_company = $("#last_company").val();
		var experience = $("#experience").val();
		var reference = $("#reference").val();
		if(first_name === "" || email === "" || applied_for === "")
		{
			if (first_name === "")
			{
				swal('Website Says','Name Should Not be Empty','error')
			}
			else if (email === "")
			{
				swal('Website Says','Please Enter a valid Email','error')
			}
			else if (applied_for === "")
			{
				swal('Website Says','Please Enter the post you are applying for','error')
			}
		}
		else{

			$.ajax({
				url:'php/app-registration.php',
				type:'POST',
				data:{'first_name':first_name, 'last_name':last_name , 'name':name,
				'applied_for':applied_for, 'email':email, 'expected_salary':expected_salary,
				'mobile':mobile, 'willing_to_relocate':willing_to_relocate, 'last_company':last_company,
				'experience':experience, 'reference':reference},
				success:function(data){
					// alert(data);
					swal('Website Says',data,'success')
					$('#applicantForm').get(0).reset();
				}
			})
		}
	});


});