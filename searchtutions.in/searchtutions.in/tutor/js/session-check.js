$(document).ready(function() {
	
	$.ajax({
		url: '../php/session-check.php',
		type: 'GET',
		success: function(data) {
			if (data === "tutor") 
			{ 
				window.location.replace('home.php');
			}
		}
	})
});