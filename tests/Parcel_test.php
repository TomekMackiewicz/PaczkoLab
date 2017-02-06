<?php

include("../class/Parcel.php");

$oParcel = new Parcel();
var_dump($oParcel);

if($oParcel instanceof Parcel) {
	echo "Instance.";
} else {
	echo "Not an instance.";
}

function testReceiver($receiver) {
	$oParcel = new Parcel();
	$oParcel->setReceiver($receiver);
	$oParcel->getReceiver();
	var_dump($oParcel);
}

testReceiver('Tomek');

function testSize($size) {
	$oParcel = new Parcel();
	$oParcel->setSize($size);
	$oParcel->getSize();
	var_dump($oParcel);
}

testSize('XL');

?>