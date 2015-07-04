<?php
require_once 'dbconfig.php';

$data = array();

$query = $db->prepare("SELECT name FROM company");

$query->execute();

$data  = $query->fetchall(PDO::FETCH_ASSOC);

$result = json_encode($data);

echo $result;