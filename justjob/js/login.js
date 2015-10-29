$(document).ready(function(){

	$('#logBtn').on('click', function(){
		var loginType = $("#loginType option:selected").text();
		var username = $("#username").val();
		var password = $("#password").val();

		// if( loginType === "Job Seeker" )
		// {

			$.ajax({
				url:'php/jobseeker-login.php',
				type:'POST',
				data:{'username':username, 'password':password, 'loginType':loginType},
				success:function(data){
					// alert(data);
					if(data === "user") {
						window.location.replace("jobseeker-home.html");
					}
					// else if(data === "recruiter") {
					// 	window.location.replace("recruiter/recruiter-home.html");
					// }
					else{
						alert(data);
					}
				}
			});
		// }

		// else if( loginType === "Recruiter" )
		// {
		// 	$.ajax({
		// 		url:'recruiter/php/recruiter-login.php',
		// 		type:'POST',
		// 		data:{'username':username, 'password':password},
		// 		success:function(data){
		// 			if(data === "index") {
		// 				window.location.replace('recruiter/recruiter-home.html');
		// 			}
		// 			else
		// 			{
		// 				alert(data);
		// 				window.location.replace("index.html");
		// 			}
		// 		}
		// 	});
		// }
		// else{
		// 	alert("login fail");
		// }
	});
});