<?php
require_once 'database.php';


$deleteClientName = $_POST['deleteClientName'];

$data = array();
if(!isset($deleteClientName))
{
	echo "No client found by this name";
}
else
{

	$stmt = $db->prepare("DELETE FROM request WHERE username = ?  " );
	$stmt->execute(array($deleteClientName));
	$stmt = $db->prepare("DELETE FROM admin WHERE username = ?  " );
	$stmt->execute(array($deleteClientName));
	echo "deleted successfully";
} 
