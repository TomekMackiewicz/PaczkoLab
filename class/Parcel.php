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

}

?>