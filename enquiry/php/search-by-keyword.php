<?php
session_start();
require_once 'database.php';

$username = $_SESSION['user'];

$keyword = $_POST['keyword'];

$data = array();
if(!isset($keyword))
{
	echo "No record found";
}
else
{

	$stmt = $db->query(" SELECT * FROM $username WHERE reference  LIKE  '$keyword%' " );
	$row = $stmt->fetchall(PDO::FETCH_ASSOC);
	foreach ($row as $key => $value) 
	{	
	$data[$key] = $value;
	$result = json_encode($data);
	}
	echo $result;
} 
