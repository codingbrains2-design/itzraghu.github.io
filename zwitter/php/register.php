<?php

require_once 'dbconfig.php';

$id = NULL;
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

$zweets = 0;

$query = $db->prepare("INSERT INTO register VALUES(?,?,?,?,?)"); 	

$query->execute(array( $id, $name, $mobile, $email, $password));

$query = $db->prepare("INSERT INTO total_zweets VALUES(?, ?)");
$query->execute(array($email, $zweets));

echo "Database Updated!!";