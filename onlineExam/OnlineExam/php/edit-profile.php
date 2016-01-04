<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$stmt = $db->prepare("UPDATE users SET 
	name = ?, 
	email = ?,
	mobile = ? 
	WHERE username = ?");

$stmt->execute(array($name, $email, $mobile, $username)); 

echo "Update Successfully";