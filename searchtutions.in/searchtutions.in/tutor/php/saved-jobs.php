<?php
session_start();

require_once 'database.php';
$email = $_SESSION['tutor'];
$data = array(); 

$stmt = $db->query("SELECT * FROM jobs_applied WHERE applicant_email = '$email'");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;