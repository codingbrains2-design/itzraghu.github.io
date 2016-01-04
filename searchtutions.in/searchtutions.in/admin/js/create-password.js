$(document).ready(function(){

	$('#createPassBtn').on('click', function(){

		var tutorEmail = $('.tutorList2 option:selected').text();
		var tutorPassword = $('#tutorPassword').val();

		if(tutorPassword =="")
		{
				swal("SearchTutions Says !",'Please Create any Password', "error");

		}
		else
		{
	
		$.ajax({
			url:'php/create-password.php',
			type:'POST',
			data:{'tutorEmail':tutorEmail, 'tutorPassword':tutorPassword},
			success:function(data)
			{
				swal("SearchTutions Says !",data, "success");
			}
		})
	}
	});
});