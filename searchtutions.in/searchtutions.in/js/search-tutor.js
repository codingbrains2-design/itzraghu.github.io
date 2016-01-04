$(document).ready(function() {
	$('#searchTutorBtn').on('click', function(){	

		var location = $('#search_location option:selected').text();
		var board = $('#search_board option:selected').text();
		var standard = $('#search_standard option:selected').text();
		
		$.ajax({
			url:'php/search.php',
			type:"POST",
			data:{'location':location,'board':board,'standard':standard},
			success:function(data){
				if(data==="ok")
				window.location.replace('search-results.html');
				// alert(data);
			}
		})
	});
});