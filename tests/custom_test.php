<?php

$predefinedClasses = get_declared_classes();

include("../class/User.php");
include("../class/Address.php");
include("../class/Parcel.php");
include("../class/Size.php");

$myClasses = array_diff(get_declared_classes(), $predefinedClasses);

echo "Klasy:";
var_dump($myClasses);

echo "Test setterów i getterów:";

foreach($myClasses as $key => $myClass) {
	$object = new $myClass;

	$methods = get_class_methods($myClass);
	unset($methods[0]);

	foreach($methods as $method) {
		if (strpos($method, 'set') !== false) {
			$object->$method('Test passed.');
		}
	}
	foreach($methods as $method) {
		if (strpos($method, 'get') !== false) {
			$object->$method();
		} 
	}	
	var_dump($object);
}

?>