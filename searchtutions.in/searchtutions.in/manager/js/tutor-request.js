$(document).ready(function() {
	
	$('#addTutorBtn').on('click', function(e){
		e.stopPropagation();
		e.preventDefault();
		var name = $('#name').val();
		var contact = $('#contact').val();
		var email = $('#email').val();
		var gender = $('#gender').val();
		var about = $('#about1').val();
		var qualification = $('#qualification').val();
		var location = $('#location').val();
		var board = $('#board').val();
		var standard = $('#class').val();
		
		if(name ==="" || contact===""|| email === "" || gender==="" || about==="" || qualification==="" || location==="" || standard==="")
		{
			if(name==="")
			{
				swal("SearchTutions says!", "Name should not be empty", "warning")
			}

			else if(contact==="")
			{
				swal("SearchTutions says!", "Contact should not be empty", "warning")
			}
			else if(email==="")
			{
				swal("SearchTutions says!", "Email should not be empty", "warning")
			}
			else if(gender==="")
			{
				swal("SearchTutions says!", "Gender should not be empty", "warning")
			}

			else if(about==="")
			{
				swal("SearchTutions says!", "Write Something About Yourself", "warning")
			}
			else if(qualification==="")
			{
				swal("SearchTutions says!", "Qualifications should not be empty", "warning")
			}
			else if(location==="")
			{
				swal("SearchTutions says!", "location should not be empty", "warning")
			}
			else if(board==="")
			{
				swal("SearchTutions says!", "board should not be empty", "warning")
			}
			else if(standard==="")
			{
				swal("SearchTutions says!", "Class Field should not be empty", "warning")
			}

		}
		
		else
		{
			$.ajax({
				url:'php/tutorRequest.php',
				type:'POST',
				data:{'name':name,'contact':contact,'email':email,'gender':gender,'about':about,'qualification':qualification,
				'location':location,'board':board,'class':standard},
				success:function(data){
					alert(data);
					if(data === "ok")
					{
						swal("SearchTutions Says!","Thanks for Registration..! We will contact You soon", "success");
						$("#tutorReqForm").get(0).reset();
					}
					if(data === "not ok")
					{
						swal("SearchTutions Says!","Email id already exist.Try with other Email", "error");
					}
				}
			})
		}

	});
$.ajax({
	url:'php/login-time.php',
	type:'GET',
	success:function(data)
	{
		$("#lastLoginTime").append(data);
	}
});

});
