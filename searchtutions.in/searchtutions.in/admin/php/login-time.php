<?php
session_start();
require_once 'database.php';

$admin = $_SESSION['admin'];

$data = array();
$stmt = $db->query(" SELECT login_time FROM admin WHERE username = '$admin' " );
$result = $stmt->fetch(PDO::FETCH_COLUMN);
echo $result;
