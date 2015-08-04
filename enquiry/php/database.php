<?php
try{
	$db = new PDO('mysql:host=localhost;dbname=enquiry', "root" , "");
	

}catch(PDOException $e){
	print "error in connection" . $e->getMessage();
}