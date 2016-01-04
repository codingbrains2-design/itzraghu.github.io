<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$keyskills = $_POST['keyskills'];
$experience = $_POST['experience'];
$resume_headline = $_POST['resumeHeadline'];
$img_path = '../jobseeker-img/' . date('U') . 'pic.jpg';


move_uploaded_file($_FILES['file']['tmp_name'], $img_path);
$stmt = $db->prepare("UPDATE user SET 
	name = ?, 
	email = ?,
	mobile = ?, 
	address = ?, 
	keyskills = ?,
	experience = ?,
	resume_headlines = ?,
	img_path = ? 
	WHERE username = ?");


$stmt->execute(array($name, $email, $mobile, $address, $keyskills, $experience, $resume_headline,$img_path,$username)); 

echo "ok";