$(document).ready(function(){
	$("#ad_btn").on('click', function(){

		
		// var title  = $("#ad_title").val();
		// var price  = $("#price").val();
		// var model = $("#model").val();
		// var description = $("#description").val();
		// var name  = $("#name").val();
		// var email = $("#email").val();
		// var phone= $("#phone").val();
		// var city= $("#city").val();

		
		var file_data = $('#file').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('file', file_data);



		$.ajax({
			url: 'php/post.php', 
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(data){
				alert(data); 
			}


		});
	});
});