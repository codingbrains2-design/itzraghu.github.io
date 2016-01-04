<?php
session_start();
require_once 'database.php';

$email = $_SESSION['tutor'];

$name = $_POST['name'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$about = $_POST['about'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$video = $_POST['video'];
$location = $_POST['location'];
$board = $_POST['board'];
$class = $_POST['class'];
$subject = $_POST['subject'];


if (empty($_FILES['file']['name'])) 
	{
		$stmt = $db->prepare("UPDATE tutors SET name=?, contact_number=?, gender=?, about=?,
			qualification=?, location=?, board=?, class=?, lecture_path=?, address=?  WHERE email=?");
	$stmt->execute(array($name, $contact,$gender, $about, $qualification, $location, $board,$class,$video,$address,$email));
	echo "ok";
	}
	
else 
{
$date = new DateTime();
$date = $date->format("U");
$path = '../../tutor_images/' . "$date" . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $path);

	$path = '../tutor_images/' . "$date" . $_FILES['file']['name'];
	$stmt = $db->prepare("UPDATE tutors SET name=?, contact_number=?, gender=?, about=?,
			qualification=?, location=?, board=?, class=?,lecture_path=?, address=?, image_path=? WHERE email=?");
	$stmt->execute(array($name, $contact,$gender, $about, $qualification, $location, $board,$class,$video, $address,$path,$email));
	echo "okz";
}





