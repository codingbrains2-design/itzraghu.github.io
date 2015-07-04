$(document).ready(function(){
	$.ajax({
		url: 'php/redirectToIndex.php',
		type: 'GET',
		success:function(data){

			if (data === "index") 
				{ 
					window.location.replace('index.html'); 
				}

				else 
					{ 
						$('h1').append(data); 
					}
		}
	})
	
});