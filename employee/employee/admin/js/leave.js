$(document).ready(function(){

	
	$.ajax({
		url:'php/leave.php',
		type:'GET',
		success:function(data){
			alert(data);
			
		}
	})
});
