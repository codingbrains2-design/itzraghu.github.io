$(document).ready(function(){

	$('#setLeaveBtn').on('click', function(){

		var personal_id = $('#personal_id').val();
		var noOfLeaves = $('#noOfLeaves').val();

		$.ajax({
			url:'php/set-leaves.php',
			type:'POST',
			data:{'personal_id':personal_id, 'noOfLeaves':noOfLeaves},
			success:function(data)
			{
				alert(data);
				$('#leaveForm').get(0).reset();
			}
		})
	});
});