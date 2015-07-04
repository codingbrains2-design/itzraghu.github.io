<?php
session_start();
require_once 'database.php';


$id = NULL;
$title = $_POST['ad_title'];
$price = $_POST['price'];
$model = $_POST['model'];
$description = $_POST['description'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$category = $_POST['category'];
$date = new DateTime();
$date = $date->format("U");
$path = '../uploads/' . "$date" . $_FILES['file']['name'].trim();
$user = $_SESSION['user'];



if (0 < $_FILES['file']['error']) {
	echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else 
{
	move_uploaded_file($_FILES['file']['tmp_name'], $path);
}


$stmt = $dbh->prepare("INSERT INTO posts VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($id, $title, $price, $model, $description,  $name, $email, $phone, $city, $path, $user, $category));

$lastId = $dbh->lastInsertId();

$_SESSION['lastId'] = $lastId;
header("Location: ../posts.html");