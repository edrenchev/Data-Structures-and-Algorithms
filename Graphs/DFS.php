<?php

class DFS {

	private $graph;
	public $visited;

	public function __construct($graph) {
		$this->graph = $graph;
		$this->visited = [];
	}

	public function Dfs($node) {

		$stack = new SplStack();
		$stack->push($node);
		$this->visited[$node] = true;
		while ($stack->count() != 0) {
			$currentNode = $stack->pop();
			print ($currentNode . "\r\n");
			foreach ($this->graph[$currentNode] as $n) {
				if(isset($this->visited[$n])) continue;
				$stack->push($n);
				$this->visited[$n] = true;
			}
		}
	}

	public function DfsRecursive($node) {
		if(!isset($this->visited[$node])) {

			$this->visited[$node] = true;
			print ($node . "\r\n");
			foreach ($this->graph[$node] as $n) {
				$this->DfsRecursive($n);
			}

		}
	}

}


$dfs = new DFS([
	'sofiq' => ["burgas", "varna", "plovdiv", "kyustendil"],
	'burgas' => ["varna", "vidin", "gabrovo"],
	'plovdiv' => ["burgas", "vidin", "gabrovo"],
	'gabrovo' => ["sofiq"],
	'kyustendil' => ["blagoevgrad", "sofiq", "dupnica"],
	'varna' => ["sofiq", "burgas"],
	'vidin' => ["plovdiv", "burgas"],
	'dupnica' => ["kyustendil", "blagoevgrad"],
	'blagoevgrad' => ["sofiq", "kyustendil", "dupnica"],
]);

$dfs->Dfs("burgas");

print ("---------\r\n");
$dfs->visited= [];
$dfs->DfsRecursive("burgas");