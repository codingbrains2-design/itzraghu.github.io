$(document).ready(function() {
	
	$.ajax({
		url: 'php/session-check.php',
		type: 'GET',
		success: function(data) {
			if (data === "user") 
			{ 
				window.location.replace('user-home.html');
			}
			




		}
	})
});