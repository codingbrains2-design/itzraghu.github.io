$(document).ready(function() {
	$.ajax({
		url:'php/leads.php',
		type:'GET',
		success:function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){

					var div_post = $('<div class="col-md-7 post"></div>');
					var div_content = $('<div class="col-md-5 content"></div>');
					if (k == 'id') {
						var txt1 = $(div_post).html("<form id='leadForm' class='form'><br><div class='form-group'><label>Email</label><select id='leadEmail' class='form-control requesterEmail'></select><br><label>Contact</label><input id='leadContact' type='text' class='form-control'><br><label>Area</label><input id='leadArea' type='text' class='form-control'><br><label>Parent</label><input id='leadParent' type='text' class='form-control'><br><label>Requirement</label><textarea name='' id='leadRequirement' cols='30' rows='3' class='form-control'></textarea><br><button id='postLeadBtn' class='btn btn-primary'>Post lead</button></div></form>");
						$('#searchTutor .row').append(txt1);
						$('#searchTutor .row >.post:last').on('click','#postLeadBtn', function(e){
							e.stopPropagation();
							e.preventDefault();
							var leadEmail = $(this).parent().find('#leadEmail option:selected').text();
							var leadContact = $(this).parent().find('#leadContact').val();
							var leadArea = $(this).parent().find('#leadArea').val();
							var leadParent = $(this).parent().find('#leadParent').val();
							var leadRequirement = $(this).parent().find('#leadRequirement').val();
							

							if(leadEmail ==="" || leadContact ==="" || leadArea===""|| leadParent === "" || leadRequirement==="")
							{
								if(leadEmail==="")
								{
									swal("SearchTutions says!", "Email should not be empty", "warning")
								}
								else if(leadContact==="")
								{
									swal("SearchTutions says!", "Email should not be empty", "warning")
								}
								else if(leadArea==="")
								{
									swal("SearchTutions says!", "Area should not be empty", "warning")
								}
								else if(leadParent === "")
								{
									swal("SearchTutions says!", "Please provide Requestor Type", "warning")
								}
								else if(leadRequirement === "")
								{
									swal("SearchTutions says!", "Please Provide Some Requirement", "warning")
								}
							}
							else
							{
								$.ajax({
									url:'php/post-lead.php',
									type:'POST',
									data:{'leadEmail':leadEmail, 'leadContact':leadContact, 'leadArea':leadArea, 'leadParent':leadParent, 'leadRequirement':leadRequirement},
									success:function(data)
									{
										swal("SearchTutions Says!",data,"success")
										
										$("#leadForm").get(0).reset();

									}
								})
							}
						});

}
if (k == 'name') {
	var name = $(div_content).html("<h4>"+v+"</h4><span'><hr>");
	$('#searchTutor .row').append(name);
}
if (k == 'email') {
	var email = $(div_content).html("<label class='label label-info'>Email</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(email);
}
if (k == 'mobile') {
	var mobile = $(div_content).html("<label class='label label-info'>Contact</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(mobile);
}
if (k == 'requestor') {
	var requestor = $(div_content).html("<label class='label label-info'>Requestor</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(requestor);
}
if (k == 'location') {
	var location = $(div_content).html("<label class='label label-info'>Location</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(location);
}
if (k == 'board') {
	var board = $(div_content).html("<label class='label label-info'>Board</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(board);
}
if (k == 'standard') {
	var standard = $(div_content).html("<label class='label label-info'>Standard</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(standard);
}
if (k == 'subject') {
	var subject = $(div_content).html("<label class='label label-info'>Subject</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(subject);
}
if (k == 'brief_requirement') {
	var Brief = $(div_content).html("<label class='label label-info'>Brief Requirement</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(Brief);
}
if (k == 'address') {
	var address = $(div_content).html("<label class='label label-info'>Address</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(address);
}
if (k == 'requested_to') {
	var requested_to = $(div_content).html("<label class='label label-info'>Request to</label>&nbsp;<label>"+ v +"</label>");
	$('#searchTutor .row >.content:last').append(requested_to);
}
});
});
}
})


$.ajax({
	url:'php/login-time.php',
	type:'GET',
	success:function(data)
	{
		$("#lastLoginTime").append(data);
	}
});
});