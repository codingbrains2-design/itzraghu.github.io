<?php
require_once 'database.php';

$data = array();
$stmt = $db->query(" SELECT * FROM posted_leads WHERE lead_status IS NULL");
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($result as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}

echo $result;
