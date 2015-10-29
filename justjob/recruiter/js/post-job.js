$(document).ready(function() {

	$('#postJobBtn').on('click', function(){
		
		var job_title = $("#job_title").val();
		var keyskills = $("#keyskills option:selected").text();
		var description = $("#description").val();
		var experience = $("#experience").val();
		var role = $("#role").val();
		var salary = $("#salary").val();
		var company = $("#company").val();
		var location = $("#location").val();
		var contact = $("#contact").val();



		$.ajax({
			url:'php/post-job.php',
			type:'POST',
			data:{'job_title':job_title, 'keyskills':keyskills, 'description':description, 'experience':experience, 
			'role':role, 'salary':salary, 'company':company, 'location':location,'contact':contact},
			success:function(data){
				alert(data);
				$('#postJobForm').get(0).reset();
			}
		})
	});
	// requirejs(["emp-details","change-password"]);
});

