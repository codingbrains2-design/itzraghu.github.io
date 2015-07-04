<?php
session_start();
require_once 'database.php';

$user = $_SESSION['user'];
$lastId = $_SESSION['lastId'];
$arr = array();
$stmt = $dbh->prepare("SELECT * FROM posts where id = ? ");
// $stmt = $dbh->prepare("SELECT * FROM posts ORDER BY id DESC LIMIT 1");

$stmt->execute(array($lastId)); 
foreach ($stmt as $key => $value) {
	$arr[$key] = $value;
}
$result = json_encode($arr);
echo $result;


