<?php 
session_start();
require_once 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];


$stmt = $db->prepare("SELECT * FROM tutors WHERE email = ? AND password = ?");
$stmt->execute(array($email, $password));
$row=$stmt->fetch(PDO::FETCH_NUM);
if ($row > 0) {
	$_SESSION['tutor'] = $email;
	$stmt1 = $db->query("UPDATE tutors set login_time = now() WHERE email = '$email' ");
	echo "index";

}
else {
	echo "Email or Password are incorrect";
}
