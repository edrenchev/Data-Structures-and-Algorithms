<?php


class Task2 {

	public static function binarySearch($x, array $list, $left, $right) {
		if ($left > $right)
			return -1;

//		$mid = ($left + $right) >> 1; // 5/2 = 2
		$mid = (int)(($left + $right) / 2);

		if ($list[$mid] == $x) {
			return $mid;
		} elseif ($list[$mid] > $x) {
			return self::binarySearch($x, $list, $left, $mid - 1);
		} elseif ($list[$mid] < $x) {
			return self::binarySearch($x, $list, $mid + 1, $right);
		}
	}
}

$list = array(0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144);
$x = 55;

echo Task2::binarySearch($x, $list, 0, count($list)-1);