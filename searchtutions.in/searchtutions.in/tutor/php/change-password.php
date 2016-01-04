<?php
session_start();

require_once 'database.php';

$email = $_SESSION['tutor'];
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

$stmt = $db->prepare("SELECT password FROM tutors WHERE email = ?");
$stmt->execute(array($email));
$row = $stmt->fetch(PDO::FETCH_COLUMN);
if($old_password === $row)
{
	$stmt = $db->prepare('UPDATE tutors SET password = ? WHERE email = ?');
	$stmt->execute(array($new_password, $email));
	echo "Update Successfully";
}

else
{
	echo "Update Failed";
}
