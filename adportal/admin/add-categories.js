$(document).ready(function (){

	$('#submit_categories').on('click', function(){
		
		var category = $('#category').val();
		var subcategory = $('#subcategory').val();
		subcategory = subcategory.trim().toUpperCase();
		
		$.ajax({
			url:'add-categories.php',
			type:'POST',
			data:{'category':category, 'subcategory':subcategory},
			success:function(data){
				alert(data);
			}
		})
	});
	
});