<?php
session_start();
require_once 'database.php';



// $location = "%".$_POST['location']."%";
// $board = "%".$_POST['board']."%";
// $class = "%".$_POST['standard']."%";

// $location =$db->quote($location);
// $board = $db->quote($board);
// $class = $db->quote($class);

// echo $location."<br>";
// echo $board."<br>";
// echo $class;

$location = $_SESSION['location'];
$board = $_SESSION['board'];
$class = $_SESSION['class'];

$data = array(); 
$stmt = $db->query("SELECT * FROM tutors WHERE  location LIKE $location 
	UNION 
	SELECT * FROM tutors WHERE board LIKE $board
	UNION 
	SELECT * FROM tutors WHERE class LIKE $class ");
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $value) {
	$data[$key] = $value;
}
$result = json_encode($data);
echo $result;