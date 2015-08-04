<?php 
require_once 'database.php';

$name = $_POST['clientName'];



$stmt = "CREATE TABLE $name (
	reference VARCHAR(30),
	name VARCHAR(30),
	email VARCHAR(50),
	address VARCHAR(50),
	contact BIGINT(50),
	mode VARCHAR(50),
	status VARCHAR(50)
	)" ;

$db->exec($stmt);
echo "Table  created successfully";
