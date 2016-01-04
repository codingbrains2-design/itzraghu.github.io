<?php 
session_start();
require_once 'database.php';



$location = "%".$_POST['location']."%";
$board = "%".$_POST['board']."%";
$class = "%".$_POST['standard']."%";

$location =$db->quote($location);
$board = $db->quote($board);
$class = $db->quote($class);

$_SESSION['location'] = $location;
$_SESSION['board'] = $board;
$_SESSION['class'] = $class;
echo "ok";