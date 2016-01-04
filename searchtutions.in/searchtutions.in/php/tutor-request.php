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
$date = new DateTime();
$date = $date->format("U");
$path = '../tutor_images/' . "$date" . $_FILES['file']['name'];



$stmt1 = $db->prepare("SELECT * FROM tutors WHERE email = ?");
$stmt1->execute(array($email));
$row=$stmt1->fetch(PDO::FETCH_NUM);
if ($row > 0) 
{
	echo "not ok";
}
else{
	

	if (0 < $_FILES['file']['error']) 
	{
		echo 'Error: ' . $_FILES['file']['error'] . '<br>';
	}
	else 
	{
	move_uploaded_file($_FILES['file']['tmp_name'], $path);
	$stmt = $db->prepare("INSERT INTO tutors(id,name,contact_number,email,gender,about,qualification,
		location,board,class,image_path) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->execute(array($id, $name, $contact, $email, $gender, $about, $qualification,$location, $board, 
		$class, $path));
	echo "ok";
	// echo "Thanks for Registration..! We will contact You soon";
}
}




