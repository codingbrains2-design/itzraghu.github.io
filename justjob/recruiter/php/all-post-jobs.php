<?php
session_start();

require_once 'database.php';

$username = $_SESSION['recruiter'];

$data = array();
$stmt = $db->prepare("SELECT * FROM jobs WHERE post_by = ?");
$stmt->execute(array($username));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($row as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}
echo $result;