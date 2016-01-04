<?php
require_once 'database.php';

$data = array();
$stmt = $db->query(" SELECT personal_id FROM employee_details" );
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($result as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}

echo $result;
