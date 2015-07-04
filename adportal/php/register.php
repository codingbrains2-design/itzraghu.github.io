<?php
require_once 'database.php';

$id=null;
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $dbh->prepare("INSERT INTO register VALUES (?,?,?,?,?)");
$stmt->execute(array($id, $name, $contact,$email, $password));
echo "data inserted";