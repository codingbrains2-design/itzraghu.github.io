<?php
session_start();
require_once 'database.php';

if(isset($_SESSION['user']))
{

$username = $_SESSION['user'];
$id = $_POST['val1'];

	$stmt=$db->query("SELECT name from user where username = '$username'");
	$row=$stmt->fetch(PDO::FETCH_COLUMN);
	$stmt = $db->prepare("UPDATE jobs SET applied_by = ? WHERE id = ?");

	$stmt->execute(array($row, $id));

	echo "Applied Successfully";
}
else
{
	echo "Login First";
}