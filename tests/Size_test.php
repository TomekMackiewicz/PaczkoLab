<?php

include("../class/Size.php");

$oSize = new Size();
var_dump($oSize);

if($oSize instanceof Size) {
	echo "Instance.";
} else {
	echo "Not an instance.";
}

function testSize($size) {
	$oSize = new Size();
	$oSize->setSize($size);
	$oSize->getSize();
	var_dump($oSize);
}

testSize(40);

function testPrice($price) {
	$oSize = new Size();
	$oSize->setPrice($price);
	$oSize->getPrice();
	var_dump($oSize);
}

testPrice(99);

?>