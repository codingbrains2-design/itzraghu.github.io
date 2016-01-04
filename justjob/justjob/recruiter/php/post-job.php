<?php
session_start();
require_once 'database.php';

$username = $_SESSION['recruiter'];
$id = null;

$job_title = $_POST['job_title'];
$keyskills = $_POST['keyskills'];
$experience = $_POST['experience'];
$salary = $_POST['salary'];
$role = $_POST['role'];
$location = $_POST['location'];
$contact = $_POST['contact'];
$description = $_POST['description'];
$company = $_POST['company'];


$stmt = $db->prepare("INSERT INTO  jobs VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($id, $job_title, $keyskills, $experience, $salary, $role, $location, $contact,$description,
	$company,$username));
echo "Your Job is Posted Successfully";