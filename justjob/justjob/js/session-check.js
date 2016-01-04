$(document).ready(function() {
	
	$.ajax({
		url: 'php/session-check.php',
		type: 'GET',
		success: function(data) {
			if (data === "user") 
			{ 
				window.location.replace('jobseeker-home.html');
			}
			if (data === "recruiter") 
			{ 
				window.location.replace('recruiter/recruiter-home.html');
			}
		}
	})
});