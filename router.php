<?php

include('config/connection.php');

// Deklaracje zmiennych
$request = "";
$arrayRequest = [];
$requestClass = "";

// Parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode('/',$request);

if(isset($arrayRequest[4])) {
	$requestClass = $arrayRequest[4];
} else {
	echo "Nie podałeś nazwy klasy.";
	die();
}



if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	if($_SERVER['REQUEST_URI'] == '/router.php/user/') {

	}	else {

	}    

}

