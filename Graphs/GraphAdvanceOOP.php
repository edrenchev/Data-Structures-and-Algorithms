<?php

class Node {
	/**
	 * @var Edge[]
	 */
	private $connections;
	private $name;

	public function __construct($name) {
		$this->setName($name);
		$this->connections = [];
	}

	/**
	 * @return Edge[]
	 */
	public function getConnections() {
		return $this->connections;
	}

	/**
	 * @param mixed $connections
	 */
	public function addConnections(Node $targetNode, $distance, $twoWay) {
		if ($targetNode == null) {
			throw new ArgumentNullException("targetNode");
		}

		if ($targetNode == $this) {
			throw new ArgumentException("Node may not connect to itself.");
		}

		if ($distance <= 0) {
			throw new ArgumentException("Distance must be positive.");
		}

		$this->connections[] = new Edge($targetNode, $distance);
		if ($twoWay) {
			$targetNode->addConnections($this, $distance, false);
		}
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	private function setName($name) {
		$this->name = $name;
	}

}

class Edge {
	/**
	 * @var Node
	 */
	private $target;
	private $distance;

	public function __construct(Node $target, $distance) {
		$this->target = $target;
		$this->distance = $distance;
	}

	/**
	 * @return Node
	 */
	public function getTarget() {
		return $this->target;
	}

	/**
	 * @return mixed
	 */
	public function getDistance() {
		return $this->distance;
	}
}

class Graph {

	/**
	 * @var Node[]
	 */
	private $nodes;

	public function __construct() {
		$this->nodes = [];
	}

	public function addNode($name) {
		$this->nodes[$name] = new Node($name);
	}

	public function addConnection($fromNode, $toNode, $distance, $twoWay) {
		$this->nodes[$fromNode]->addConnections($this->nodes[$toNode], $distance, $twoWay);
	}

	public function printGraph() {
		foreach ($this->nodes as $key => $node) {
			print ($key . " -> ");
			foreach ($node->getConnections() as $connection) {
				print ($connection->getTarget()->getName() . " - " . $connection->getDistance() . " ");
			}
			print ("\r\n");
		}
	}
}


class GraphAdvanceOOP {

	public static function main() {
		$graph = new Graph();

		// Nodes
		$graph->addNode("A");
		$graph->addNode("B");
		$graph->addNode("C");
		$graph->addNode("D");
		$graph->addNode("E");
		$graph->addNode("F");
		$graph->addNode("G");
		$graph->addNode("H");
		$graph->addNode("I");
		$graph->addNode("J");
		$graph->addNode("Z");


		// Connections
		$graph->addConnection("A", "B", 14, true);
		$graph->addConnection("A", "C", 10, true);
		$graph->addConnection("A", "D", 14, true);
		$graph->addConnection("A", "E", 21, true);
		$graph->addConnection("B", "C", 9, true);
		$graph->addConnection("B", "E", 10, true);
		$graph->addConnection("B", "F", 14, true);
		$graph->addConnection("C", "D", 9, false);
		$graph->addConnection("D", "G", 10, false);
		$graph->addConnection("E", "H", 11, true);
		$graph->addConnection("F", "C", 10, false);
		$graph->addConnection("F", "H", 10, true);
		$graph->addConnection("F", "I", 9, true);
		$graph->addConnection("G", "F", 8, false);
		$graph->addConnection("G", "I", 9, true);
		$graph->addConnection("H", "J", 9, true);
		$graph->addConnection("I", "J", 10, true);

		$graph->printGraph();
	}
}

GraphAdvanceOOP::main();