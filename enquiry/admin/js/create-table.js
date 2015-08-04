$(document).ready(function() {

	$('#createTableBtn').on('click', function(){
		
		var clientName = $('#clientName').val();
		if( clientName == "")
		{
			alert('enter table name');
		}
		else
		{
			$.ajax({
				url:'php/create-table.php',
				type:'POST',
				data:{'clientName':clientName},
				success:function(data){
					alert(data);
					window.location.reload();
				}
			})
		}
		
	});

});