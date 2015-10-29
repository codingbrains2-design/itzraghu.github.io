<?php
session_start();
unset($_SESSION['recruiter']);
header("Location: ../../index.html");
