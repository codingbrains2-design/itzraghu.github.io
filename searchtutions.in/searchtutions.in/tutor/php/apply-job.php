<?php
session_start();
require_once 'database.php';
if (!isset($_SESSION['tutor'])) {
	echo "Login First";
}
else
{

	$email = $_SESSION['tutor'];
	$stmt1 = $db->query("SELECT free_leads FROM tutors WHERE email='$email' ");
	$free_leads = $stmt1->fetch(PDO::FETCH_COLUMN);
	$stmt2 = $db->query("SELECT remaining_leads FROM tutors WHERE email='$email' ");
	$remaining_leads = $stmt2->fetch(PDO::FETCH_COLUMN);

	if($remaining_leads == 0)
	{
		echo "not ok";

	}
	elseif($remaining_leads < 0)
	{
		echo "not ok";

	}

	elseif( $free_leads === $remaining_leads || $free_leads > $remaining_leads )
	{
		
		$email = $_SESSION['tutor'];
		$stmt3 = $db->query("SELECT * FROM tutors WHERE email='$email' ");
		$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);


		$id = null;
		$name = $row3['name'];
		$contact = $row3['contact_number'];
		$job_id = $_POST['job_id'];

		$stmt4 = $db->query("SELECT * FROM jobs_applied WHERE applied_to='$job_id' ");
		$row4=$stmt4->fetch(PDO::FETCH_NUM);
if ($row4 > 0) {
	echo "okz";

}


else
{
		$stmt5 = $db->query("SELECT * FROM posted_leads WHERE id='$job_id' ");
		$row5 = $stmt5->fetch(PDO::FETCH_ASSOC);

		$job_contact = $row5['contact'];
		$job_email = $row5['email'];




		$stmt6 = $db->prepare("INSERT INTO jobs_applied VALUES (?,?,?,?,?,?,?)");
		$stmt6->execute(array($id,$name,$email, $contact,$job_id,$job_contact,$job_email));

		$remaining_leads = $remaining_leads-1;

		$stmt7 = $db->prepare("UPDATE tutors SET remaining_leads=? WHERE email=?");
		$stmt7->execute(array($remaining_leads,$email));

		echo "ok";
		
	}

}
}