<?php

class GraphSimpleOOP {

	private $children;

	public function __construct(array $list) {
		$this->setChildren($list);
	}

	/**
	 * @return mixed
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * @param mixed $children
	 */
	public function setChildren($children) {
		$this->children = $children;
	}
}

$testGraph = new GraphSimpleOOP([
	[3, 6],
	[2, 3, 4, 5, 6],
	[1, 4, 5],
	[0, 1, 5],
	[1, 2, 6],
	[1, 2, 3],
	[0, 1, 4],
]);

for ($i = 0; $i < count($testGraph->getChildren()); $i++) {
	print ($i . " -> ");
	for ($j = 0; $j < count($testGraph->getChildren()[$i]); $j++) {
		print ($testGraph->getChildren()[$i][$j] . " ");
	}
	print ("\r\n");
}