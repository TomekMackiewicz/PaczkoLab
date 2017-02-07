<?php

require('class/User.php');

$host = "localhost";
$db = "paczkolab";
$user = "root";
$password = "simone";

$connection = new PDO("mysql:$host;dbname=$db", $user, $password);

User::$connection = $connection;


?>