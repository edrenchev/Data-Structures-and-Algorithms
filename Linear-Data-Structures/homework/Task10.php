<?php

class Task10 {

	public static function getShortestSequence($n, $m) {

		$queue = new SplQueue();

		for ($i=0; $i<5; $i++) {

			$queue->enqueue($n+1);
			$queue->enqueue($n+2);
			$queue->enqueue(2*$n);

		}

		return $queue;
	}
}

$queue = Task10::getSequence(5, 16);

