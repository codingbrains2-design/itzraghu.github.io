$(document).ready(function() {
	$.ajax({
		url: 'php/total-leaves.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(k, v){
				if (k === 'total_leaves') {
					$('#total_leave').append(v);
				}
			});
		}
	})
	
});