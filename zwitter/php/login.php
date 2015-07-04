<?php
session_start();

require_once 'dbconfig.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = $db->prepare("SELECT EMAIL AND PASSWORD FROM register WHERE EMAIL=? AND PASSWORD=?");
$query->execute(array($email, $password));

$row = $query->fetch(PDO::FETCH_NUM);


if ($row > 0) {

	$_SESSION['user'] = $email;
	echo "home";

}
else {

	echo "Login Failed";
	
}
