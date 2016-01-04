<?php 
session_start();

if(isset($_SESSION['admin'])) {
	echo "admin";
}

else {
	echo "false";
}
