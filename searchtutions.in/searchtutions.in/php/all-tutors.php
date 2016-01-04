<?php
require_once 'database.php';

$data = array(); 
$stmt = $db->query("SELECT name,image_path FROM tutors WHERE approve_status IS NOT NULL");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;