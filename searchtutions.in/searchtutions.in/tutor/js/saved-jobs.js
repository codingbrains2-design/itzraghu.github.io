$(document).ready(function() {
	$.ajax({
		url:'php/saved-jobs.php',
		type:'GET',
		success:function(data)
		{
			// alert(data);
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){
					var viewjobs = $("<div class='col-md-8 col-md-offset-2 viewjobs'></div>").css({
						'border':'2px solid #eee',
						'padding':'15px',
						'margin-bottom':'15px'
					});

					if (k === 'applied_to') 
					{
						var id = $(viewjobs).html("<label class='text-primary'>Job Id : </label> <label id='jobId'>"+ v +"</label><br>");
						$("#viewJobs .row").append(id);							
					}
					if (k === 'job_contact') 
					{
						var contact = $("<label class='text-primary'>Contact : </label> <label>"+ v +"</label><br>");
						$("#viewJobs .row>.viewjobs:last").append(contact);							
					}
					if (k === 'job_email') 
					{
						var email = $("<label class='text-primary'>Email : </label> <label>"+ v +"</label><br>");
						$("#viewJobs .row >.viewjobs:last").append(email);	
					}
					if (k === 'job_email') 
					{
						var btn = $("<button id='applyBtn' class='btn btn-danger pull-right'><i class='fa fa-times'></i> Delete</button>");
						$("#viewJobs .row >.viewjobs:last").append(btn);	
						// $("#viewJobs .row >.viewjobs:last").on('click', '#applyBtn', function(){
						// 	var job_id = $(this).parent().find('#jobId').text();
						// 	$.ajax({
						// 		url:'php/apply-job.php',
						// 		type:'POST',
						// 		data:{'job_id':job_id},
						// 		success:function(data){
						// 			// alert(data);
						// 			if(data === "ok")
						// 			{
						// 				swal("SearchTutions Says!","Job Applied Successfully..!", "success");
						// 			}
						// 		}
						// 	})
						// });
					}
			});
});
}
})
});