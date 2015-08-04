$(document).ready(function(){

	$('#searchNameBtn').on('click', function(){
		
		var keyword = $('#namekeyword').val();
		

		$.ajax({
			url:'php/search-name.php',
			type:'POST',
			data:{'keyword':keyword},
			success:function(data){
				alert(data);
			}
		});
	});
	
});