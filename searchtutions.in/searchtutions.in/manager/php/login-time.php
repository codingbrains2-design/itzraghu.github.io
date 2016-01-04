<?php
session_start();
require_once 'database.php';

$manager = $_SESSION['manager'];

$data = array();
$stmt = $db->query(" SELECT login_time FROM manager WHERE username = '$manager' " );
$result = $stmt->fetch(PDO::FETCH_COLUMN);
echo $result;
