<?php

class User {

	private $id;
	private $addressId;
	private $name;
	private $surname;
	private $credits;
	private $hashedPassword;
	static public $connection;

	public function __construct() {
		$this->id = -1;
		$this->address = null;
		$this->name = "";
		$this->surname = "";
		$this->credits = null;
		$this->hashedPassword = "";
	}

	public function getId() {
		return $this->id;
	}

	public function getAddressId() {
		return $this->address;
	}
	public function setAddressId($address) {
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

	public function getCredits() {
		return $this->credits;
	}
	public function setCredits($credits) {
		$this->credits = $credits;
		return true;		
	}

	public function getHashedPassword() {
		return $this->hashedPassword;
	}
	public function setHashedPassword($password) {
		$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
		$this->hashedPassword = $hashedPassword;
		return true;		
	}

	public function lodaFromDB($idUser) {

		$sql = "SELECT * FROM user WHERE id= $idUser";

		if($sresult = Self::$connection->query($sql)) {
			$row = $sresult->fetch_assoc();

			$this->id = $row['id'];
			$this->addressId = $row['address_id'];
			$this->name = $row['name'];
			$this->surname = $row['surname'];
			$this->credits = $row['credits'];
			$this->hashedPassword = $row['pass'];

			// $row not true, because of a view.
			return $row;

		} else {

			return false;

		}
	}

}

?>
