$(document).ready(function() {
	
	$('#newPic1UpdateBtn').on('click', function(){
		newPic1();
	});
	$('#newPic2UpdateBtn').on('click', function(){
		newPic2();
	});
	$('#newPic3UpdateBtn').on('click', function(){
		newPic3();
	});
	$('#newPic4UpdateBtn').on('click', function(){
		newPic4();
	});

	function newPic1(){
		var newPic1Heading = $('#newPic1Heading').val();
		var newPic1Description = $('#newPic1Description').val();
		var newPic1Mrp = $('#newPic1Mrp').val();
		var newPic1Snp = $('#newPic1Snp').val();
		var file_data = $('#newPic1').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('newPic1', file_data);
		form_data.append('newPic1Heading', newPic1Heading);
		form_data.append('newPic1Description', newPic1Description);
		form_data.append('newPic1Mrp',newPic1Mrp);
		form_data.append('newPic1Snp',newPic1Snp);
		if(newPic1Heading ==="" || newPic1Description===""|| newPic1Mrp === "" || newPic1Snp==="" || file_data==null)
		{
			if(newPic1Heading==="")
			{
				swal("Websites says!", "newPic1 Heading should not be empty", "warning");
			}

			else if(newPic1Description==="")
			{
				swal("Websites says!", "newPic1Description should not be empty", "warning");
			}
			else if(newPic1Mrp==="")
			{
				swal("Websites says!", "newPic1Mrp should not be empty", "warning");
			}

			else if(newPic1Snp==="")
			{
				swal("Websites says!", "Write  newPic1Snp ", "warning");
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
					url:'php/update-new-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","newPic 1 and Its details saved successfully", "success");

							$("#newPic1Form").get(0).reset();
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
	function newPic2(){
		var newPic2Heading = $('#newPic2Heading').val();
		var newPic2Description = $('#newPic2Description').val();
		var newPic2Mrp = $('#newPic2Mrp').val();
		var newPic2Snp = $('#newPic2Snp').val();
		var file_data = $('#newPic2').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('newPic2', file_data);
		form_data.append('newPic2Heading', newPic2Heading);
		form_data.append('newPic2Description', newPic2Description);
		form_data.append('newPic2Mrp',newPic2Mrp);
		form_data.append('newPic2Snp',newPic2Snp);
		if(newPic2Heading ==="" || newPic2Description===""|| newPic2Mrp === "" || newPic2Snp==="" || file_data==null)
		{
			if(newPic2Heading==="")
			{
				swal("Websites says!", "newPic2 Heading should not be empty", "warning");
			}

			else if(newPic2Description==="")
			{
				swal("Websites says!", "newPic2Description should not be empty", "warning");
			}
			else if(newPic2Mrp==="")
			{
				swal("Websites says!", "newPic2Mrp should not be empty", "warning");
			}

			else if(newPic2Snp==="")
			{
				swal("Websites says!", "Write  newPic2Snp ", "warning");
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
					url:'php/update-new-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","newPic 2 and Its details saved successfully", "success");

							$("#newPic2Form").get(0).reset();
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

	function newPic3(){
		var newPic3Heading = $('#newPic3Heading').val();
		var newPic3Description = $('#newPic3Description').val();
		var newPic3Mrp = $('#newPic3Mrp').val();
		var newPic3Snp = $('#newPic3Snp').val();
		var file_data = $('#newPic3').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('newPic3', file_data);
		form_data.append('newPic3Heading', newPic3Heading);
		form_data.append('newPic3Description', newPic3Description);
		form_data.append('newPic3Mrp',newPic3Mrp);
		form_data.append('newPic3Snp',newPic3Snp);
		if(newPic3Heading ==="" || newPic3Description===""|| newPic3Mrp === "" || newPic3Snp==="" || file_data==null)
		{
			if(newPic3Heading==="")
			{
				swal("Websites says!", "newPic3 Heading should not be empty", "warning");
			}

			else if(newPic3Description==="")
			{
				swal("Websites says!", "newPic3Description should not be empty", "warning");
			}
			else if(newPic3Mrp==="")
			{
				swal("Websites says!", "newPic3Mrp should not be empty", "warning");
			}

			else if(newPic3Snp==="")
			{
				swal("Websites says!", "Write  newPic3Snp ", "warning");
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
					url:'php/update-new-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","newPic 3 and Its details saved successfully", "success");

							$("#newPic3Form").get(0).reset();
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
	function newPic4(){
		var newPic4Heading = $('#newPic4Heading').val();
		var newPic4Description = $('#newPic4Description').val();
		var newPic4Mrp = $('#newPic4Mrp').val();
		var newPic4Snp = $('#newPic4Snp').val();
		var file_data = $('#newPic4').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('newPic4', file_data);
		form_data.append('newPic4Heading', newPic4Heading);
		form_data.append('newPic4Description', newPic4Description);
		form_data.append('newPic4Mrp',newPic4Mrp);
		form_data.append('newPic4Snp',newPic4Snp);

		if(newPic4Heading ==="" || newPic4Description===""|| newPic4Mrp === "" || newPic4Snp==="" || file_data==null)
		{
			if(newPic4Heading==="")
			{
				swal("Websites says!", "newPic4 Heading should not be empty", "warning");
			}

			else if(newPic4Description==="")
			{
				swal("Websites says!", "newPic4Description should not be empty", "warning");
			}
			else if(newPic4Mrp==="")
			{
				swal("Websites says!", "newPic4Mrp should not be empty", "warning");
			}

			else if(newPic4Snp==="")
			{
				swal("Websites says!", "Write  newPic4Snp ", "warning");
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
					url:'php/update-new-products.php',
					dataType: 'text',  
					cache: false,
					contentType: false,
					processData: false,
					type:'POST',
					data:form_data,
					success:function(data){
						if(data === "ok")
						{
							swal("Websites Says!","newPic 4 and Its details saved successfully", "success");

							$("#newPic4Form").get(0).reset();
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