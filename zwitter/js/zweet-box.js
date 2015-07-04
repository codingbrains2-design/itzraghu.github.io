$(document).ready(function() {
	$("#zweetBtn").on('click', function(event) {
		event.preventDefault();
		var zweetMsg = $("#zweetMsg").val();
		

		$.ajax({
			url: 'php/zweet-box.php',
			type: 'POST',
			data: {'zweetMsg':zweetMsg},
			success:function(data)
			{
				alert(data);
				window.location.reload();
			}
		})

	});
	
});