<?php

class BinaryNode {

	private $value;

	private $left;
	private $right;

	public function __construct($value) {
		$this->setValue($value);
		$this->setLeft(null);
		$this->setRight(null);
	}

	/**
	 * @return mixed
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * @return null
	 */
	public function getLeft() {
		return $this->left;
	}

	/**
	 * @param null $left
	 */
	public function setLeft($left) {
		$this->left = $left;
	}

	/**
	 * @return mixed
	 */
	public function getRight() {
		return $this->right;
	}

	/**
	 * @param mixed $right
	 */
	public function setRight($right) {
		$this->right = $right;
	}



}

class BinaryTree {

	private $root;

	public function __construct() {
		$this->setRoot(null);
	}

	public function isEmpty() {
		return $this->getRoot() === null;
	}

	/**
	 * @return null
	 */
	public function getRoot() {
		return $this->root;
	}

	/**
	 * @param null $root
	 */
	public function setRoot(BinaryNode $root) {
		$this->root = $root;
	}

	public function insert($value) {
		$node = new BinaryNode($value);
		if($this->isEmpty()) {
			$this->setRoot($node);
		} else {
			$this->insertNode($node, $this->getRoot());
		}
	}

	private function insertNode(BinaryNode $node, BinaryNode $subTree) {
		if($subTree === null) {
			$subTree = $node;
		} else {
			if($node->getValue() > $subTree->getValue()) {
				$this->insertNode($node, $subTree->getRight());
			} else {
				$this->insertNode($node, $subTree->getLeft());
			}

		}
	}


}