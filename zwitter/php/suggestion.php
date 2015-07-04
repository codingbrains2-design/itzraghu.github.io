<?php
session_start();
require_once 'dbconfig.php';

$email = $_SESSION['user'];
$data = array();

$query = $db->prepare('SELECT * FROM register WHERE email <> ?');
$query->execute(array($email));

$data = $query->fetchall(PDO::FETCH_ASSOC);
echo json_encode($data);