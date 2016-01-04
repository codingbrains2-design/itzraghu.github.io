$(document).ready(function() {
	
	$('#supportBtn').on('click', function(){
		var name = $('#senderName').val();
		var email = $('#senderEmail').val();
		var msg = $('#senderMessage').val();

		if(name ==="Your name" || email === "Your email")
		{
			if(name==="Your name")
			{
				swal("SearchTutions says!", "Name should not be empty", "warning")
			}

			else if(email==="Your email")
			{
				swal("SearchTutions says!", "Email should not be empty", "warning")
			}
		}
		else
		{
			$.ajax({
				url:'php/support.php',
				type:'POST',
				data:{'name':name, 'email':email,'msg':msg},
				success:function(data){
					if(data === "ok")
					{
						swal("SearchTutions Says!","Thanks for Your Feedback..!", "success");
						
					}
					$("#supportForm").get(0).reset();
					
				}
			})
		}
	});
});