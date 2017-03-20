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
} else {
	echo "Nie podałeś nazwy klasy.";
	die();
}

if(isset($arrayRequest[5])) {
	$requestParam = intval($arrayRequest[5]);
} else {
	echo "Nie podałeś parametru.";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if($requestClass == 'user') {
		$oUser = new User();
		$oUser->setAddressId($_POST['address']);
		$oUser->setName($_POST['name']);
		$oUser->setSurname($_POST['surname']);
		$oUser->setCredits($_POST['credits']);
		$oUser->setHashedPassword($_POST['pass']);
		$oUser->saveToDB();
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
	if($requestClass == 'user') {
    parse_str(file_get_contents("php://input"), $put_vars);
    $id = $put_vars['id'];
    $oUser = new User();
		$oUser->loadFromDB($id);
		//var_dump($oUser);
		$oUser->setAddressId($put_vars['address']);
		$oUser->setName($put_vars['name']);
		$oUser->setSurname($put_vars['surname']);
		$oUser->setCredits($put_vars['credits']);
		//$oUser->setHashedPassword($put_vars['pass']);
		$oUser->saveToDB();

	}    
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
	if($requestClass == 'user') {
		if($requestParam > 0) {
	    parse_str(file_get_contents("php://input"), $del_vars);
	    $id = $del_vars['id'];				
			User::deleteFromDB($id);
		}
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	if($requestClass == 'user') {
		if($requestParam > 0) {
			// Wyświetl jednego usera.
			$oUser = new User();
			$oUserData = $oUser->loadFromDB($requestParam);
			print_r(json_encode($oUserData));
		}
		if($requestParam == null) {
			$allUsers = User::loadAllFromDB();
			print_r(json_encode($allUsers));
		}
	}	else {
		echo "Error.";
	}
    

	if($requestClass == 'address') {
		if($requestParam > 0) {
			// Wyświetl jednego usera.
			$oAddress = new Address();
			$oAddressData = $oAddress->loadFromDB($requestParam);
			//print_r($oUserData);
			print_r(json_encode($oAddressData));
		}
		if($requestParam == null) {
			$allAddresses = Address::loadAllFromDB();
			//print_r($allUsers);
			print_r(json_encode($allAddresses));
		}
	}	//else {
		//echo "Error.";
	//}

	if($requestClass == 'parcel') {
		if($requestParam > 0) {
			// Wyświetl jednego usera.
			$oAddress = new Address();
			$oAddressData = $oAddress->loadFromDB($requestParam);
			//print_r($oUserData);
			print_r(json_encode($oAddressData));
		}
		if($requestParam == null) {
			$allAddresses = Address::loadAllFromDB();
			//print_r($allUsers);
			print_r(json_encode($allAddresses));
		}
	}	//else {
		//echo "Error.";
	//}

	if($requestClass == 'size') {
		if($requestParam > 0) {
			// Wyświetl jednego usera.
			$oAddress = new Address();
			$oAddressData = $oAddress->loadFromDB($requestParam);
			//print_r($oUserData);
			print_r(json_encode($oAddressData));
		}
		if($requestParam == null) {
			$allAddresses = Address::loadAllFromDB();
			//print_r($allUsers);
			print_r(json_encode($allAddresses));
		}
	}	//else {
		//echo "Error.";
	//}


}

