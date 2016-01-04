$(document).ready(function() {
	
	$('#pic1UpdateBtn').on('click', function(){
		pic1();
	});
	$('#pic2UpdateBtn').on('click', function(){
		pic2();
	});
	$('#pic3UpdateBtn').on('click', function(){
		pic3();
	});
	$('#pic4UpdateBtn').on('click', function(){
		pic4();
	});

	function pic1(){
		var pic1Heading = $('#pic1Heading').val();
		var pic1Description = $('#pic1Description').val();
		var pic1Mrp = $('#pic1Mrp').val();
		var pic1Snp = $('#pic1Snp').val();
		var file_data = $('#pic1').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic1', file_data);
		form_data.append('pic1Heading', pic1Heading);
		form_data.append('pic1Description', pic1Description);
		form_data.append('pic1Mrp',pic1Mrp);
		form_data.append('pic1Snp',pic1Snp);
		if(pic1Heading ==="" || pic1Description===""|| pic1Mrp === "" || pic1Snp==="" || file_data==null)
		{
			if(pic1Heading==="")
			{
				swal("Websites says!", "pic1 Heading should not be empty", "warning");
			}

			else if(pic1Description==="")
			{
				swal("Websites says!", "pic1Description should not be empty", "warning");
			}
			else if(pic1Mrp==="")
			{
				swal("Websites says!", "pic1Mrp should not be empty", "warning");
			}

			else if(pic1Snp==="")
			{
				swal("Websites says!", "Write  pic1Snp ", "warning");
			}
			else if(file_data==null)
			{
				swal("Websites says!", "Please upload an image", "warning");
			}
		}
		else if(file_data!== null)
		{
			if (file_data.type!=="image/png")  
			{
				swal("Websites says!", "Please upload a png file", "warning");

			}
			else if ((file_data.size/1024)>2048)
			{
				alert("Websites says!", "Image size should not exceed 2MB", "warning");
			}

			else
			{
				$.ajax({
					url:'php/update-images.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic 1 and Its details saved successfully", "success");

							$("#pic1Form").get(0).reset();
						}
						else
						{

							alert(data);

						}
					}
				});
			}
		}
	}
	function pic2(){
		var pic2Heading = $('#pic2Heading').val();
		var pic2Description = $('#pic2Description').val();
		var pic2Mrp = $('#pic2Mrp').val();
		var pic2Snp = $('#pic2Snp').val();
		var file_data = $('#pic2').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic2', file_data);
		form_data.append('pic2Heading', pic2Heading);
		form_data.append('pic2Description', pic2Description);
		form_data.append('pic2Mrp',pic2Mrp);
		form_data.append('pic2Snp',pic2Snp);
		if(pic2Heading ==="" || pic2Description===""|| pic2Mrp === "" || pic2Snp==="" || file_data==null)
		{
			if(pic2Heading==="")
			{
				swal("Websites says!", "pic2 Heading should not be empty", "warning");
			}

			else if(pic2Description==="")
			{
				swal("Websites says!", "pic2Description should not be empty", "warning");
			}
			else if(pic2Mrp==="")
			{
				swal("Websites says!", "pic2Mrp should not be empty", "warning");
			}

			else if(pic2Snp==="")
			{
				swal("Websites says!", "Write  pic2Snp ", "warning");
			}
			else if(file_data==null)
			{
				swal("Websites says!", "Please upload an image", "warning");
			}
		}
		else if(file_data!== null)
		{
			if (file_data.type!=="image/png")  
			{
				swal("Websites says!", "Please upload a png file", "warning");

			}
			else if ((file_data.size/1024)>2048)
			{
				alert("Websites says!", "Image size should not exceed 2MB", "warning");
			}

			else
			{
				$.ajax({
					url:'php/update-images.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic 2 and Its details saved successfully", "success");

							$("#pic2Form").get(0).reset();
						}
						else
						{
							alert(data);
						}

					}
				});
			}
		}
	}

	function pic3(){
		var pic3Heading = $('#pic3Heading').val();
		var pic3Description = $('#pic3Description').val();
		var pic3Mrp = $('#pic3Mrp').val();
		var pic3Snp = $('#pic3Snp').val();
		var file_data = $('#pic3').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic3', file_data);
		form_data.append('pic3Heading', pic3Heading);
		form_data.append('pic3Description', pic3Description);
		form_data.append('pic3Mrp',pic3Mrp);
		form_data.append('pic3Snp',pic3Snp);
		if(pic3Heading ==="" || pic3Description===""|| pic3Mrp === "" || pic3Snp==="" || file_data==null)
		{
			if(pic3Heading==="")
			{
				swal("Websites says!", "pic3 Heading should not be empty", "warning");
			}

			else if(pic3Description==="")
			{
				swal("Websites says!", "pic3Description should not be empty", "warning");
			}
			else if(pic3Mrp==="")
			{
				swal("Websites says!", "pic3Mrp should not be empty", "warning");
			}

			else if(pic3Snp==="")
			{
				swal("Websites says!", "Write  pic3Snp ", "warning");
			}
			else if(file_data==null)
			{
				swal("Websites says!", "Please upload an image", "warning");
			}
		}
		else if(file_data!== null)
		{
			if (file_data.type!=="image/png")  
			{
				swal("Websites says!", "Please upload a png file", "warning");

			}
			else if ((file_data.size/1024)>2048)
			{
				alert("Websites says!", "Image size should not exceed 2MB", "warning");
			}

			else
			{
				$.ajax({
					url:'php/update-images.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic 3 and Its details saved successfully", "success");

							$("#pic3Form").get(0).reset();
						}
						else
						{
							alert(data);
						}

					}
				});
			}
		}
	}
	function pic4(){
		var pic4Heading = $('#pic4Heading').val();
		var pic4Description = $('#pic4Description').val();
		var pic4Mrp = $('#pic4Mrp').val();
		var pic4Snp = $('#pic4Snp').val();
		var file_data = $('#pic4').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic4', file_data);
		form_data.append('pic4Heading', pic4Heading);
		form_data.append('pic4Description', pic4Description);
		form_data.append('pic4Mrp',pic4Mrp);
		form_data.append('pic4Snp',pic4Snp);

		if(pic4Heading ==="" || pic4Description===""|| pic4Mrp === "" || pic4Snp==="" || file_data==null)
		{
			if(pic4Heading==="")
			{
				swal("Websites says!", "pic4 Heading should not be empty", "warning");
			}

			else if(pic4Description==="")
			{
				swal("Websites says!", "pic4Description should not be empty", "warning");
			}
			else if(pic4Mrp==="")
			{
				swal("Websites says!", "pic4Mrp should not be empty", "warning");
			}

			else if(pic4Snp==="")
			{
				swal("Websites says!", "Write  pic4Snp ", "warning");
			}
			else if(file_data==null)
			{
				swal("Websites says!", "Please upload an image", "warning");
			}
		}
		else if(file_data!== null)
		{
			if (file_data.type!=="image/png")  
			{
				swal("Websites says!", "Please upload a png file", "warning");

			}
			else if ((file_data.size/1024)>2048)
			{
				alert("Websites says!", "Image size should not exceed 2MB", "warning");
			}

			else
			{
				$.ajax({
					url:'php/update-images.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic 4 and Its details saved successfully", "success");

							$("#pic4Form").get(0).reset();
						}
						else
						{
							alert(data);
						}

					}
				});
			}
		}
	}

});