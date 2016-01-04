<?php
require_once 'database.php';

$id = null;
$personal_id = $_POST['personal_id'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$date_of_joining = $_POST['date_of_joining'];
$designation = $_POST['designation'];

$stmt = $db->prepare("SELECT * FROM employee_details WHERE personal_id = ? ");
$stmt->execute(array($personal_id));
$row = $stmt->fetch(PDO::FETCH_NUM);
if($row>0)
{
	echo "Employee with this personal_id is already Exists";
}
else
{
	$stmt = $db->prepare("INSERT INTO employee_details (id, personal_id, password, first_name, last_name,
		date_of_birth,gender,qualification,date_of_joining,designation) VALUES 
	(?,?,?,?,?,?,?,?,?,?) ");

	$stmt->execute(array($id, $personal_id, $password, $first_name, $last_name, $date_of_birth, 
		$gender, $qualification, $date_of_joining, $designation));
	echo "success";
}
