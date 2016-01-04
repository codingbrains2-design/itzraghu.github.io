<?php 
session_start();
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
$stmt->execute(array($username, $password));
$row=$stmt->fetch(PDO::FETCH_NUM);
if ($row > 0) {
	$_SESSION['user'] = $username;
	echo "index";

}
else {
	echo "Invalid id Or Password";
}
