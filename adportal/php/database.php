<?php
try{
	$dbh = new PDO('mysql:host=localhost;dbname=ad_portal', "root" , "");
	

}catch(PDOException $e){
	print "error in connection" . $e->getMessage();
}