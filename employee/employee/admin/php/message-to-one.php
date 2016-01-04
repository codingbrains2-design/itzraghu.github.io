<?php
session_start();
require_once 'database.php';

$empId = $_POST['empId'];
$msgById = $_POST['msgById'];

if(isset($_SESSION['admin']))
{
    $stmt = $db->prepare("UPDATE employee_details SET message  = ? WHERE personal_id = ?");
    $stmt->execute(array($msgById, $empId));
    echo "Message sent Successfully";
}
else
{
    echo "login first";
}