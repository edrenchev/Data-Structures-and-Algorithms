<?php

class Main {

	public static function removeNegativeNumbers(SplDoublyLinkedList $list) {

		for ($i=0; $i<$list->count(); $i++) {
			if($list->offsetGet($i) < 0) {
				$list->offsetUnset($i);
			}
		}

		return $list;
	}
}

$l = new SplDoublyLinkedList();
$l->push(1);
$l->push(4);
$l->push(-21);
$l->push(1);
$l->push(-2);

$list = Main::removeNegativeNumbers($l);

foreach ($list as $l) {
	print ($l." ");
}