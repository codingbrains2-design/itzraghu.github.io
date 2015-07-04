$(document).ready(function(){

	
		$.ajax({
			url:'admin.php',
			type:'GET',
			success:function(data){
				// alert(data);
				if (data === "admin") {
					window.location.replace("home.html");
				}
			}
		})
	});
	
});