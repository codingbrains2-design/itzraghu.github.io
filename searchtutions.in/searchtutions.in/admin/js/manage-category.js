$(document).ready(function(){

	$('#updateCategoryBtn').on('click', function(){

		var tutorEmail = $('.tutorList1 option:selected').text();
		var tutorCategory = $('#tutorCategory option:selected').text();
		$.ajax({
			url:'php/manage-category.php',
			type:'POST',
			data:{'tutorEmail':tutorEmail, 'tutorCategory':tutorCategory},
			success:function(data)
			{
				swal("SearchTutions Says !",data, "success");
			}
		})
	});
});