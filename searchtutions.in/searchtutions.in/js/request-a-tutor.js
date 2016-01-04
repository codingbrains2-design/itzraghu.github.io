$(document).ready(function() {
	
	$('#requestTutorBtn').on('click', function(e){
		e.preventDefault();
		e.stopPropagation();

		var requestor = $('#requestor').val();
		var name = $('#requestor_name').val();
		var contact = $('#requestor_contact').val();
		var email = $('#requestor_email').val();
		var gender = $('#requestor_gender').val();
		var location = $('#requestor_location').val();
		var board = $('#requestor_board').val();
		var standard = $('#requestor_class').val();
		var subject = $('#requestor_subject').val();
		var brief_requirement = $('#requestor_brief_requirement').val();
		var address = $('#requestor_address').val();
		

		
		// alert(requestor);
		// alert(name);
		// alert(contact);
		// alert(email);
		// alert(gender);
		// alert(location);
		// alert(board);
		// alert(standard);
		// alert(subject);
		// alert(brief_requirement);
		// alert(address);


		if(name ==="Your name" || contact==="Your mobile"|| email === "Your email")
		{
			if(name==="Your name")
			{
				swal("SearchTutions says!", "Name should not be empty", "warning")
			}

			else if(contact==="Your mobile")
			{
				swal("SearchTutions says!", "Contact should not be empty", "warning")
			}
			else if(email==="Your email")
			{
				swal("SearchTutions says!", "Email should not be empty", "warning")
			}
		}
		else
		{
			$.ajax({
				url:'php/request-a-tutor.php',
				type:"POST",
				data:{'requestor':requestor,'name':name,'contact':contact,'email':email,'gender':gender,
				'location':location,'board':board,'standard':standard,'subject':subject,'brief_requirement':brief_requirement
				,'address':address},
				success:function(data){
					swal("SearchTutions Says!",data, "success");
				}
			})
		}



	});
});