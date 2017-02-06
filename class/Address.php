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

}

?>