<?php
session_start();
require_once 'database.php';

$id = NULL;
$requestor = $_POST['requestor'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$board = $_POST['board'];
$class = $_POST['standard'];
$subject = $_POST['subject'];
$brief_requirement = $_POST['brief_requirement'];
$address = $_POST['address'];



$imgPath = $_SESSION['imgPath'];
$stmt = $db->query("SELECT email FROM tutors WHERE image_path = '$imgPath'");
$row = $stmt->fetch(PDO::FETCH_COLUMN);


$stmt2 = $db->prepare("INSERT INTO request_tutor (id, requestor, name, mobile, email, gender, location, board, 
	standard, subject, brief_requirement, address, requested_to) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt2->execute(array($id,$requestor, $name, $contact, $email, $gender,$location, $board, $class, 
	$subject,$brief_requirement,$address,$row));
echo "We Got Your Request..! We will contact You soon";



