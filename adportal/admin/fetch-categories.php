<?php
require 'database.php';

$stmt = $dbh->prepare('SELECT subcategory FROM categories');
$stmt->execute();
// $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
$row = $stmt->fetchALL();
foreach ($row as $value) {

	echo "<table><tr><td>" . $value['subcategory'] .  "</td></tr></table>" ;
}