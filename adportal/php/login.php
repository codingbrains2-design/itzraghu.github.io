<?php 
session_start();
require_once 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $dbh->prepare("SELECT * FROM register WHERE email=? AND password= ?");
$stmt->execute(array($email, $password));
$row=$stmt->fetch(PDO::FETCH_NUM);
if ($row > 0) {
	$_SESSION['user'] = $email;
	echo "Login Successful";
}
else {
	echo "Login Failed";
}
