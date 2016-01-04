<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];

$data = array();
if(isset($_SESSION['user']))
{
	$stmt=$db->query("SELECT name from user where username = '$username'");
	$row=$stmt->fetch(PDO::FETCH_COLUMN);
	$stmt = $db->prepare("SELECT * FROM jobs WHERE applied_by = ? ");
	$stmt->execute(array($row));
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