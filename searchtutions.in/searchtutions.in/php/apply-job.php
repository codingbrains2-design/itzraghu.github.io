<?php
session_start();
require_once 'database.php';
if (!isset($_SESSION['tutor'])) {
	echo "Login First";
}
else
{

$email = $_SESSION['tutor'];
$stmt3 = $db->query("SELECT free_leads FROM tutors WHERE email='$email' ");
$free_leads = $stmt3->fetch(PDO::FETCH_COLUMN);
$stmt4 = $db->query("SELECT remaining_leads FROM tutors WHERE email='$email' ");
$remaining_leads = $stmt4->fetch(PDO::FETCH_COLUMN);

if($remaining_leads == 0)
{
 echo "free leads ends here..now buy new leads";

}
elseif($remaining_leads < 0)
{
 echo "free leads ends here..now buy new leads";

}

 elseif( $free_leads === $remaining_leads || $free_leads > $remaining_leads )
 {
 
 $email = $_SESSION['tutor'];
$stmt = $db->query("SELECT * FROM tutors WHERE email='$email' ");
$row = $stmt->fetch(PDO::FETCH_ASSOC);


$id = null;
$name = $row['name'];
$contact = $row['contact_number'];
$job_id = $_POST['job_id'];





$stmt2 = $db->prepare("INSERT INTO jobs_applied VALUES (?,?,?,?,?)");
	$stmt2->execute(array($id,$name,$email, $contact,$job_id));

$remaining_leads = $remaining_leads-1;

 $stmt6 = $db->prepare("UPDATE tutors SET remaining_leads=? WHERE email=?");
$stmt6->execute(array($remaining_leads,$email));

	echo "ok";
 	
 }


}