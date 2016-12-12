<?php

class BFS {

	private $graph;
	private $visited;

	public function __construct($graph) {
		$this->graph = $graph;
	}

	public function Bfs($node) {

		$queue = new SplQueue();
		$queue->enqueue($node);
		$this->visited[$node] = true;
		while ($queue->count() != 0) {
			$currentNode = $queue->dequeue();
			print ($currentNode . "\r\n");

			for ($i = 0; $i < count($this->graph[0]); $i++) {
				if ($this->graph[$currentNode][$i] == 1 && !isset($this->visited[$i])) {
					$queue->enqueue($i);
					$this->visited[$i] = true;
				}
			}
		}

	}

}

$bfs = new BFS([
	[0, 1, 0, 0, 1, 0],
	[1, 0, 1, 0, 0, 1],
	[0, 0, 0, 1, 0, 0],
	[0, 1, 0, 0, 0, 1],
	[1, 0, 0, 1, 0, 1],
	[1, 0, 1, 0, 1, 0]
]);

$bfs->Bfs(2);
