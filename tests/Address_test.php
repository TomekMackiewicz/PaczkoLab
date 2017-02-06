<?php

include("../class/Address.php");

$oAddress = new Address();
var_dump($oAddress);

if($oAddress instanceof Address) {
	echo "Instance.";
} else {
	echo "Not an instance.";
}

function testCity($city) {
	$oAddress = new Address();
	$oAddress->setCity($city);
	$oAddress->getCity();
	var_dump($oAddress);
}
testCity('Warszawa');

function testCode($code) {
	$oAddress = new Address();
	$oAddress->setCode($code);
	$oAddress->getCode();
	var_dump($oAddress);
}
testCode('05-840');

function testStreet($street) {
	$oAddress = new Address();
	$oAddress->setStreet($street);
	$oAddress->getStreet();
	var_dump($oAddress);
}
testStreet('Marszałkowska');

function testFlat($flat) {
	$oAddress = new Address();
	$oAddress->setFlat($flat);
	$oAddress->getFlat();
	var_dump($oAddress);
}

testFlat('1A');

?>