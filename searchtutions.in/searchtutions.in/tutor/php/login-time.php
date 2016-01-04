<?php
session_start();
require_once 'database.php';

$email = $_SESSION['tutor'];

$data = array();
$stmt = $db->query(" SELECT login_time FROM tutors WHERE email = '$email' " );
$result = $stmt->fetch(PDO::FETCH_COLUMN);
echo $result;
