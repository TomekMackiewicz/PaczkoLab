<?php

class Parcel {

	private $id;
	private $receiver;
	private $size;
	static public $connection;

	public function __construct() {
		$this->id = -1;
		$this->receiver = "";
		$this->size = null;
	}

	public function getId() {
		return $this->id;
	}

	public function getReceiver() {
		return $this->receiver;
	}
	public function setReceiver($receiver) {
		$this->receiver = $receiver;
		return true;
	}

	public function getSize() {
		return $this->size;
	}
	public function setSize($size) {
		$this->size = $size;
		return true;
	}

	// public function loadFromDB($idAddress) {

	// 	$sql = "SELECT * FROM addresses WHERE id = ".$idAddress;

	// 	if($result = Self::$connection->query($sql)) {

	// 		$row = $result->fetch();

	// 		$this->id = $row['id'];
	// 		$this->city = $row['city'];
	// 		$this->code = $row['code'];
	// 		$this->street = $row['street'];
	// 		$this->flat = $row['flat'];

	// 		// $row not true, because of a view.
	// 		return $row;

	// 	} else {

	// 		return false;

	// 	}
	// }

	// static public function loadAllFromDB() {
	// 	$sql = "SELECT * FROM addresses";
	// 	if($result = Self::$connection->query($sql)) {	
	// 		$row = [];
	// 		$n = 0;
	// 		foreach($result as $key => $value) {
	// 			$row[$key] = $value;
	// 		}
	// 		return $row;
	// 	} else {
	// 		return false;
	// 	}
	// }

}

?>