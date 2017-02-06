<?php

require('class/User.php');

$host = "";
$db = "";
$user = "";
$password = "";

$connection = new PDO('mysql:host=$host;dbname=$db', $user, $password);

// FAKE TO DELETE
$connection = 'fake connection';
User::$connection = $connection;

?>