<?php

class ListItem {

	public $value;

	public $nextItem;

	public function __construct($value) {
		$this->value = $value;
		$this->nextItem = null;
	}
}

class LinkedList {

	public $firstElement;

	public $element;

	public $count;

	public function __construct() {
		$this->firstElement = null;
		$this->element = null;
		$this->count = 0;
	}

	public function addFirstElement($value) {
		$listItem = new ListItem($value);
		$listItem->nextItem = $this->firstElement;
		$this->firstElement = &$listItem;


		if ($this->element == null) {
			$this->element = &$listItem;
		}

		$this->count++;
	}

	public function add($value) {

		if ($this->firstElement != NULL) {

			$link = new ListItem($value);
			$this->element->nextItem = $link;
			$link->nextItem = NULL;
			$this->element = &$link;
			$this->count++;

		} else {
			$this->insertFirst($value);
		}


	}
}

