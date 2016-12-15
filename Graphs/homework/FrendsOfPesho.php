<?php

class PriorityQueue extends SplPriorityQueue {
	public function compare($priority1, $priority2) {
		if ($priority1 === $priority2) return 0;
		return $priority1 < $priority2 ? 1 : -1;
	}
}



class FrendsOfPesho {

	public $graph = [];
	public $distance = [];
	public $setOfNodes = [];
	public $previous = [];

	public $hospitalNumbers;

	public function __construct($str) {

		$str = mb_split("\r\n", $str);

		$tmp = mb_split(' ', $str[0]);
		$N = $tmp[0];
		$M = $tmp[0] - (count($str) - 2);
		$H = $tmp[0];
		$this->hospitalNumbers = mb_split(' ', $str[1]);

		for ($i = 0; $i < $N; $i++) {
			for ($j = 0; $j < $N; $j++) {

				if($i != $j && $M > 0) {
					$this->graph[$i][$j] = 1;
					$M--;
				} else {
					$this->graph[$i][$j] = 0;
				}

			}
		}

		for ($i = 2; $i < count($str); $i++) {
			$tmp = mb_split(' ', $str[$i]);

			$x = $tmp[0] - 1;
			$y = $tmp[1] - 1;
			$this->graph[$x][$y] = $tmp[2];
			$this->graph[$y][$x] = $tmp[2];
		}

		for ($i = 0; $i < $N; $i++) {
			for ($j = 0; $j < $N; $j++) {
				print ($this->graph[$i][$j] . ' ');
			}
			print ("\r\n");
		}

	}

	public function Dijkstra($source) {

		$priorityQueue = new PriorityQueue();
		$priorityQueue->setExtractFlags(PriorityQueue::EXTR_DATA);


		$this->distance[$source] = 0;
		$this->previous[$source] = -1;

		for ($i = 0; $i < count($this->graph[0]); $i++) {
			if($source != $i) {
				$this->distance[$i] = PHP_INT_MAX;
				$this->previous[$i] = null;
				$this->setOfNodes[$i] = true;
			}

			$priorityQueue->insert($i, $this->distance[$i]);

		}


		while (!empty($this->setOfNodes)) {

			$minNode = $priorityQueue->top();
			$priorityQueue->extract();

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
						$priorityQueue->insert($i, $potentialDistance);
					}
				}
			}
		}
	}
}

$f = new FrendsOfPesho("5 8 2
1 2
1 2 5
4 1 2
1 3 1
3 4 4
4 5 1
2 4 3
5 2 1
2 3 20");

$min = PHP_INT_MAX;
foreach ($f->hospitalNumbers as $h) {
	print("\r\n===\r\n");
	$h = $h - 1;
	$f->Dijkstra($h);

	$tmpDistance = 0;
	for ($i = 0; $i < count($f->distance); $i++) {
		print ("Distance from {$h} to " . ($i) . " ");
		if ($f->distance[$i] == PHP_INT_MAX) {
			print ("No path.\r\n");
		} else {

			if(in_array($i+1, $f->hospitalNumbers)) continue;

			print ("Path: ");

			$tmp = [];
			$index = $i;
			while ($index != -1) {
				$tmp[] = $index;
				$index = $f->previous[$index];
			}

			echo implode(' ', array_reverse($tmp));


			print (": ");
			print ("Distance: " . $f->distance[$i] . "\r\n");
			$tmpDistance += $f->distance[$i];
		}
	}

	if($min > $tmpDistance) $min = $tmpDistance;

}

print ($min);

