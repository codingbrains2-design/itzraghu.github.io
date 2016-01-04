$(document).ready(function(){

	$('#leaveStatusBtn').on('click', function(){

		var empLeave = $('#empLeave').val();
		var empStatus = $('#empStatus').val();

		$.ajax({
			url:'php/leave-status.php',
			type:'POST',
			data:{'empLeave':empLeave, 'empStatus':empStatus},
			success:function(data)
			{
				alert(data);
				$('#leaveStatusForm').get(0).reset();
			}
		})
	});
});