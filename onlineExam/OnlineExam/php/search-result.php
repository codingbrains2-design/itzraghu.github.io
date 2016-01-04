<?php
session_start();

require_once 'database.php';

$username = $_SESSION['user'];
$subject = $_POST['subject'];
$set_no = $_POST['set_no'];

$data = array();
$stmt = $db->prepare("SELECT * FROM result WHERE username = ? AND subject = ? AND set_no = ?");
$stmt->execute(array($username, $subject, $set_no));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($row as $key => $value) {
	$data[$key] = $value;
	$result = json_encode($data);
}
echo $result;