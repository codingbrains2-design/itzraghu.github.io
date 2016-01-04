$(document).ready(function() {

	$('#deleteEmpBtn').on('click', function(){

		var empId = $('#empId option:selected').text();

		$.ajax({
			url: 'php/delete-employee.php',
			type: 'POST',
			data:{'empId':empId},
			success:function(data)
			{
				alert(data);
				window.location.reload();
			}
		});
	});
});