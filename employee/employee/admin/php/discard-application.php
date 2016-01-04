<?php
require_once 'database.php';


$s_no = $_POST['s_no'];
$emp_id = $_POST['emp_id'];



$stmt = $db->prepare("DELETE FROM  applications WHERE  s_no = ? AND personal_id = ? " );
$stmt->execute(array($s_no,$emp_id));
echo "deleted successfully";

