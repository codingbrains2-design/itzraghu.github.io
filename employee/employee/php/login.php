<?php 
session_start();
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];


$stmt = $db->prepare("SELECT password FROM employee_details WHERE personal_id = ? AND password = ?");
$stmt->execute(array($username, $password));
$row=$stmt->fetch(PDO::FETCH_NUM);
if ($row > 0) {
	$_SESSION['user'] = $username;
	$stmt = $db->query("INSERT INTO attendance (personal_id,date,sign_in_time) VALUES ('$username',curdate(),curtime())");
	$last = $db->lastInsertId();
	$_SESSION['last_id'] = $last;
	echo "index";

}
else {
	echo "Login Failed";
}
