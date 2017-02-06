<?php

include("../class/User.php");

$oUser = new User();
var_dump($oUser);

if($oUser instanceof User) {
	echo "Instance.";
} else {
	echo "Not an instance.";
}

// TODO Test getters and setters.

// function testId() {
// 	$oUser->
// 	$user->setName 
// }


function testAddress($city) {
	$oUser = new User();
	$oUser->setAddress($city);
	$oUser->getAddress();
	var_dump($oUser);
}

testAddress('Warszawa');

function testName($name) {
	$oUser = new User();
	$oUser->setName($name);
	$oUser->getName();
	var_dump($oUser);
}

testName('Tomek');

function testSurname($surname) {
	$oUser = new User();
	$oUser->setSurname($surname);
	$oUser->getSurname();
	var_dump($oUser);
}

testSurname('Mackiewicz');

function testCredits($credits) {
	$oUser = new User();
	$oUser->setCredits($credits);
	$oUser->getCredits();
	var_dump($oUser);
}

testCredits(100);

function testHashedPassword($hashedPassword) {
	$oUser = new User();
	$oUser->setHashedPassword($hashedPassword);
	$oUser->getHashedPassword();
	var_dump($oUser);
}
$password = 'secret';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
testHashedPassword($hashedPassword);


?>