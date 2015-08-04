<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];
$keyword = $_POST['keyword'];
$data = array();
$stmt = $db->query(" SELECT name FROM $username WHERE name LIKE  '%keyword%' " );
$stmt->execute();
foreach ($stmt as $key => $value) {
	$data[$key] = $value;

}
$result = json_encode($data);
echo $result;

