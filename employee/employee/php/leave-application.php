<?php
session_start();
require_once 'database.php';

$id = null;
$emp_id = $_SESSION['user'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$reason = $_POST['reason'];



$stmt = $db->prepare("INSERT INTO applications VALUES (?,?,?,?,?)");
$stmt->execute(array($id, $emp_id, $date_from, $date_to, $reason));
echo "application submitted Successfully";