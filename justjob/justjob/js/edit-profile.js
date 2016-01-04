$(document).ready(function() {

	$('#editProfileBtn').on('click', function(){
		
		var name = $("#name").val();
		var email = $("#email").val();
		var mobile = $("#mobile").val();
		var address = $("#address").val();
		var keyskills = $("#keyskills").val();
		var experience = $("#experience").val();
		var resumeHeadline = $("#resumeHeadline").val();
		var file_data=$('#file').prop('files')[0];
		var form_data=new FormData();

		form_data.append('file',file_data);
		form_data.append('name',name);
		form_data.append('email',email);
		form_data.append('mobile',mobile);
		form_data.append('address',address);
		form_data.append('keyskills',keyskills);
		form_data.append('experience',experience);
		form_data.append('resumeHeadline',resumeHeadline);
		$.ajax({
			url:'php/edit-profile.php',
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			type:'POST',
			data:form_data,
			success:function(data){
				if(data==='ok')
				{
					window.location.reload();
				}
			}
		})
	});
});

