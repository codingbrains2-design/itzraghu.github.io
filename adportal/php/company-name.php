<?php
require_once 'database.php';

$data = array();

$query = $dbh->prepare("SELECT name FROM company");

$query->execute();

$data  = $query->fetchall(PDO::FETCH_ASSOC);

$result = json_encode($data);

echo $result;