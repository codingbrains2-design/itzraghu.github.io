<?php
session_start();
require_once 'database.php';
$data = array();
if(isset($_SESSION['admin']))
{
	
	$stmt = $db->query("SELECT * FROM request");
	$row = $stmt->fetchall(PDO::FETCH_ASSOC);
	foreach($row as $key => $value) {
		$data[$key] = $value;

	}
	$result = json_encode($data);
	echo $result;

}
else
{
	echo "login as admin";
}