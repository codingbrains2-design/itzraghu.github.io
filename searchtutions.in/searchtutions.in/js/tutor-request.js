$(document).ready(function() {
	
	$('#regBtn').on('click', function(){
		var name = $('#name').val();
		var contact = $('#contact').val();
		var email = $('#email').val();
		var gender = $('#gender option:selected').text();
		var about = $('#about1').val();
		var qualification = $('#qualification').val();
		var location = $('#location option:selected').text();
		var board = $('#board option:selected').text();
		var standard = $('#class option:selected').text();
		var file_data = $('#file').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('file', file_data);
		form_data.append('name', name);
		form_data.append('contact', contact);
		form_data.append('email',email);
		form_data.append('gender', gender);
		form_data.append('about', about);
		form_data.append('qualification', qualification);
		form_data.append('location', location);
		form_data.append('board', board);
		form_data.append('class', standard);

		if(name ==="Your name" || contact==="Your mobile"|| email === "Your email" || gender==="Select Gender" 
			|| about==="Tell us about yourself" || qualification==="Qualifications" || location==="" || board==="" 
			||standard==="" || file_data==null)
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
			else if(gender==="Select Gender")
			{
				swal("SearchTutions says!", "Gender should not be empty", "warning")
			}

			else if(about==="Tell us about yourself")
			{
				swal("SearchTutions says!", "Write Something About Yourself", "warning")
			}
			else if(qualification==="Qualifications")
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
			else if(file_data==null)
			{
				swal("SearchTutions says!", "Please upload an image", "warning")
			}
		}
		else if(file_data!== null)
		{
			if (file_data.type!=="image/jpeg")  
			{
				swal("SearchTutions says!", "Please upload a jpeg file", "warning")

			}
			else if ((file_data.size/1024)>100)
			{
				swal("SearchTutions says!", "Image size should not exceed 100kb", "warning")
			}

			else
			{
				$.ajax({
					url:'php/tutor-request.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
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
		}
	});
});