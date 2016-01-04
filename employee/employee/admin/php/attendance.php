<?php
session_start();
require_once 'database.php';


$empId = $_POST['empId'];
$data = array();

if(isset($_SESSION['admin']))
{
	
	$stmt = $db->prepare("SELECT * FROM attendance WHERE personal_id = ?");
	$stmt->execute(array($empId));
	$row = $stmt->fetchall(PDO::FETCH_ASSOC);
	foreach($row as $key => $value) {
		$data[$key] = $value;
		$result = json_encode($data);

	}
	echo $result;

}
else
{
	echo "login as admin";
}