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

	$('#pic5UpdateBtn').on('click', function(){
		pic5();
	});

	$('#pic6UpdateBtn').on('click', function(){
		pic6();
	});

	$('#pic7UpdateBtn').on('click', function(){
		pic7();
	});

	$('#pic8UpdateBtn').on('click', function(){
		pic8();
	});

	$('#pic9UpdateBtn').on('click', function(){
		pic9();
	});

	$('#pic10UpdateBtn').on('click', function(){
		pic10();
	});

	$('#pic11UpdateBtn').on('click', function(){
		pic11();
	});

	$('#pic12UpdateBtn').on('click', function(){
		pic12();
	});

	$('#pic13UpdateBtn').on('click', function(){
		pic13();
	});
	$('#pic14UpdateBtn').on('click', function(){
		pic14();
	});

	$('#pic15UpdateBtn').on('click', function(){
		pic15();
	});

	$('#pic16UpdateBtn').on('click', function(){
		pic16();
	});

	$('#pic17UpdateBtn').on('click', function(){
		pic17();
	});

	$('#pic18UpdateBtn').on('click', function(){
		pic18();
	});

	$('#pic19UpdateBtn').on('click', function(){
		pic19();
	});

	$('#pic20UpdateBtn').on('click', function(){
		pic20();
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
					url:'php/update-refrigerators-products.php',
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
					url:'php/update-refrigerators-products.php',
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
					url:'php/update-refrigerators-products.php',
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

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

	function pic5(){
		var pic5Heading = $('#pic5Heading').val();
		var pic5Description = $('#pic5Description').val();
		var pic5Mrp = $('#pic5Mrp').val();
		var pic5Snp = $('#pic5Snp').val();
		var file_data = $('#pic5').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic5', file_data);
		form_data.append('pic5Heading', pic5Heading);
		form_data.append('pic5Description', pic5Description);
		form_data.append('pic5Mrp',pic5Mrp);
		form_data.append('pic5Snp',pic5Snp);

		// alert(pic5Heading);
		// alert(pic5Description);
		// alert(pic5Mrp);
		// alert(pic5Snp);
		// alert(form_data);

		if(pic5Heading ==="" || pic5Description===""|| pic5Mrp === "" || pic5Snp==="" || file_data==null)
		{
			if(pic5Heading==="")
			{
				swal("Websites says!", "pic5 Heading should not be empty", "warning");
			}

			else if(pic5Description==="")
			{
				swal("Websites says!", "pic5Description should not be empty", "warning");
			}
			else if(pic5Mrp==="")
			{
				swal("Websites says!", "pic5Mrp should not be empty", "warning");
			}

			else if(pic5Snp==="")
			{
				swal("Websites says!", "Write  pic5Snp ", "warning");
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
			else if ((file_data.size/1025)>2048)
			{
				alert("Websites says!", "Image size should not exceed 2MB", "warning");
			}

			else
			{
				$.ajax({
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic 5 and Its details saved successfully", "success");

							$("#pic5Form").get(0).reset();
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
	function pic6(){
		var pic6Heading = $('#pic6Heading').val();
		var pic6Description = $('#pic6Description').val();
		var pic6Mrp = $('#pic6Mrp').val();
		var pic6Snp = $('#pic6Snp').val();
		var file_data = $('#pic6').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic6', file_data);
		form_data.append('pic6Heading', pic6Heading);
		form_data.append('pic6Description', pic6Description);
		form_data.append('pic6Mrp',pic6Mrp);
		form_data.append('pic6Snp',pic6Snp);

		if(pic6Heading ==="" || pic6Description===""|| pic6Mrp === "" || pic6Snp==="" || file_data==null)
		{
			if(pic6Heading==="")
			{
				swal("Websites says!", "pic6 Heading should not be empty", "warning");
			}

			else if(pic6Description==="")
			{
				swal("Websites says!", "pic6Description should not be empty", "warning");
			}
			else if(pic6Mrp==="")
			{
				swal("Websites says!", "pic6Mrp should not be empty", "warning");
			}

			else if(pic6Snp==="")
			{
				swal("Websites says!", "Write  pic6Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic6Form").get(0).reset();
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
	function pic7(){
		var pic7Heading = $('#pic7Heading').val();
		var pic7Description = $('#pic7Description').val();
		var pic7Mrp = $('#pic7Mrp').val();
		var pic7Snp = $('#pic7Snp').val();
		var file_data = $('#pic7').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic7', file_data);
		form_data.append('pic7Heading', pic7Heading);
		form_data.append('pic7Description', pic7Description);
		form_data.append('pic7Mrp',pic7Mrp);
		form_data.append('pic7Snp',pic7Snp);

		if(pic7Heading ==="" || pic7Description===""|| pic7Mrp === "" || pic7Snp==="" || file_data==null)
		{
			if(pic7Heading==="")
			{
				swal("Websites says!", "pic7 Heading should not be empty", "warning");
			}

			else if(pic7Description==="")
			{
				swal("Websites says!", "pic7Description should not be empty", "warning");
			}
			else if(pic7Mrp==="")
			{
				swal("Websites says!", "pic7Mrp should not be empty", "warning");
			}

			else if(pic7Snp==="")
			{
				swal("Websites says!", "Write  pic7Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic7Form").get(0).reset();
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
	function pic8(){
		var pic8Heading = $('#pic8Heading').val();
		var pic8Description = $('#pic8Description').val();
		var pic8Mrp = $('#pic8Mrp').val();
		var pic8Snp = $('#pic8Snp').val();
		var file_data = $('#pic8').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic8', file_data);
		form_data.append('pic8Heading', pic8Heading);
		form_data.append('pic8Description', pic8Description);
		form_data.append('pic8Mrp',pic8Mrp);
		form_data.append('pic8Snp',pic8Snp);

		if(pic8Heading ==="" || pic8Description===""|| pic8Mrp === "" || pic8Snp==="" || file_data==null)
		{
			if(pic8Heading==="")
			{
				swal("Websites says!", "pic8 Heading should not be empty", "warning");
			}

			else if(pic8Description==="")
			{
				swal("Websites says!", "pic8Description should not be empty", "warning");
			}
			else if(pic8Mrp==="")
			{
				swal("Websites says!", "pic8Mrp should not be empty", "warning");
			}

			else if(pic8Snp==="")
			{
				swal("Websites says!", "Write  pic8Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic8Form").get(0).reset();
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
	function pic9(){
		var pic9Heading = $('#pic9Heading').val();
		var pic9Description = $('#pic9Description').val();
		var pic9Mrp = $('#pic9Mrp').val();
		var pic9Snp = $('#pic9Snp').val();
		var file_data = $('#pic9').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic9', file_data);
		form_data.append('pic9Heading', pic9Heading);
		form_data.append('pic9Description', pic9Description);
		form_data.append('pic9Mrp',pic9Mrp);
		form_data.append('pic9Snp',pic9Snp);

		if(pic9Heading ==="" || pic9Description===""|| pic9Mrp === "" || pic9Snp==="" || file_data==null)
		{
			if(pic9Heading==="")
			{
				swal("Websites says!", "pic9 Heading should not be empty", "warning");
			}

			else if(pic9Description==="")
			{
				swal("Websites says!", "pic9Description should not be empty", "warning");
			}
			else if(pic9Mrp==="")
			{
				swal("Websites says!", "pic9Mrp should not be empty", "warning");
			}

			else if(pic9Snp==="")
			{
				swal("Websites says!", "Write  pic9Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic9Form").get(0).reset();
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
	function pic10(){
		var pic10Heading = $('#pic10Heading').val();
		var pic10Description = $('#pic10Description').val();
		var pic10Mrp = $('#pic10Mrp').val();
		var pic10Snp = $('#pic10Snp').val();
		var file_data = $('#pic10').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic10', file_data);
		form_data.append('pic10Heading', pic10Heading);
		form_data.append('pic10Description', pic10Description);
		form_data.append('pic10Mrp',pic10Mrp);
		form_data.append('pic10Snp',pic10Snp);

		if(pic10Heading ==="" || pic10Description===""|| pic10Mrp === "" || pic10Snp==="" || file_data==null)
		{
			if(pic10Heading==="")
			{
				swal("Websites says!", "pic10 Heading should not be empty", "warning");
			}

			else if(pic10Description==="")
			{
				swal("Websites says!", "pic10Description should not be empty", "warning");
			}
			else if(pic10Mrp==="")
			{
				swal("Websites says!", "pic10Mrp should not be empty", "warning");
			}

			else if(pic10Snp==="")
			{
				swal("Websites says!", "Write  pic10Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic10Form").get(0).reset();
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
	function pic11(){
		var pic11Heading = $('#pic11Heading').val();
		var pic11Description = $('#pic11Description').val();
		var pic11Mrp = $('#pic11Mrp').val();
		var pic11Snp = $('#pic11Snp').val();
		var file_data = $('#pic11').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic11', file_data);
		form_data.append('pic11Heading', pic11Heading);
		form_data.append('pic11Description', pic11Description);
		form_data.append('pic11Mrp',pic11Mrp);
		form_data.append('pic11Snp',pic11Snp);

		if(pic11Heading ==="" || pic11Description===""|| pic11Mrp === "" || pic11Snp==="" || file_data==null)
		{
			if(pic11Heading==="")
			{
				swal("Websites says!", "pic11 Heading should not be empty", "warning");
			}

			else if(pic11Description==="")
			{
				swal("Websites says!", "pic11Description should not be empty", "warning");
			}
			else if(pic11Mrp==="")
			{
				swal("Websites says!", "pic11Mrp should not be empty", "warning");
			}

			else if(pic11Snp==="")
			{
				swal("Websites says!", "Write  pic11Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic11Form").get(0).reset();
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
	function pic12(){
		var pic12Heading = $('#pic12Heading').val();
		var pic12Description = $('#pic12Description').val();
		var pic12Mrp = $('#pic12Mrp').val();
		var pic12Snp = $('#pic12Snp').val();
		var file_data = $('#pic12').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic12', file_data);
		form_data.append('pic12Heading', pic12Heading);
		form_data.append('pic12Description', pic12Description);
		form_data.append('pic12Mrp',pic12Mrp);
		form_data.append('pic12Snp',pic12Snp);

		if(pic12Heading ==="" || pic12Description===""|| pic12Mrp === "" || pic12Snp==="" || file_data==null)
		{
			if(pic12Heading==="")
			{
				swal("Websites says!", "pic12 Heading should not be empty", "warning");
			}

			else if(pic12Description==="")
			{
				swal("Websites says!", "pic12Description should not be empty", "warning");
			}
			else if(pic12Mrp==="")
			{
				swal("Websites says!", "pic12Mrp should not be empty", "warning");
			}

			else if(pic12Snp==="")
			{
				swal("Websites says!", "Write  pic12Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic12Form").get(0).reset();
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
	function pic13(){
		var pic13Heading = $('#pic13Heading').val();
		var pic13Description = $('#pic13Description').val();
		var pic13Mrp = $('#pic13Mrp').val();
		var pic13Snp = $('#pic13Snp').val();
		var file_data = $('#pic13').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic13', file_data);
		form_data.append('pic13Heading', pic13Heading);
		form_data.append('pic13Description', pic13Description);
		form_data.append('pic13Mrp',pic13Mrp);
		form_data.append('pic13Snp',pic13Snp);

		if(pic13Heading ==="" || pic13Description===""|| pic13Mrp === "" || pic13Snp==="" || file_data==null)
		{
			if(pic13Heading==="")
			{
				swal("Websites says!", "pic13 Heading should not be empty", "warning");
			}

			else if(pic13Description==="")
			{
				swal("Websites says!", "pic13Description should not be empty", "warning");
			}
			else if(pic13Mrp==="")
			{
				swal("Websites says!", "pic13Mrp should not be empty", "warning");
			}

			else if(pic13Snp==="")
			{
				swal("Websites says!", "Write  pic13Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic13Form").get(0).reset();
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
	function pic14(){
		var pic14Heading = $('#pic14Heading').val();
		var pic14Description = $('#pic14Description').val();
		var pic14Mrp = $('#pic14Mrp').val();
		var pic14Snp = $('#pic14Snp').val();
		var file_data = $('#pic14').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic14', file_data);
		form_data.append('pic14Heading', pic14Heading);
		form_data.append('pic14Description', pic14Description);
		form_data.append('pic14Mrp',pic14Mrp);
		form_data.append('pic14Snp',pic14Snp);

		if(pic14Heading ==="" || pic14Description===""|| pic14Mrp === "" || pic14Snp==="" || file_data==null)
		{
			if(pic14Heading==="")
			{
				swal("Websites says!", "pic14 Heading should not be empty", "warning");
			}

			else if(pic14Description==="")
			{
				swal("Websites says!", "pic14Description should not be empty", "warning");
			}
			else if(pic14Mrp==="")
			{
				swal("Websites says!", "pic14Mrp should not be empty", "warning");
			}

			else if(pic14Snp==="")
			{
				swal("Websites says!", "Write  pic14Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic14Form").get(0).reset();
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
	function pic15(){
		var pic15Heading = $('#pic15Heading').val();
		var pic15Description = $('#pic15Description').val();
		var pic15Mrp = $('#pic15Mrp').val();
		var pic15Snp = $('#pic15Snp').val();
		var file_data = $('#pic15').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic15', file_data);
		form_data.append('pic15Heading', pic15Heading);
		form_data.append('pic15Description', pic15Description);
		form_data.append('pic15Mrp',pic15Mrp);
		form_data.append('pic15Snp',pic15Snp);

		if(pic15Heading ==="" || pic15Description===""|| pic15Mrp === "" || pic15Snp==="" || file_data==null)
		{
			if(pic15Heading==="")
			{
				swal("Websites says!", "pic15 Heading should not be empty", "warning");
			}

			else if(pic15Description==="")
			{
				swal("Websites says!", "pic15Description should not be empty", "warning");
			}
			else if(pic15Mrp==="")
			{
				swal("Websites says!", "pic15Mrp should not be empty", "warning");
			}

			else if(pic15Snp==="")
			{
				swal("Websites says!", "Write  pic15Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic15Form").get(0).reset();
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
	function pic16(){
		var pic16Heading = $('#pic16Heading').val();
		var pic16Description = $('#pic16Description').val();
		var pic16Mrp = $('#pic16Mrp').val();
		var pic16Snp = $('#pic16Snp').val();
		var file_data = $('#pic16').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic16', file_data);
		form_data.append('pic16Heading', pic16Heading);
		form_data.append('pic16Description', pic16Description);
		form_data.append('pic16Mrp',pic16Mrp);
		form_data.append('pic16Snp',pic16Snp);

		if(pic16Heading ==="" || pic16Description===""|| pic16Mrp === "" || pic16Snp==="" || file_data==null)
		{
			if(pic16Heading==="")
			{
				swal("Websites says!", "pic16 Heading should not be empty", "warning");
			}

			else if(pic16Description==="")
			{
				swal("Websites says!", "pic16Description should not be empty", "warning");
			}
			else if(pic16Mrp==="")
			{
				swal("Websites says!", "pic16Mrp should not be empty", "warning");
			}

			else if(pic16Snp==="")
			{
				swal("Websites says!", "Write  pic16Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic16Form").get(0).reset();
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
	function pic17(){
		var pic17Heading = $('#pic17Heading').val();
		var pic17Description = $('#pic17Description').val();
		var pic17Mrp = $('#pic17Mrp').val();
		var pic17Snp = $('#pic17Snp').val();
		var file_data = $('#pic17').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic17', file_data);
		form_data.append('pic17Heading', pic17Heading);
		form_data.append('pic17Description', pic17Description);
		form_data.append('pic17Mrp',pic17Mrp);
		form_data.append('pic17Snp',pic17Snp);

		if(pic17Heading ==="" || pic17Description===""|| pic17Mrp === "" || pic17Snp==="" || file_data==null)
		{
			if(pic17Heading==="")
			{
				swal("Websites says!", "pic17 Heading should not be empty", "warning");
			}

			else if(pic17Description==="")
			{
				swal("Websites says!", "pic17Description should not be empty", "warning");
			}
			else if(pic17Mrp==="")
			{
				swal("Websites says!", "pic17Mrp should not be empty", "warning");
			}

			else if(pic17Snp==="")
			{
				swal("Websites says!", "Write  pic17Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic17Form").get(0).reset();
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
	function pic18(){
		var pic18Heading = $('#pic18Heading').val();
		var pic18Description = $('#pic18Description').val();
		var pic18Mrp = $('#pic18Mrp').val();
		var pic18Snp = $('#pic18Snp').val();
		var file_data = $('#pic18').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic18', file_data);
		form_data.append('pic18Heading', pic18Heading);
		form_data.append('pic18Description', pic18Description);
		form_data.append('pic18Mrp',pic18Mrp);
		form_data.append('pic18Snp',pic18Snp);

		if(pic18Heading ==="" || pic18Description===""|| pic18Mrp === "" || pic18Snp==="" || file_data==null)
		{
			if(pic18Heading==="")
			{
				swal("Websites says!", "pic18 Heading should not be empty", "warning");
			}

			else if(pic18Description==="")
			{
				swal("Websites says!", "pic18Description should not be empty", "warning");
			}
			else if(pic18Mrp==="")
			{
				swal("Websites says!", "pic18Mrp should not be empty", "warning");
			}

			else if(pic18Snp==="")
			{
				swal("Websites says!", "Write  pic18Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic18Form").get(0).reset();
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
	function pic19(){
		var pic19Heading = $('#pic19Heading').val();
		var pic19Description = $('#pic19Description').val();
		var pic19Mrp = $('#pic19Mrp').val();
		var pic19Snp = $('#pic19Snp').val();
		var file_data = $('#pic19').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic19', file_data);
		form_data.append('pic19Heading', pic19Heading);
		form_data.append('pic19Description', pic19Description);
		form_data.append('pic19Mrp',pic19Mrp);
		form_data.append('pic19Snp',pic19Snp);

		if(pic19Heading ==="" || pic19Description===""|| pic19Mrp === "" || pic19Snp==="" || file_data==null)
		{
			if(pic19Heading==="")
			{
				swal("Websites says!", "pic19 Heading should not be empty", "warning");
			}

			else if(pic19Description==="")
			{
				swal("Websites says!", "pic19Description should not be empty", "warning");
			}
			else if(pic19Mrp==="")
			{
				swal("Websites says!", "pic19Mrp should not be empty", "warning");
			}

			else if(pic19Snp==="")
			{
				swal("Websites says!", "Write  pic19Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic19Form").get(0).reset();
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
	function pic20(){
		var pic20Heading = $('#pic20Heading').val();
		var pic20Description = $('#pic20Description').val();
		var pic20Mrp = $('#pic20Mrp').val();
		var pic20Snp = $('#pic20Snp').val();
		var file_data = $('#pic20').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('pic20', file_data);
		form_data.append('pic20Heading', pic20Heading);
		form_data.append('pic20Description', pic20Description);
		form_data.append('pic20Mrp',pic20Mrp);
		form_data.append('pic20Snp',pic20Snp);

		if(pic20Heading ==="" || pic20Description===""|| pic20Mrp === "" || pic20Snp==="" || file_data==null)
		{
			if(pic20Heading==="")
			{
				swal("Websites says!", "pic20 Heading should not be empty", "warning");
			}

			else if(pic20Description==="")
			{
				swal("Websites says!", "pic20Description should not be empty", "warning");
			}
			else if(pic20Mrp==="")
			{
				swal("Websites says!", "pic20Mrp should not be empty", "warning");
			}

			else if(pic20Snp==="")
			{
				swal("Websites says!", "Write  pic20Snp ", "warning");
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
					url:'php/update-refrigerators-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","Pic and Its details saved successfully", "success");

							$("#pic20Form").get(0).reset();
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