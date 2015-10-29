<?php
session_start();
require_once 'database.php';

$id = null;

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$stmt = $db->prepare("INSERT INTO  recruiter (id,name,username,password,email,contact) VALUES (?,?,?,?,?,?)");
$stmt->execute(array($id, $name, $username, $password, $email, $mobile,));
echo "Successfully registered";