<?php
require_once 'database.php';

$id = null;
$leadEmail = $_POST['leadEmail'];
$leadContact = $_POST['leadContact'];
$leadArea = $_POST['leadArea'];
$leadParent = $_POST['leadParent'];
$leadRequirement = $_POST['leadRequirement'];
$request_status = "posted";

// echo $id. $leadEmail.$leadArea.$leadParent.$leadRequirement;


	$stmt = $db->prepare("INSERT INTO posted_leads(id,email,contact,area,parent,requirement) values(?,?,?,?,?,?)");
	$stmt->execute(array($id, $leadEmail, $leadContact, $leadArea,$leadParent,$leadRequirement));
	$stmt1 = $db->prepare("UPDATE request_tutor SET request_status  = ? WHERE email = ?");
	$stmt1->execute(array($request_status, $leadEmail));
	echo "Lead Posted Successfully";
