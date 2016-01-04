<?php
session_start();
require_once 'database.php';

$empId = $_POST['empId'];
$workingHour = $_POST['workingHour'];

if(isset($_SESSION['admin']))
{
	$stmt = $db->prepare("UPDATE employee_details SET working_hour  = ? WHERE personal_id = ?");
	$stmt->execute(array($workingHour, $empId));
	echo "Working Hour Updated Successfully";

}

else
{
	echo "login first";
}