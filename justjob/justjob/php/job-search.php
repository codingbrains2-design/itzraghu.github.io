<?php
require_once 'database.php';

$keyskills = $_POST['keyskills'];
$location = $_POST['location'];
$experience = $_POST['experience'];

$stmt = $db->prepare("SELECT * FROM jobs where keyskills LIKE ? OR location LIKE ?  OR required_experience LIKE ? ");

$stmt->execute(array($keyskills, $location, $experience));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
$data=json_encode($row);
echo $data;