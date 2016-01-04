$(document).ready(function() {
	$.ajax({
		url:'php/all-jobs.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){

					var div_jobs = $("<div class='col-md-3 jobs'></div>").css({
						display:'block',
						'min-height':'100px',
						'border-right':'3px solid #eee',
						// 'text-wrap':'suppress',
						'white-space':'pre-wrap'
						// 'word-wrap':'break-word'
					});

					if (k === 'id') 
					{
						var id = $(div_jobs).html("<label class='text-primary'>Job Id : </label> <label>"+ v +"</label><br>");
						$("#Jobs .row").append(id);							
					}
					if (k === 'area') 
					{
						var area = $("<label class='text-primary'>Area : </label> <label>"+ v +"</label><br>");
						$("#Jobs .row>.jobs:last").append(area);							
					}
					if (k === 'parent') 
					{
						var parent_name = $("<label class='text-primary'>Parent : </label> <label>"+ v +"</label><br>");
						$("#Jobs .row >.jobs:last").append(parent_name);	
					}
					if (k === 'requirement') 
					{
						var requirement = $("<label class='text-primary'>Requirement : </label> <label>"+ v +"</label><br>");
						$("#Jobs .row >.jobs:last").append(requirement);	
					}
					if (k === 'requirement') 
					{
						var btn = $("<button class='btn btn-success pull-right'>Apply</button>");
						$("#Jobs .row >.jobs:last").append(btn);	
					}
				});
			});
		}
	})
});