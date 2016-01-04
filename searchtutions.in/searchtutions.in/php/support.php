<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$data = "Name :".$name."<br>"."Email:".$email."<br>"."Message:". $msg;

mail("seachtutions@gmail.com", $data, " User Feedback From SearchTuitions");
echo "ok" ;