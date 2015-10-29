<?php 
session_start();
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];
$loginType = $_POST['loginType'];
// echo $username . $password . $loginType;

if($loginType === "Job Seeker")
{
	$stmt = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
	$stmt->execute(array($username, $password));
	$row=$stmt->fetch(PDO::FETCH_NUM);
	if ($row > 0) {
		$_SESSION['user'] = $username;
		echo "user";

	}
	else {
		echo "Login Failed";

	}
}

// elseif($loginType === "Recruiter")
// {
// 	$stmt = $db->prepare("SELECT * FROM recruiter WHERE username = ? AND password = ?");
// 	$stmt->execute(array($username, $password));
// 	$row=$stmt->fetch(PDO::FETCH_NUM);
// 	if ($row > 0) {
// 		$_SESSION['recruiter'] = $username;
// 		echo "recruiter";

// 	}
// 	else {
// 		echo "Login Failed";

// 	}
// }

// else
// {
// 	echo "login failed";
// }