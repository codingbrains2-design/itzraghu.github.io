<?php
session_start();
require_once 'database.php';

$msgToAll = $_POST['msgToAll'];

if(isset($_SESSION['admin']))
{
    $stmt = $db->prepare("UPDATE employee_details SET message = ?");
    $stmt->execute(array($msgToAll));
    echo "Message Successfully sent to all Employees";
}
else
{
    echo "login first";
}