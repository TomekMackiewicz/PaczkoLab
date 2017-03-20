<?php

$host = "localhost";
$db = "paczkolab";
$user = "paczkolab";
$password = "paczkolab";

$connection = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password, 
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);
$id = 9;
  	$sql = "DELETE FROM user WHERE id=$id LIMIT 1";

		if($result = $connection->query($sql)) {	
			return true;
		} else {
			return false;
		}	