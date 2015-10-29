<?php 
session_start();
require_once 'database.php';
$id = null;
$username = $_SESSION['user'];
$set_no = 3;
$subject = "php";
$total_marks = 10;


$stmt = $db->prepare("INSERT INTO result(id,username,subject,set_no,total_marks) values (?,?,?,?,?) ");
$stmt->execute(array($id, $username, $subject, $set_no,$total_marks));
$lastid = $db->LastInsertId();
$counter = 0;

$ans1 = $_POST['set1q1'];
$ans2 = $_POST['set1q2'];
$ans3 = $_POST['set1q3'];
$ans4 = $_POST['set1q4'];
$ans5 = $_POST['set1q5'];
$ans6 = $_POST['set1q6'];
$ans7 = $_POST['set1q7'];
$ans8 = $_POST['set1q8'];
$ans9 = $_POST['set1q9'];
$ans10 = $_POST['set1q10'];



$stmt1 = $db->prepare("SELECT correct_answer FROM answer WHERE subject = ? AND set_no = ?");
$stmt1->execute(array($subject,$set_no));
$row = $stmt1->fetchall(PDO::FETCH_COLUMN);




if($row[0] === $ans1)
{
	$counter = $counter + 1;
}

if ($row[1] === $ans2) 
{
	$counter = $counter + 1;
}

if(!strcmp($row[2],$ans3))
{
	$counter = $counter + 1;
}

if(!strcmp($row[3],$ans4))
{
	$counter = $counter + 1;
}

if(!strcmp($row[4],$ans5))
{
	$counter = $counter + 1;
}
if(!strcmp($row[5],$ans6))
{
	$counter = $counter + 1;
}
if(!strcmp($row[6],$ans7))
{
	$counter = $counter + 1;
}
if(!strcmp($row[7],$ans8))
{
	$counter = $counter + 1;
}
if(!strcmp($row[8],$ans9))
{	
	$counter = $counter + 1;
}
if(!strcmp($row[9],$ans10))
{	
	$counter = $counter + 1;
}


echo "You Have finished this Quiz ! Your Score is" . " " . $counter;
$stmt = $db->prepare("UPDATE result SET obtained_marks = ? WHERE id=? ");
$stmt->execute(array($counter, $lastid));