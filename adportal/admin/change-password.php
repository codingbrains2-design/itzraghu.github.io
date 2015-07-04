<?php
require_once 'database.php';

$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];

$stmt = $dbh->prepare("SELECT password FROM admin");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_COLUMN);
if($old_password == $row)
{
	$stmt = $dbh->prepare('UPDATE admin SET password = ? WHERE password = ?');
	$stmt->execute(array($new_password, $row));
	echo "Password is changed Successfully";
}

else
{
	echo "You have entered wrong old password";
}
