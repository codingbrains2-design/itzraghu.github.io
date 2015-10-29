<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];

$data = array();
if(isset($_SESSION['user']))
{
	
	$stmt = $db->prepare("SELECT * FROM saved_jobs WHERE username = ? ");
	$stmt->execute(array($username));
	$row = $stmt->fetchall(PDO::FETCH_ASSOC);
	foreach($row as $key => $value) {
		$data[$key] = $value;

	}
	$result = json_encode($data);
	echo $result;

}
else
{
	echo "login as first";
}