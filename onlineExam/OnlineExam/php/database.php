<?php
try{
	$db = new PDO('mysql:host=localhost;dbname=zorricfd_exam', "zorricfd_exam" , "raghu@exam");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
	print "error in connection" . $e->getMessage();
}