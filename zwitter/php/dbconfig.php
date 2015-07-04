<?php

try {

	$db = new PDO("mysql:host=localhost;dbname=zwitter", "root", "");


}  catch(PDOException $error) {

	echo  $error->getMessage();
}