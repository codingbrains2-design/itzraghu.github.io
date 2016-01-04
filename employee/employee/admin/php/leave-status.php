<?php
session_start();
require_once 'database.php';

$empLeave = $_POST['empLeave'];
$empStatus = $_POST['empStatus'];

if(isset($_SESSION['admin']))
{
	$stmt = $db->prepare("UPDATE employee_details SET leave_status  = ? WHERE personal_id = ?");
	$stmt->execute(array($empStatus, $empLeave));
	echo "updated Successfully";
}
else
{
	echo "login first";
}
?>