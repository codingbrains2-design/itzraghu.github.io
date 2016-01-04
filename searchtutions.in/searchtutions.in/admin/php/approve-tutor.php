<?php
require_once 'database.php';


$imgPath = $_POST['imgPath'];
$approve_status = "approved";

$stmt = $db->prepare("UPDATE tutors SET approve_status =? WHERE image_path = ? " );
$stmt->execute(array($approve_status, $imgPath));
echo "Tutor Approved Successfully";