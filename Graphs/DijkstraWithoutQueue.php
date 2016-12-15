<?php

class DijkstraWithoutQueue {

	public $distance = [];
	public $previous = [];
	public $setOfNodes = [];
	public $graph;

	public function __construct($graph) {
		$this->graph = $graph;
	}

	public function Dijkstra($source) {

		for ($i = 0; $i < count($this->graph[0]); $i++) {
			$this->distance[$i] = PHP_INT_MAX;
			$this->previous[$i] = null;
			$this->setOfNodes[$i] = true;
		}

		$this->distance[$source] = 0;

		while (!empty($this->setOfNodes)) {
			$minNode = PHP_INT_MAX;

			foreach ($this->setOfNodes as $key => $value) {
				if ($minNode > $this->distance[$key]) {
					$minNode = $key;
				}
			}

			unset($this->setOfNodes[$minNode]);

			if ($minNode == PHP_INT_MAX) {
				break;
			}

			for ($i = 0; $i < count($this->graph[0]); $i++) {
				if ($this->graph[$minNode][$i] > 0) {
					$potentialDistance = $this->distance[$minNode] + $this->graph[$minNode][$i];
					if ($potentialDistance < $this->distance[$i]) {
						$this->distance[$i] = $potentialDistance;
						$this->previous[$i] = $minNode;
					}
				}
			}
		}
	}

	public function start() {

		$this->Dijkstra(2 - 1);

		for ($i = 0; $i < count($this->distance); $i++) {
			print ("Distance from 1 to " . ($i) . " ");
			if ($this->distance[$i] == PHP_INT_MAX) {
				print ("No path.\r\n");
			} else {
				print ("Path: ");

				$index = $i;
				while ($index != 0) {
					print($index . " ");
					$index = $this->previous[$index];
				}

				print (": ");
				print ("Distance: " . $this->distance[$i] . "\r\n");
			}
		}

	}

}

$d = new DijkstraWithoutQueue([
	[0, 4, 8, 3, 3, 0, 0, 0],
	[4, 0, 1, 1, 0, 2, 5, 0],
	[8, 1, 0, 0, 5, 0, 2, 0],
	[3, 1, 0, 0, 0, 4, 0, 0],
	[3, 0, 5, 0, 0, 0, 0, 9],
	[0, 2, 0, 4, 0, 0, 1, 1],
	[0, 5, 2, 0, 0, 1, 0, 0],
	[0, 0, 0, 9, 1, 0, 0, 0],
]);

$d->start();