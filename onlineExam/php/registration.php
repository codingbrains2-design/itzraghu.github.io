<?php
require_once 'database.php';

$id = null;
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$stmt = $db->prepare("INSERT INTO users(id,name,username,password,email,mobile) VALUES (?,?,?,?,?,?)");
$stmt->execute(array($id, $name,$username, $password,$email, $mobile));
echo "Successfully registered Now you can login!";