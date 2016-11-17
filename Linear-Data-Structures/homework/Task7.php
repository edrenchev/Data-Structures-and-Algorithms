<?php

class Task7 {

	public static function getSpecialSequence(SplDoublyLinkedList $list) {

		$newList = [];

		for ($i = 0; $i < $list->count(); $i++) {
			$count = 1;
			$value = $list->offsetGet($i);
			if (isset($newList[$value])) {
				$count = $newList[$value];
				$count++;
			}
			$newList[$value] = $count;
		}

		return $newList;
	}
}

$list = new SplDoublyLinkedList();
$list->push(3);
$list->push(4);
$list->push(4);
$list->push(2);
$list->push(3);
$list->push(3);
$list->push(4);
$list->push(3);
$list->push(2);

$l = Task7::getSpecialSequence($list);

foreach ($l as $k => $v) {
	print ($k . " -> " . $v ."\r\n");
}
