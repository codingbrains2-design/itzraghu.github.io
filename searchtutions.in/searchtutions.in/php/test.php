<?php
session_start();
require_once 'database.php';

$stmt1 = $db->query("SELECT email FROM tutors");
$row = $stmt1->fetchall(PDO::FETCH_ASSOC);
foreach($row as $data)
	{
		// echo $data['email'];
	}
		echo $data['email'];
	