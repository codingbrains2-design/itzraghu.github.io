$(document).ready(function(){

	
	$.ajax({
		url:'php/working-hour.php',
		type:'GET',
		success:function(data){
			alert(data);
			
		}
	})
});
