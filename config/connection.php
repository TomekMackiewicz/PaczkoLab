<?php

require('class/User.php');
require('class/Address.php');
require('class/Parcel.php');
require('class/Size.php');

$host = "localhost";
$db = "paczkolab";
$user = "paczkolab";
$password = "paczkolab";

$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password, 
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

User::$connection = $connection;
Address::$connection = $connection;
Parcel::$connection = $connection;
Size::$connection = $connection;

?>