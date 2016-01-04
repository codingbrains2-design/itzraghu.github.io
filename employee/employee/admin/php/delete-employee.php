<?php
require_once 'database.php';


$empId = $_POST['empId'];


$stmt = $db->prepare("SELECT * FROM employee_details WHERE personal_id = ?");
$stmt->execute(array($empId));
$row=$stmt->fetch(PDO::FETCH_NUM);
if ($row > 0) {
	$stmt = $db->prepare("DELETE FROM employee_details WHERE personal_id = ? " );
	$stmt->execute(array($empId));
	echo "deleted successfully";

}
else {
	echo "No employee is there by this name in database";
}

	