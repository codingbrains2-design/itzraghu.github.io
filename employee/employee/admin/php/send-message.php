<?php
session_start();
require_once 'database.php';

$personal_Id = $_POST['personal_Id'];
$message = $_POST['noOfHours'];

if(isset($_SESSION['admin']))
{
	$stmt = $db->prepare("UPDATE employees_details SET message  = ? WHERE personal_Id = ?");
	$stmt->execute(array($message, $personal_Id));
	echo "Number Of leaves are updated Successfully";

}

else
{
	echo "login first";
}