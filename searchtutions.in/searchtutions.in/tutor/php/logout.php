<?php
session_start();
unset($_SESSION['tutor']);
header("Location: ../index.html");
