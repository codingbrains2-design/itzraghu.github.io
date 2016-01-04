<?php
session_start();

require_once 'database.php';

$data = array();
$stmt = $db->query("SELECT * FROM user");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($row as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}
echo $result;