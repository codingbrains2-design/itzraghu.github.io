$(document).ready(function (){

	$('#submit_location').on('click', function(){
		
		var state = $('#state').val();
		var city = $('#city').val();
		city = city.trim().toUpperCase();
		
		$.ajax({
			url:'add-location.php',
			type:'POST',
			data:{'state':state, 'city':city},
			success:function(data){
				alert(data);
			}
		})
	});
	
});