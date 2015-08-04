<?php
session_start();
require_once 'database.php';

$id = null;
$accountType = $_POST['accountType'];
$companyName = $_POST['companyName'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$telephone = $_POST['telephone'];

$stmt = $db->prepare("INSERT INTO request VALUES (?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($id, $accountType, $companyName, $name, $username, $password, $email, $address,
	$mobile, $telephone));
echo "Success";