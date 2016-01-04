<?php
session_start();
require_once 'database.php';

$tutorEmail = $_POST['tutorEmail'];
$tutorPassword = $_POST['tutorPassword'];

if(isset($_SESSION['admin']))
{
	$stmt = $db->prepare("UPDATE tutors SET password  = ? WHERE email = ?");
	$stmt->execute(array($tutorPassword, $tutorEmail));
	echo "Password Created Successfully";
}
else
{
	echo "login first";
}