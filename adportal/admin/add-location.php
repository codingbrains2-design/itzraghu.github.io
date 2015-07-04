<?php
require_once 'database.php';

$state = $_POST['state'];
$city = $_POST['city'];

$stmt = $dbh->prepare("INSERT INTO location VALUES (?,?)");
$stmt->execute(array($state, $city));
echo "data inserted";