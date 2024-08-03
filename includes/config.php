<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";



$pdo = new PDO('mysql:host='.$servername.';dbname='.$dbname.'', $username, $password);

date_default_timezone_set('Asia/Kolkata');

session_start();


?>

