<?php

class User {

	private $id;
	private $address;
	private $name;
	private $surname;
	private $credits;
	private $hashedPassword;

	public function __construct() {
		$this->id = -1;
		$this->address = "";
		$this->name = "";
		$this->surname = "";
		$this->credits = null;
		$this->hashedPassword = "";

	public function getId() {
		return $this->id;
	}

	public function getAddress() {
		return $this->address;
	}
	public function setAddress($address) {
		$this->address = $address;
		return true;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return true;		
	}

	public function getSurname() {
		return $this->surname;
	}
	public function setSurname($surname) {
		$this->surname = $surname;
		return true;		
	}


	}


}

?>