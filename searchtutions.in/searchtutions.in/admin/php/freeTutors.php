<?php
require_once 'database.php';

$data = array(); 
$stmt = $db->query("SELECT * FROM tutors WHERE approve_status IS NOT NULL AND password IS NULL");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;