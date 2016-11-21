<?php

class Task8 {

	public static function findMajorant(SplDoublyLinkedList $list) {

		$majoran = '';
		$used = [];

		for ($i = 0; $i < $list->count(); $i++) {
			if (isset($used[$list->offsetGet($i)])) continue;

			$currNumber = $list->offsetGet($i);
			$used[$currNumber] = 1;
			$count = 1;
			for ($j = 0; $j < $list->count(); $j++) {
				if ($currNumber == $list->offsetGet($j)) {
					$count++;
				}
			}

			if (((int)($list->count() / 2) + 1) < $count) {
				$majoran = $currNumber;
				break;
			}

		}

		return $majoran;
	}
}

$list = new SplDoublyLinkedList();
$list->push(2);
$list->push(2);
$list->push(3);
$list->push(3);
$list->push(2);
$list->push(3);
$list->push(4);
$list->push(3);
$list->push(3);

echo Task8::findMajorant($list);
