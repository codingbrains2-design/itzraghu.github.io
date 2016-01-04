<?php 
session_start();

if(isset($_SESSION['manager'])) {
	echo "manager";
}