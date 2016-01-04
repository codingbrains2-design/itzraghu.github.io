<?php
session_start();
require_once 'database.php';

$imgPath = $_SESSION['imgPath'];
$data = array(); 
$stmt = $db->prepare("SELECT * FROM tutors WHERE image_path = ?");
$stmt->execute(array($imgPath));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
	$result = json_encode($data);

	echo $result;
