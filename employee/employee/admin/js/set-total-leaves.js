$(document).ready(function(){

	$('#totalLeaveBtn').on('click', function(){

		var employee_id = $('#employee_id').val();
		var no_of_days = $('#no_of_days').val();

		$.ajax({
			url:'php/set-total-leaves.php',
			type:'POST',
			data:{'employee_id':employee_id, 'no_of_days':no_of_days},
			success:function(data)
			{
				alert(data);
				$('#totalLeaveForm').get(0).reset();
			}
		})
	});
});