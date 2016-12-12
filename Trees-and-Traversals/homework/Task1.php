<?php


class TreeNode {

	private $value;
	private $hasParent;
	private $children;

	public function __construct($value) {
		if ($value === null) {
			throw new \Exception("Cannot insert null value!");
		}
		$this->setValue($value);
		$this->children = new SplDoublyLinkedList();
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
	 * @return mixed
	 */
	public function getHasParent() {
		return $this->hasParent;
	}

	/**
	 * @param mixed $hasParent
	 */
	public function setHasParent($hasParent) {
		$this->hasParent = $hasParent;
	}

	/**
	 * @return mixed
	 */
	public function getChild($index) {
		return $this->children->offsetGet($index);
	}

	/**
	 * @param mixed $child
	 */
	public function addChild(TreeNode $child) {
		if ($child === null) {
			throw new \Exception("Cannot insert null value!");
		}

		if ($child->getHasParent()) {
			throw new \Exception("The node already has a parent!");
		}

		$child->setHasParent(true);
		$this->children->push($child);

	}

	public function getChildrenCount() {
		return $this->children->count();
	}

}

class Tree {

	private $root;

	public function __construct($value, array $children = []) {
		if ($value === null) {
			throw new \Exception("Cannot insert null value!");
		}

		$this->setRoot(new TreeNode($value));

		if (!empty($children)) {
			foreach ($children as $child) {
				$root = $this->getRoot();
				$root->addChild($child->getRoot());
			}
		}
	}


	/**
	 * @return mixed
	 */
	public function getRoot() {
		return $this->root;
	}

	/**
	 * @param mixed $root
	 */
	public function setRoot(TreeNode $root) {
		$this->root = $root;
	}

	public function getAllLeafNodes(TreeNode $node) {

		if ($node->getChildrenCount() == 0) {
			print (" " . $node->getValue());
		}

		for ($i = 0; $i < $node->getChildrenCount(); $i++) {
			$currentNode = $node->getChild($i);
			$this->getAllLeafNodes($currentNode);
		}
	}

	public function getAllMiddleNodes(TreeNode $node) {

		if ($node->getChildrenCount() > 0 && $node->getHasParent() === true) {
			print (" " . $node->getValue());
		}

		for ($i = 0; $i < $node->getChildrenCount(); $i++) {
			$currentNode = $node->getChild($i);
			$this->getAllMiddleNodes($currentNode);
		}
	}

	public function getLongestPath(TreeNode $node) {

		if ($node->getChildrenCount() == 0) {
			return 0;
		}

		$maxPath = 0;

		for ($i = 0; $i < $node->getChildrenCount(); $i++) {
			$currentNode = $node->getChild($i);
			$maxPath = 1 + $this->getLongestPath($currentNode);
		}

		return $maxPath;
	}

	public function getAllPathsWithSumS(TreeNode $node, $sum, $path = '') {

		if ($node->getValue() > $sum) {
			return;
		} else {
			$path .= " " . $node->getValue();
			$sum -= $node->getValue();
			if ($sum == 0) print ($path . "\r\n");
			for ($i = 0; $i < $node->getChildrenCount(); $i++) {
				$this->getAllPathsWithSumS($node->getChild($i), $sum, $path);
			}
		}

	}

	public function getAllSubtreesWithSumS(TreeNode $node, $sum) {

		if ($node->getChildrenCount() > 0 && $node->getHasParent() === true) {
			$tmpNode = $this->getTreeSum($node);
			if ($sum == $tmpNode[0]) {
				print ($tmpNode[1] . "\r\n");
			}
		}

		for ($i = 0; $i < $node->getChildrenCount(); $i++) {
			$currentNode = $node->getChild($i);
			$this->getAllSubtreesWithSumS($currentNode, $sum);
		}

	}

	public function getTreeSum(TreeNode $node, $sum = 0, $nodes = '') {

		$sum += $node->getValue();
		$nodes .= $node->getValue() . ' ';

		for ($i = 0; $i < $node->getChildrenCount(); $i++) {
			$currentNode = $node->getChild($i);
			$tmpTree = $this->getTreeSum($currentNode, $sum);
			$sum += $tmpTree[0];
			$nodes .= $tmpTree[1] . ' ';
		}

		return [$sum, $nodes];

	}

}

$tree =
	new Tree(3, [
			new Tree(5, [
				new Tree(0),
				new Tree(1),
				new Tree(6)
			]),
			new Tree(2, [
				new Tree(4)
			])
		]
	);

print ("the root node ");
$root = $tree->getRoot();
print ($root->getValue());
print ("\r\n");

print ("all leaf nodes ");
$tree->getAllLeafNodes($tree->getRoot());
print ("\r\n");

print ("all middle nodes ");
$tree->getAllMiddleNodes($tree->getRoot());
print ("\r\n");

print ("the longest path in the tree ");
print ($tree->getLongestPath($tree->getRoot()));
print ("\r\n");

print ("all paths in the tree with given sum `S` of their nodes ");
$tree->getAllPathsWithSumS($tree->getRoot(), 8);
print ("\r\n");

print ("all subtrees with given sum `S` of their nodes ");
$tree->getAllSubtreesWithSumS($tree->getRoot(), 6);
print ("\r\n");



