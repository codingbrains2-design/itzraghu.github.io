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





if (0 < $_FILES['file']['error'] AND ($_FILES['file']['type'] !== "application/pdf")) {
	echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else 
{
	move_uploaded_file($_FILES['file']['tmp_name'], $resume_path);
}


$stmt = $db->prepare("INSERT INTO user (id,name,username,password,email,mobile,resume) VALUES (?,?,?,?,?,?,?)");
$stmt->execute(array($id, $name, $username, $password, $email, $mobile,$resume_path));


header("Location: ../index.html");