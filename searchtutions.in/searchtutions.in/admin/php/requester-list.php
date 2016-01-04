<?php
require_once 'database.php';

$data = array();
$stmt = $db->query(" SELECT email FROM request_tutor WHERE request_status IS NULL" );
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($result as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}

echo $result;
