<?php
session_start();
require_once 'database.php';

$personal_id = $_POST['personal_id'];
$noOfLeaves = $_POST['noOfLeaves'];

if(isset($_SESSION['admin']))
{
	$stmt = $db->prepare("UPDATE employee_details SET leaves  = ? WHERE personal_id = ?");
	$stmt->execute(array($noOfLeaves, $personal_id));
	echo "Number Of leaves are updated Successfully";
}
else
{
	echo "login first";
}
?>