<?php
try{
	$db = new PDO('mysql:host=localhost;dbname=exam', "root" , "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	print "error in connection" . $e->getMessage();
}