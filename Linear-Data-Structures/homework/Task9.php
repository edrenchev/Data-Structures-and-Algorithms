<?php

class Task9 {

	public static function getSequence($n) {

		$queue = new SplQueue();

		$count = 50;

		$queue->enqueue($n);
		for($i=0; $i<50; $i++) {
			$num = $queue->dequeue();
			print ($num.' ');
			$queue->enqueue($num+1);
			$queue->enqueue(2*$num+1);
			$queue->enqueue($num+2);
		}

		return $queue;
	}
}

$queue = Task9::getSequence(2);

