$(document).ready(function(){

	$('#sendAppBtn').on('click', function(){
		
		var date_from = $('#date_from').val();
		var date_to = $('#date_to').val();
		var reason = $('#reason').val();


		$.ajax({
			url:'php/leave-application.php',
			type:'POST',
			data:{'date_from':date_from, 'date_to':date_to, 'reason':reason},
			success:function(data){
				alert(data);
			}
		});
	});
	
});