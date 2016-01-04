<?php
session_start();

require_once 'database.php';
$keyskills = $_SESSION['keyskills'];

$keyskills= explode(",",$keyskills);
$keyskill1  = $db->quote("%" . $keyskills[0] . "%");
$keyskill2  = $db->quote("%" . $keyskills[1] . "%");
$keyskill3  = $db->quote("%" . $keyskills[2] . "%");

$data = array(); 
$stmt = $db->query("SELECT * FROM jobs WHERE keyskills LIKE $keyskill1 
	UNION 
	SELECT * FROM jobs WHERE keyskills LIKE $keyskill2
	UNION 
	SELECT * FROM jobs WHERE keyskills LIKE $keyskill3 ");
// $stmt->execute(array($keyskill1,$keyskill2));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;