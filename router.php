<?php

include('config/connection.php');

// Deklaracje zmiennych
$request = "";
$arrayRequest = [];
$requestClass = "";
$requestParam = null;

// Parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode('/',$request);

if(isset($arrayRequest[4])) {
	$requestClass = $arrayRequest[4];
	//var_dump($requestClass);
} else {
	echo "Nie podałeś nazwy klasy.";
	die();
}

if(isset($arrayRequest[5])) {
	$requestParam = intval($arrayRequest[5]);
} else {
	echo "Nie podałeś parametru.";
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	if($requestClass == 'user') {

		if($requestParam > 0) {

			// Wyświetl jednego usera.
			$oUser = new User();
			$oUserData = $oUser->loadFromDB($requestParam);
			//print_r($oUserData);
			print_r(json_encode($oUserData));
		}

		if($requestParam == null) {
			$allUsers = User::loadAllFromDB();
			//print_r($allUsers);
			print_r(json_encode($allUsers));
		}

	}	else {
		//echo "Coś tam.";
	}    

}

