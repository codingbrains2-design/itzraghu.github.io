<?php
session_start();
require_once 'dbconfig.php';

$email = $_SESSION['user'];

$result = array();
$query = $db->prepare("SELECT * FROM zweets WHERE email = ?");
$query->execute(array($email));

$result = $query->fetchall(PDO::FETCH_ASSOC);

echo json_encode($result);