<?php
session_start();
require_once 'database.php';

$personal_id = $_SESSION['user'];

if(isset($_SESSION['user']))
{
	$stmt = $db->prepare("SELECT leaves FROM employee_details WHERE personal_id = ?");
	$stmt->execute(array($personal_id));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	echo json_encode($row);
}
else
{
	echo "login first";
}