<?php
require_once 'database.php';


$imgPath = $_POST['imgPath'];

$stmt = $db->prepare("DELETE FROM tutors WHERE image_path = ? " );
$stmt->execute(array($imgPath));
echo "Tutor Deleted Successfully";