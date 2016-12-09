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

	private function TraverseDFSByRoot(TreeNode $root, $space) {

		if($root == null) {
			return;
		}

		print($space . $root->getValue() . "\r\n");

		$child = null;
		for ($i=0; $i < $root->getChildrenCount(); $i++) {
			$child = $root->getChild($i);
			$this->TraverseDFSByRoot($child, $space . "    ");
		}
	}

	public function TraverseDFS() {
		$this->TraverseDFSByRoot($this->getRoot(), '');
	}

	public function TraverseBFS() {

		$queue = new SplQueue();
		$queue->enqueue($this->getRoot());
		while ($queue->count() > 0) {
			$currentNode = $queue->dequeue();
			print ($currentNode->getValue() . ' ');
			for ($i=0; $i<$currentNode->getChildrenCount(); $i++) {
				$childNode = $currentNode->getChild($i);
				$queue->enqueue($childNode);
			}
		}

	}

	public function TraverseDFSWithStack() {
		$stack = new SplStack();
		$stack->push($this->getRoot());
		while ($stack->count() > 0) {
			$currentNode = $stack->pop();
			print ($currentNode->getValue() . ' ');
			for ($i=0; $i<$currentNode->getChildrenCount(); $i++) {
				$childNode = $currentNode->getChild($i);
				$stack->push($childNode);
			}
		}
	}

}

$tree =
	new Tree(7, [
		new Tree(19, [
			new Tree(1),
			new Tree(12),
			new Tree(31)
		]),
		new Tree(21),
		new Tree(14, [
			new Tree(23),
			new Tree(6)
		])
	]
);


print ("Depth-First Search (DFS) traversal (recursive):\r\n");
$tree->TraverseDFS();

print ("\r\n");

print ("Breadth-First Search (BFS) traversal (with queue):\r\n");
$tree->TraverseBFS();

print ("\r\n");

print ("Depth-First Search (DFS) traversal (with stack):\r\n");
$tree->TraverseDFSWithStack();
