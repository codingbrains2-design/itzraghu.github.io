$(document).ready(function() {

	$('#addBtn').on('click', function(){
		
		
		var personal_id = $("#personal_id").val();
		var password = $("#password").val();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var date_of_birth = $("#date_of_birth").val();
		var gender = $("input:checked").val();
		var qualification = $("#qualification").val();
		var date_of_joining = $("#date_of_joining").val();
		var designation = $("#designation").val();
		if( personal_id ==="" || password ==="")
		{
			if (personal_id === "")
			{
				swal('Website Says','Personal_id Should Not be Empty','error')
			}
			else if (password === "")
			{
				swal('Website Says','Please Enter password','error')
			}
		}
		else{

			$.ajax({
				url:'php/add-employee.php',
				type:'POST',
				data:{'personal_id':personal_id, 'password':password, 'first_name':first_name, 'last_name':last_name ,
				'date_of_birth':date_of_birth, 'gender':gender, 'qualification':qualification, 'date_of_joining':date_of_joining,
				'designation':designation},
				success:function(data){
					if(data === "success")
					{
						swal('Website Says',data,'success')
						$('#addEmployee').get(0).reset();	
					}
					else
					{
						swal('Website Says',data,'error')
						$('#addEmployee').get(0).reset();	
					}
				}
			})
		}
	});

});