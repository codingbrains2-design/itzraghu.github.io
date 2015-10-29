<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];

$data = array();
$stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute(array($username));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($row as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}
echo $result;