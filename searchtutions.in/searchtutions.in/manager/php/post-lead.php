<?php
require_once 'database.php';

$id = null;
$leadEmail = $_POST['leadEmail'];
$leadContact = $_POST['leadContact'];
$leadArea = $_POST['leadArea'];
$leadRequester = $_POST['leadRequester'];
$leadRequirement = $_POST['leadRequirement'];
$request_status = "posted";



$stmt = $db->prepare("INSERT INTO posted_leads(id,email,contact,area,parent,requirement) values(?,?,?,?,?,?)");
$stmt->execute(array($id, $leadEmail, $leadContact, $leadArea,$leadRequester,$leadRequirement));
$stmt1 = $db->prepare("UPDATE request_tutor SET request_status  = ? WHERE email = ?");
$stmt1->execute(array($request_status, $leadEmail));
echo "Lead Posted Successfully";
