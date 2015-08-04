$(document).ready(function(){

	$('#searchReferenceBtn').on('click', function(){
		
		var keyword = $('#referencekeyword').val();


		$.ajax({
			url:'php/search-reference.php',
			type:'POST',
			data:{'keyword':keyword},
			success:function(data){
				alert(data);
			}
		});
	});
	
});