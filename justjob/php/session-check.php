<?php 
session_start();

if(isset($_SESSION['user'])) {
	echo "user";
}
if(isset($_SESSION['recruiter'])) {
	echo "recruiter";
}

else {
	echo "false";
}
