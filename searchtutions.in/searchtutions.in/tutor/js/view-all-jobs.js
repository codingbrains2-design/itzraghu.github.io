$(document).ready(function() {
	$.ajax({
		url:'../php/all-jobs.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){

					var viewjobs = $("<div class='col-md-8 col-md-offset-2 viewjobs'></div>").css({
						'border':'2px solid #eee',
						'padding':'15px',
						'margin-bottom':'15px'
					});

					if (k === 'id') 
					{
						var id = $(viewjobs).html("<label class='text-primary'>Job Id : </label> <label id='jobId'>"+ v +"</label><br>");
						$("#viewJobs .row").append(id);							
					}
					if (k === 'area') 
					{
						var area = $("<label class='text-primary'>Area : </label> <label>"+ v +"</label><br>");
						$("#viewJobs .row>.viewjobs:last").append(area);							
					}
					if (k === 'parent') 
					{
						var parent_name = $("<label class='text-primary'>Parent : </label> <label>"+ v +"</label><br>");
						$("#viewJobs .row >.viewjobs:last").append(parent_name);	
					}
					if (k === 'requirement') 
					{
						var requirement = $("<label class='text-primary'>Requirement : </label> <label>"+ v +"</label><br>");
						$("#viewJobs .row >.viewjobs:last").append(requirement);	
					}
					if (k === 'requirement') 
					{
						var btn = $("<button id='applyBtn' class='btn btn-success pull-right'>Apply</button>");
						$("#viewJobs .row >.viewjobs:last").append(btn);	
						$("#viewJobs .row >.viewjobs:last").on('click', '#applyBtn', function(){
							var job_id = $(this).parent().find('#jobId').text();
							$.ajax({
								url:'php/apply-job.php',
								type:'POST',
								data:{'job_id':job_id},
								success:function(data){
									// alert(data);
									if(data === "ok")
									{
										swal("SearchTutions Says!","Job Applied Successfully..!", "success");
									}
									if(data === "not ok")
									{
										swal("SearchTutions Says!","Your Free Leads are Finished. You can Buy Now.!", "error");
									}
									if(data === "okz")
									{
										swal("SearchTutions Says!","You have Already Applied to this job..!", "warning");
									}
								}
							})
						});
					}
				});
			});
		}
	})
});