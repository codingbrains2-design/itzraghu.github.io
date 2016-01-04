$(document).ready(function() {
	
	$('#editProfileBtn').on('click', function(){
		var name = $('#name').val();
		var gender = $('#gender option:selected').text();
		var contact = $('#number').val();
		var address = $('#address').val();
		var location = $('#location option:selected').text();
		var board = $('#board option:selected').text();
		var standard = $('#class option:selected').text();
		var subject = $('#subject option:selected').text();
		var about = $('#about').val();
		var qualification = $('#qualification').val();
		var video = $('#video').val();
		var file_data = $('#file').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('file', file_data);
		form_data.append('name', name);
		form_data.append('gender', gender);
		form_data.append('contact', contact);
		form_data.append('address',address);
		form_data.append('location', location);
		form_data.append('board', board);
		form_data.append('class', standard);
		form_data.append('about', about);
		form_data.append('qualification', qualification);
		form_data.append('video', video);
		form_data.append('subject', subject);

		if(file_data == null)
		{

			$.ajax({
				url:'php/edit-profile.php',
				type:'POST',
				data:{'name':name,'gender':gender,'contact':contact,'address':address,'location':location
				,'board':board,'class':standard, 'subject':subject, 'about':about,'qualification':qualification
				,'video':video},
				success:function(data){
					if(data === "ok")
					{
						swal("SearchTutions Says!","your profile updated successfully", "success");
						$("#editProfileForm").get(0).reset();
					}


				}
			})
		}
		
		else
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
					url:'php/edit-profile.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){

						if(data === "okz")
						{
							swal("SearchTutions Says!","your profile updated successfully", "success");
							$("#editProfileForm").get(0).reset();
						}
						
					}
				})
			}
		}
	});


});