$(document).ready(function(){

	$('#setWorkingHourBtn').on('click', function(){

		var empId = $('#empId').val();
		var workingHour = $('#workingHour').val();

		$.ajax({
			url:'php/set-working-hour.php',
			type:'POST',
			data:{'empId':empId, 'workingHour':workingHour},
			success:function(data)
			{
				alert(data);
				$('#workingHourForm').get(0).reset();
			}
		})
	});
});