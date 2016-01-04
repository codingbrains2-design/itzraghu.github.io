$(document).ready(function() {
	
	$.ajax({
		url: 'php/session-check.php',
		type: 'GET',
		success: function(data) {
			if (data === "manager") 
			{ 
				window.location.replace('home.php');
			}
		}
	})
});