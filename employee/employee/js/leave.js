$(document).ready(function(){
	$.ajax({
		url:'php/leave.php',
		type:'GET',
		success:function(data){
			var result = $.parseJSON(data);
			$.each(result, function(k, v){
				if (k === 'leaves') {
					$('#leave').append(v);
				}
			});
		}
	})
});
