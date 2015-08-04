<?php
session_start();
require_once 'database.php';

$reference = $_POST['reference'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$mode = $_POST['mode'];
$status = $_POST['status'];
$username = $_SESSION['user'];

$stmt = $db->prepare("INSERT INTO $username VALUES (?,?,?,?,?,?,?)");
$stmt->execute(array($reference, $name, $email, $address, $contact,  $mode, $status));
echo "data is Stored Successfully";