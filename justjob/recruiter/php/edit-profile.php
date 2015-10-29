<?php
session_start();
require_once 'database.php';

$username = $_SESSION['recruiter'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$company = $_POST['company'];
$experience = $_POST['experience'];
$recruiting_area = $_POST['recruiting_area'];
$designation = $_POST['designation'];
$location = $_POST['location'];

$stmt = $db->prepare("UPDATE recruiter SET 
	name = ?, 
	email = ?,
	contact = ?, 
	company = ?, 
	experience = ?,
	recruiting_area = ?,
	designation = ?,
	location = ? 
	WHERE username = ?");

$stmt->execute(array($name, $email, $mobile, $company, $experience, $recruiting_area, $designation,$location, $username)); 


echo "Profile Update Successfully";