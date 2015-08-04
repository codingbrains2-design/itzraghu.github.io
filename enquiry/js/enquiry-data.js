$(document).ready(function() {

	$('#submit').on('click', function(){
		
		var reference = $('#reference').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var address = $('#address').val();
		var contact = $('#contact').val();
		var mode = $('#mode option:selected').text();
		var status = $('#conversation_status').val();
		
		$.ajax({
			url:'php/enquiry-data.php',
			type:'POST',
			data:{'reference':reference, 'name':name,'email':email, 'address':address,  'contact':contact, 'mode':mode, 'status':status},
			success:function(data){
				alert(data);
				$('#enquiry-form').get(0).reset();
			}
		})
	});

});