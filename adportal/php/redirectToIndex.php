<?php
session_start();
require_once 'database.php';

if (isset($_SESSION['user'])) 
{
	

		$email = $_SESSION['user'];
		$stmt = $dbh->prepare("SELECT name FROM register WHERE email=? ");
		$stmt->execute(array($email));
 
		$result = $stmt->fetch(PDO::FETCH_COLUMN);
 		echo $result;
	}

else 
{
	echo "index";
}