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
$img_path = '../recruiter-img/' . date('U') . 'pic.jpg';


move_uploaded_file($_FILES['file']['tmp_name'], $img_path);

$stmt = $db->prepare("UPDATE recruiter SET 
	name = ?, 
	email = ?,
	contact = ?, 
	company = ?, 
	experience = ?,
	recruiting_area = ?,
	designation = ?,
	location = ? ,
	img_path = ?
	WHERE username = ?");

$stmt->execute(array($name, $email, $mobile, $company, $experience, $recruiting_area, $designation,$location,$img_path, $username)); 


echo "ok";