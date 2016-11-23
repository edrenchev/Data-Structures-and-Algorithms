<?php

class Stack {

	private $stack = array();

	public function __construct() {
	}

	public function push($value) {
		array_push($this->stack, $value);
	}

	public function pop() {
		return array_pop($this->stack);
	}

}