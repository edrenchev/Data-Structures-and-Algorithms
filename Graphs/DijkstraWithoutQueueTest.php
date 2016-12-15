<?php

class DijkstraWithoutQueueTest {

	public static $graph = [];
	public static $distance = [];
	public static $setOfNodes = [];
	public static $previous = [];

	public static function Dijkstra($source) {

		for ($i = 0; $i < count(self::$graph[0]); $i++) {
			self::$distance[$i] = PHP_INT_MAX;
			self::$previous[$i] = null;
			self::$setOfNodes[$i] = true;
		}

		self::$distance[$source] = 0;
		self::$previous[$source] = -1;

		while (!empty(self::$setOfNodes)) {
			$minNode = PHP_INT_MAX;

			foreach (self::$setOfNodes as $key => $value) {
				if ($minNode > self::$distance[$key]) {
					$minNode = $key;
				}
			}

			unset(self::$setOfNodes[$minNode]);

			if ($minNode == PHP_INT_MAX) {
				break;
			}

			for ($i = 0; $i < count(self::$graph[0]); $i++) {
				if (self::$graph[$minNode][$i] > 0) {
					$potentialDistance = self::$distance[$minNode] + self::$graph[$minNode][$i];
					if ($potentialDistance < self::$distance[$i]) {
						self::$distance[$i] = $potentialDistance;
						self::$previous[$i] = $minNode;
					}
				}
			}
		}

	}

	public static function main() {

		self::$graph = [
			[0, 1, 1, 3, 0, 0, 0, 0],
			[1, 0, 9, 0, 0, 0, 0, 0],
			[1, 9, 0, 0, 9, 0, 2, 0],
			[3, 0, 0, 0, 0, 0, 0, 8],
			[0, 0, 9, 0, 0, 0, 7, 1],
			[0, 0, 0, 0, 0, 0, 6, 0],
			[0, 0, 2, 0, 7, 6, 0, 7],
			[0, 0, 0, 8, 1, 0, 7, 0],
		];

		self::Dijkstra(4);

		for ($i = 0; $i < count(self::$distance); $i++) {
			print ("Distance from 1 to " . ($i) . " ");
			if (self::$distance[$i] == PHP_INT_MAX) {
				print ("No path.\r\n");
			} else {
				print ("Path: ");

				$tmp = [];
				$index = $i;
				while ($index != -1) {
					$tmp[] = $index;
					$index = self::$previous[$index];
				}

				echo implode(' ', array_reverse($tmp));


				print (": ");
				print ("Distance: " . self::$distance[$i] . "\r\n");
			}
		}
	}

}

DijkstraWithoutQueueTest::main();