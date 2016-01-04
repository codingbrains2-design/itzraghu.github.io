<?php 
session_start();

if(isset($_SESSION['tutor'])) {
	echo "tutor";
}