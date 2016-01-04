<?php
session_start();
require_once 'database.php';

$employee_id = $_POST['employee_id'];
$no_of_days = $_POST['no_of_days'];

if(isset($_SESSION['admin']))
{
	$stmt = $db->prepare("UPDATE employee_details SET total_leaves  = ? WHERE personal_id = ?");
	$stmt->execute(array($no_of_days, $employee_id));
	echo "updated Successfully";
}
else
{
	echo "login first";
}