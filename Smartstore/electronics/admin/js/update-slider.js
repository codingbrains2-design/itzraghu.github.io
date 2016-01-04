$(document).ready(function() {
	
	$('#slider1UpdateBtn').on('click', function(){
		slider1();
	});
	$('#slider2UpdateBtn').on('click', function(){
		slider2();
	});
	$('#slider3UpdateBtn').on('click', function(){
		slider3();
	});
	$('#slider4UpdateBtn').on('click', function(){
		slider4();
	});

	function slider1(){
		
		var file_data = $('#slider1').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('slider1', file_data);
		
		if(file_data==null)
		{
			swal("Websites says!", "Please upload an image", "warning");
		}

		else if(file_data!== null)
		{
			if (file_data.type!=="image/png" && file_data.type!=="image/jpeg" && file_data.type!=="image/jpg")  
			{
				swal("Websites says!", "Please upload a valid image file", "warning");

			}

			else
			{
				$.ajax({
					url:'php/update-slider.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						// alert(data);
						if(data === "ok")
						{
							swal("Websites Says!","slider 1 saved successfully", "success");

						}
						else
						{

							swal(data)

						}
					}
				});
			}
		}

	}

	function slider2(){
		
		var file_data = $('#slider2').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('slider2', file_data);
		
		if(file_data==null)
		{
			swal("Websites says!", "Please upload an image", "warning");
		}

		else if(file_data!== null)
		{
			if (file_data.type!=="image/png" && file_data.type!=="image/jpeg" && file_data.type!=="image/jpg")  
			{
				swal("Websites says!", "Please upload a valid image file", "warning");

			}

			else
			{
				$.ajax({
					url:'php/update-slider.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						// alert(data);
						if(data === "ok")
						{
							swal("Websites Says!","slider 2 saved successfully", "success");

						}
						else
						{

							swal(data)

						}
					}
				});
			}
		}

	}
	function slider3(){
		
		var file_data = $('#slider3').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('slider3', file_data);
		
		if(file_data==null)
		{
			swal("Websites says!", "Please upload an image", "warning");
		}

		else if(file_data!== null)
		{
			if (file_data.type!=="image/png" && file_data.type!=="image/jpeg" && file_data.type!=="image/jpg")  
			{
				swal("Websites says!", "Please upload a valid image file", "warning");

			}

			else
			{
				$.ajax({
					url:'php/update-slider.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						// alert(data);
						if(data === "ok")
						{
							swal("Websites Says!","slider 3 saved successfully", "success");

						}
						else
						{

							swal(data)

						}
					}
				});
			}
		}

	}
	function slider4(){
		
		var file_data = $('#slider4').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('slider4', file_data);
		
		if(file_data==null)
		{
			swal("Websites says!", "Please upload an image", "warning");
		}

		else if(file_data!== null)
		{
			if (file_data.type!=="image/png" && file_data.type!=="image/jpeg" && file_data.type!=="image/jpg")  
			{
				swal("Websites says!", "Please upload a valid image file", "warning");

			}

			else
			{
				$.ajax({
					url:'php/update-slider.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						// alert(data);
						if(data === "ok")
						{
							swal("Websites Says!","slider 4 saved successfully", "success");

						}
						else
						{

							swal(data)

						}
					}
				});
			}
		}

	}


});