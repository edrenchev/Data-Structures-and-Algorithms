<?php

class Task2 {

	public static function quickSort(array $nums) {

		if(empty($nums) || count($nums) < 1) return $nums;

		$pivotIndex = (int)(count($nums)/2);
		$pivotNum = $nums[$pivotIndex];
		unset($nums[$pivotIndex]);

		$leftNums = [];
		$rightNums = [];

		foreach ($nums as $num) {
			if($num <= $pivotNum) $leftNums[] = $num;
			else $rightNums[] = $num;
		}

		return array_merge(self::quickSort($leftNums), [$pivotNum], self::quickSort($rightNums));

	}

}

$sortedArr = Task2::quickSort([5,3,2,8,7,6,1,9,4]);

echo implode(',',$sortedArr);