<?php

require('class/User.php');

$host = "localhost";
$db = "paczkolab";
$user = "paczkolab";
$password = "paczkolab";

$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password, 
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

User::$connection = $connection;

?>