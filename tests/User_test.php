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
// Function to test.

?>