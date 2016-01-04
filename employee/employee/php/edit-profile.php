<?php
session_start();
require_once 'database.php';

$personal_id = $_SESSION['user'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$d_o_b = $_POST['d_o_b'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$address = $_POST['address'];
$postal_code = $_POST['postal_code'];
$marital_status = $_POST['marital_status'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$d_o_j = $_POST['d_o_j'];
$type_of_emp = $_POST['type_of_emp'];
$designation = $_POST['designation'];

$stmt = $db->prepare("UPDATE employee_details SET 
	first_name = ?, 
	last_name = ?,
	date_of_birth = ?,
	age = ?, 
	gender = ?, 
	mobile = ?, 
	email = ?,
	address = ?, 
	postal_code = ?, 
	marital_status = ?,
	qualification = ?, 
	experience = ?,
	date_of_joining = ?,
	type_of_employee = ?, 
	designation = ? 
	WHERE personal_id = ?");

$stmt->execute(array($first_name, $last_name,$d_o_b, $age, $gender, $mobile_no,$email, $address,
$postal_code, $marital_status, $qualification, $experience, $d_o_j, $type_of_emp, $designation, $personal_id)); 

echo "Update Successfully";