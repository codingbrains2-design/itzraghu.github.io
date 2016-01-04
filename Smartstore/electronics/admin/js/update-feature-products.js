$(document).ready(function() {
	
	$('#featurePic1UpdateBtn').on('click', function(){
		featurePic1();
	});
	$('#featurePic2UpdateBtn').on('click', function(){
		featurePic2();
	});
	$('#featurePic3UpdateBtn').on('click', function(){
		featurePic3();
	});
	$('#featurePic4UpdateBtn').on('click', function(){
		featurePic4();
	});

	function featurePic1(){
		var featurePic1Heading = $('#featurePic1Heading').val();
		var featurePic1Description = $('#featurePic1Description').val();
		var featurePic1Mrp = $('#featurePic1Mrp').val();
		var featurePic1Snp = $('#featurePic1Snp').val();
		var file_data = $('#featurePic1').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('featurePic1', file_data);
		form_data.append('featurePic1Heading', featurePic1Heading);
		form_data.append('featurePic1Description', featurePic1Description);
		form_data.append('featurePic1Mrp',featurePic1Mrp);
		form_data.append('featurePic1Snp',featurePic1Snp);
		if(featurePic1Heading ==="" || featurePic1Description===""|| featurePic1Mrp === "" || featurePic1Snp==="" || file_data==null)
		{
			if(featurePic1Heading==="")
			{
				swal("Websites says!", "featurePic1 Heading should not be empty", "warning");
			}

			else if(featurePic1Description==="")
			{
				swal("Websites says!", "featurePic1Description should not be empty", "warning");
			}
			else if(featurePic1Mrp==="")
			{
				swal("Websites says!", "featurePic1Mrp should not be empty", "warning");
			}

			else if(featurePic1Snp==="")
			{
				swal("Websites says!", "Write  featurePic1Snp ", "warning");
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
					url:'php/update-feature-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","featurePic 1 and Its details saved successfully", "success");

							$("#featurePic1Form").get(0).reset();
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
	function featurePic2(){
		var featurePic2Heading = $('#featurePic2Heading').val();
		var featurePic2Description = $('#featurePic2Description').val();
		var featurePic2Mrp = $('#featurePic2Mrp').val();
		var featurePic2Snp = $('#featurePic2Snp').val();
		var file_data = $('#featurePic2').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('featurePic2', file_data);
		form_data.append('featurePic2Heading', featurePic2Heading);
		form_data.append('featurePic2Description', featurePic2Description);
		form_data.append('featurePic2Mrp',featurePic2Mrp);
		form_data.append('featurePic2Snp',featurePic2Snp);
		if(featurePic2Heading ==="" || featurePic2Description===""|| featurePic2Mrp === "" || featurePic2Snp==="" || file_data==null)
		{
			if(featurePic2Heading==="")
			{
				swal("Websites says!", "featurePic2 Heading should not be empty", "warning");
			}

			else if(featurePic2Description==="")
			{
				swal("Websites says!", "featurePic2Description should not be empty", "warning");
			}
			else if(featurePic2Mrp==="")
			{
				swal("Websites says!", "featurePic2Mrp should not be empty", "warning");
			}

			else if(featurePic2Snp==="")
			{
				swal("Websites says!", "Write  featurePic2Snp ", "warning");
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
					url:'php/update-feature-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","featurePic 2 and Its details saved successfully", "success");

							$("#featurePic2Form").get(0).reset();
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

	function featurePic3(){
		var featurePic3Heading = $('#featurePic3Heading').val();
		var featurePic3Description = $('#featurePic3Description').val();
		var featurePic3Mrp = $('#featurePic3Mrp').val();
		var featurePic3Snp = $('#featurePic3Snp').val();
		var file_data = $('#featurePic3').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('featurePic3', file_data);
		form_data.append('featurePic3Heading', featurePic3Heading);
		form_data.append('featurePic3Description', featurePic3Description);
		form_data.append('featurePic3Mrp',featurePic3Mrp);
		form_data.append('featurePic3Snp',featurePic3Snp);
		if(featurePic3Heading ==="" || featurePic3Description===""|| featurePic3Mrp === "" || featurePic3Snp==="" || file_data==null)
		{
			if(featurePic3Heading==="")
			{
				swal("Websites says!", "featurePic3 Heading should not be empty", "warning");
			}

			else if(featurePic3Description==="")
			{
				swal("Websites says!", "featurePic3Description should not be empty", "warning");
			}
			else if(featurePic3Mrp==="")
			{
				swal("Websites says!", "featurePic3Mrp should not be empty", "warning");
			}

			else if(featurePic3Snp==="")
			{
				swal("Websites says!", "Write  featurePic3Snp ", "warning");
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
					url:'php/update-feature-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","featurePic 3 and Its details saved successfully", "success");

							$("#featurePic3Form").get(0).reset();
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
	function featurePic4(){
		var featurePic4Heading = $('#featurePic4Heading').val();
		var featurePic4Description = $('#featurePic4Description').val();
		var featurePic4Mrp = $('#featurePic4Mrp').val();
		var featurePic4Snp = $('#featurePic4Snp').val();
		var file_data = $('#featurePic4').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('featurePic4', file_data);
		form_data.append('featurePic4Heading', featurePic4Heading);
		form_data.append('featurePic4Description', featurePic4Description);
		form_data.append('featurePic4Mrp',featurePic4Mrp);
		form_data.append('featurePic4Snp',featurePic4Snp);

		if(featurePic4Heading ==="" || featurePic4Description===""|| featurePic4Mrp === "" || featurePic4Snp==="" || file_data==null)
		{
			if(featurePic4Heading==="")
			{
				swal("Websites says!", "featurePic4 Heading should not be empty", "warning");
			}

			else if(featurePic4Description==="")
			{
				swal("Websites says!", "featurePic4Description should not be empty", "warning");
			}
			else if(featurePic4Mrp==="")
			{
				swal("Websites says!", "featurePic4Mrp should not be empty", "warning");
			}

			else if(featurePic4Snp==="")
			{
				swal("Websites says!", "Write  featurePic4Snp ", "warning");
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
					url:'php/update-feature-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","featurePic 4 and Its details saved successfully", "success");

							$("#featurePic4Form").get(0).reset();
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