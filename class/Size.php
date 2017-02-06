<?php

class Size {

	private $id;
	private $size;
	private $price;
	static public $connection;

	public function __construct() {
		$this->id = -1;
		$this->size = "";
		$this->price = null;
	}

	public function getId() {
		return $this->id;
	}

	public function getSize() {
		return $this->size;
	}
	public function setSize($size) {
		$this->size = $size;
		return true;
	}

	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->price = $price;
		return true;
	}

}

?>