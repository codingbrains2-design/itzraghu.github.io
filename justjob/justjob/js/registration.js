$(document).ready(function() {
	$("#regBtn").on('click',function(e){
		e.preventDefault();
		
		var name=$('#name').val();
		var username=$('#newUsername').val();
		var password=$('#newPassword').val();
		var email=$('#email').val();
		var mobile=$('#mobile').val();
		var file_data=$('#file').prop('files')[0];
		var form_data=new FormData();
		
		if(name === "" || username === "" || password === "" || email === "" || file_data==null)
		{

			if(name === "")
			{
				swal('Website Says', 'Name Should Not Be Empty','error')
			}
			else if(username === "")
			{
				swal('Website Says', 'Username Should Not Be Empty','error')
			}
			else if(password === "")
			{
				swal('Website Says', 'Password Should Not Be Empty','error')
			}
			else if(email === "")
			{
				swal('Website Says', 'Email Should Not Be Empty','error')
			}
			else if(file_data == null)
			{
				swal('Website Says', 'Upload Your Resume','error')
			}
		}
		else if(file_data!== null)
		{
			if (file_data.type!=="application/pdf")  
			{
				swal("SearchTutions says!", "Please upload a pdf file", "warning")

			}
			else if ((file_data.size/1024)>500)
			{
				swal("SearchTutions says!", "Image size should not exceed 500kb", "warning")
			}

			else
			{

				form_data.append('file',file_data);
				form_data.append('name',name);
				form_data.append('username',username);
				form_data.append('password',password);
				form_data.append('email',email);
				form_data.append('mobile',mobile);

				$.ajax({
					url:'php/registration.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data==='success')
						{
							swal("Website says!", "Registered Successfully", "success");

						}
						else
						{
							alert(data);
						}
					}
				})
			}
		}
	})
});