$(document).ready(function() {
	
$.ajax({
	url: 'php/main.php',
	type: 'GET',
	success: function(data) {
		if (data === "true") 
			{ 
				window.location.replace('home.html');
			}

		
	}
})
});
