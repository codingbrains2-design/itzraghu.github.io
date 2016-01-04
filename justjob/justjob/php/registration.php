<?php
session_start();
require_once 'database.php';


$id = null;
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$date = new DateTime();
$date = $date->format("U");
$resume_path = '../uploads/' . "$username" . $_FILES['file']['name'];

$stmt1 = $db->prepare("SELECT * FROM user WHERE username = ?");
$stmt1->execute(array($username));
$row=$stmt1->fetch(PDO::FETCH_NUM);
if ($row > 0) 
{
	echo 'username already Exists';
}
else 
{
	move_uploaded_file($_FILES['file']['tmp_name'], $resume_path);


	$stmt = $db->prepare("INSERT INTO user (id,name,username,password,email,mobile,resume) VALUES (?,?,?,?,?,?,?)");
	$stmt->execute(array($id, $name, $username, $password, $email, $mobile,$resume_path));
	echo "success";
}