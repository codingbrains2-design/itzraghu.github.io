<?php 
session_start();

if(isset($_SESSION['admin'])) {
	echo "true";
}

else {
	echo "false";
}
