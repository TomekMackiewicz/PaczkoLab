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
		$this->addressId = null;
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
		$this->addressId = $address;
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

	public function loadFromDB($idUser) {
		$sql = "SELECT * FROM user WHERE id = ".$idUser;
		if($result = Self::$connection->query($sql)) {
			$row = $result->fetch();
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

	static public function loadAllFromDB() {
		$sql = "SELECT * FROM user";
		if($result = Self::$connection->query($sql)) {				
			$row = [];
			$n = 0;
			foreach($result as $key => $value) {
				$row[$key] = $value;
			}
			return $row;
		} else {
			return false;
		}
	}

	public function saveToDB() {

		if($this->id == -1) {

			$sql  = "INSERT INTO ";
			$sql .= "user (address_id,name,surname,credits,pass) VALUES";
			$sql .= "($this->addressId,'$this->name','$this->surname',$this->credits,'$this->hashedPassword')";

			if($result = Self::$connection->query($sql)) {	
				return true;
			} else {
				return false;
			}			
		} else {
				$sql = "UPDATE user 
								SET addressId=$this->addressId, name='$this->name', surname='$this->surname', credits=$this->credits,
								WHERE id=$this->id";

				if($result = Self::$connection->query($sql)) {	
					return true;
				} else {
					return false;
				}	

		}
	}

  static public function deleteFromDB($id) {
  	$sql = "DELETE FROM user WHERE id=$id LIMIT 1";
		if($result = Self::$connection->query($sql)) {	
			return true;
		} else {
			return false;
		}	
  }

}

//User::loadAllFromDB();

// $oUser = new User();
// $oUser->setAddressId(3);
// $oUser->setName('Imie');
// $oUser->setSurname('Nazwisko');
// $oUser->setCredits(50);
// $oUser->setHashedPassword('secret');

// $oUser->saveToDB();

?>
