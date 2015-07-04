<?php 
session_start();
require_once 'dbconfig.php';

if (isset($_SESSION['user'])) 
{
	

	$email = $_SESSION['user'];
	$zweetMsg = $_POST['zweetMsg'];
	$query = $db->prepare("INSERT INTO zweets VALUES(?,?)");
	$query->execute(array($email, $zweetMsg));

	$query = $db->prepare("SELECT zweets FROM total_zweets WHERE email = ?");
	$query->execute(array($email));

	$row = $query->fetch(PDO::FETCH_ASSOC);

	$zweets = $row['zweets'] + 1;

	$query = $db->prepare("UPDATE total_zweets SET zweets = ? WHERE email = ?");
	$query->execute(array($zweets, $email));
	
	echo "success";

}
else
	echo "fail";
