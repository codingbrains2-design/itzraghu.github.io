$(document).ready(function() {
	$('#postLeadBtn').on('click', function(e){
		e.stopPropagation();
		e.preventDefault();
		var leadEmail = $('#leadEmail').val();
		var leadContact = $('#leadContact').val();
		var leadArea = $('#leadArea').val();
		var leadRequester = $('#leadRequester').val();
		var leadRequirement = $('#leadRequirement').val();


		if(leadEmail ==="" || leadContact ==="" || leadArea===""|| leadRequester === "" || leadRequirement==="")
		{
			if(leadEmail==="")
			{
				swal("SearchTutions says!", "Email should not be empty", "warning")
			}
			else if(leadContact==="")
			{
				swal("SearchTutions says!", "Contact should not be empty", "warning")
			}
			else if(leadArea==="")
			{
				swal("SearchTutions says!", "Area should not be empty", "warning")
			}
			else if(leadRequester === "")
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
				data:{'leadEmail':leadEmail, 'leadContact':leadContact, 'leadArea':leadArea, 'leadRequester':leadRequester, 'leadRequirement':leadRequirement},
				success:function(data)
				{
					swal("SearchTutions Says!",data,"success")

					$("#leadForm").get(0).reset();

				}
			})
		}
	});




$.ajax({
	url:'php/login-time.php',
	type:'GET',
	success:function(data)
	{
		$("#lastLoginTime").append(data);
	}
});

});