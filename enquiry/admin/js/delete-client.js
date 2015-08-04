$(document).ready(function() {

	$('#deleteClientBtn').on('click', function(){

		var deleteClientName = $('#deleteClientName').val();

		$.ajax({
			url: 'php/delete-client.php',
			type: 'POST',
			data:{'deleteClientName':deleteClientName},
			success:function(data)
			{
				alert(data);
				window.location.reload();
			}
		});
	});
});