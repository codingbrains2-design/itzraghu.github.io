$(document).ready(function() {

	$('#editProfileBtn').on('click', function(){
		
		var name = $("#name").val();
		var mobile = $("#mobile").val();
		var email = $("#email").val();
		var location = $("#location").val();
		var recruiting_area = $("#recruiting_area").val();
		var experience = $("#experience").val();
		var company = $("#company").val();
		var designation = $("#designation").val();

		var file_data=$('#file').prop('files')[0];
		var form_data=new FormData();

		form_data.append('file',file_data);
		form_data.append('name',name);
		form_data.append('mobile',mobile);
		form_data.append('email',email);
		form_data.append('location',location);
		form_data.append('recruiting_area',recruiting_area);
		form_data.append('experience',experience);
		form_data.append('company',company);
		form_data.append('designation',designation);

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

