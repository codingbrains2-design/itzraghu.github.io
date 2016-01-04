<?php
require_once 'database.php';


$id = NULL;
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$about = $_POST['about'];
$qualification = $_POST['qualification'];
$location = $_POST['location'];
$board = $_POST['board'];
$class = $_POST['class'];

$stmt1 = $db->prepare("SELECT * FROM tutors WHERE email = ?");
$stmt1->execute(array($email));
$row=$stmt1->fetch(PDO::FETCH_NUM);
if ($row > 0) 
{
	echo "not ok";
}
else{
	$stmt = $db->prepare("INSERT INTO tutors(id,name,contact_number,email,gender,about,qualification,
		location,board,class) VALUES (?,?,?,?,?,?,?,?,?,?)");
	$stmt->execute(array($id, $name, $contact, $email, $gender, $about, $qualification,$location, $board, $class));
	echo "ok";
	
}



