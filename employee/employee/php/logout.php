<?php
session_start();
require_once 'database.php';


$last = $_SESSION['last_id'];

$stmt = $db->query("UPDATE attendance SET sign_out_time  = curtime() WHERE id = '$last' ");

unset($_SESSION['user']);
header('Location: ../index.html');