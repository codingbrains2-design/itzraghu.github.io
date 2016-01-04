<?php
session_start();
require_once 'database.php';

$_SESSION['imgPath'] = "../" . $_POST['imgPath'];

echo "Ok";