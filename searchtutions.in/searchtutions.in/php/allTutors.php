<?php
require_once 'database.php';

$data = array(); 
$stmt = $db->query("SELECT * FROM tutors WHERE password IS NOT NULL AND tutor_category IS NOT NULL");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;