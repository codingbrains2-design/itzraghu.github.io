<?php
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $dbh->prepare('SELECT * FROM admin where name =? and password = ?');
$stmt->execute(array($username, $password));
$row = $stmt->fetch(PDO::FETCH_NUM);

if($row>0)
{
	echo "admin";
} 