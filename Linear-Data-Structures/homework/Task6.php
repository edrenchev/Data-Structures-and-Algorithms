<?php

class Task6 {

	public static function getSpecialSequence(SplDoublyLinkedList $list) {

		$newList = new SplDoublyLinkedList();

		for ($i=0; $i<$list->count(); $i++) {
			$count = 0;

			for ($j=1; $j<$list->count(); $j++) {
				if($list->offsetGet($i) == $list->offsetGet($j)) $count++;
			}

			if($newList->offsetExists($i) || ($count % 2 == 0 && $count!=0)) {
				$newList->push($list->offsetGet($i));
			}
		}
		return $newList;
	}
}

$list = new SplDoublyLinkedList();
$list->push(4);
$list->push(2);
$list->push(2);
$list->push(5);
$list->push(2);
$list->push(3);
$list->push(2);
$list->push(3);
$list->push(1);
$list->push(5);
$list->push(2);

$l = Task6::getSpecialSequence($list);

foreach ($l as $v) {
	print ($v." ");
}