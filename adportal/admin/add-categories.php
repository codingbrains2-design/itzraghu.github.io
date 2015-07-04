<?php
require_once 'database.php';

$category = $_POST['category'];
$subcategory = $_POST['subcategory'];

$stmt = $dbh->prepare("INSERT INTO categories VALUES (?,?)");
$stmt->execute(array($category, $subcategory));
echo "data inserted";