<?php

class Address {

	private $id;
	private $city;
	private $code;
	private $street;
	private $flat;
	static public $connection;

	public function __construct() {
		$this->id = -1;
		$this->city = "";
		$this->code = "";
		$this->street = "";
		$this->flat = "";
	}

	public function getId() {
		return $this->id;
	}

	public function getCity() {
		return $this->city;
	}
	public function setCity($city) {
		$this->city = $city;
		return true;
	}

	public function getCode() {
		return $this->code;
	}
	public function setCode($code) {
		$this->code = $code;
		return true;
	}

	public function getStreet() {
		return $this->street;
	}
	public function setStreet($street) {
		$this->street = $street;
		return true;
	}

	public function getFlat() {
		return $this->flat;
	}
	public function setFlat($flat) {
		$this->flat = $flat;
		return true;
	}

	public function loadFromDB($idAddress) {

		$sql = "SELECT * FROM addresses WHERE id = ".$idAddress;

		if($result = Self::$connection->query($sql)) {

			$row = $result->fetch();

			$this->id = $row['id'];
			$this->city = $row['city'];
			$this->code = $row['code'];
			$this->street = $row['street'];
			$this->flat = $row['flat'];

			// $row not true, because of a view.
			return $row;

		} else {

			return false;

		}
	}

	static public function loadAllFromDB() {
		$sql = "SELECT * FROM addresses";
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

}

?>