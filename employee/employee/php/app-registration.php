<?php
require_once 'database.php';

$id = null;
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$applied_for = $_POST['applied_for'];
$expected_salary = $_POST['expected_salary'];
$mobile = $_POST['mobile'];
$willing_to_relocate = $_POST['willing_to_relocate'];
$last_company = $_POST['last_company'];
$experience = $_POST['experience'];
$reference = $_POST['reference'];

$stmt = $db->prepare("INSERT INTO applicants VALUES (?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($id, $first_name, $last_name, $email, $applied_for, $expected_salary, $mobile, $willing_to_relocate, $last_company, $experience, $reference));
echo "Applied Successfully ! We will contact you Soon !";