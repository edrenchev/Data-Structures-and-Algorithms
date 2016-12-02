<?php

class Task3 {
	/*
		public static function splits(array $numbers) {

			if(count($numbers) == 1) return $numbers;

			$middleIndex = (int)(count($numbers) / 2);
			$leftNumbers = array_splice($numbers, 0, $middleIndex);
			$rightNumbers = array_splice($numbers, $middleIndex);

			$leftNumbers = self::splits($leftNumbers);
			$rightNumbers = self::splits($rightNumbers);

			return self::merge($leftNumbers, $rightNumbers);

		}

		public static function merge(array $leftNumbers, array $rightNumbers) {

			$leftIncrease = 0;
			$rightIncrease = 0;
			$len = count($leftNumbers) + count($rightNumbers);

			$arr = [];
			for ($i=0;$i<$len; $i++) {
				if($rightIncrease == count($rightNumbers) || ($leftIncrease < count($leftNumbers) && $leftNumbers[$leftIncrease] <= $rightNumbers[$rightIncrease])) {
					$arr[$i] = $leftNumbers[$leftIncrease];
					$leftIncrease++;
				} else if($leftIncrease == count($leftNumbers) || ($rightIncrease < count($rightNumbers) && $rightNumbers[$rightIncrease] <= $leftNumbers[$leftIncrease])) {
					$arr[$i] = $rightNumbers[$rightIncrease];
					$rightIncrease++;
				}
			}

			return $arr;
		}*/

	public static function merge_sort($arr) {
		if (count($arr) <= 1) {
			return $arr;
		}

		$left = array_slice($arr, 0, (int)(count($arr) / 2));
		$right = array_slice($arr, (int)(count($arr) / 2));

		$left = self::merge_sort($left);
		$right = self::merge_sort($right);

		$output = self::merge($left, $right);

		return $output;
	}


	public static function merge($left, $right) {
		$result = array();

		while (count($left) > 0 && count($right) > 0) {
			if ($left[0] <= $right[0]) {
				array_push($result, array_shift($left));
			} else {
				array_push($result, array_shift($right));
			}
		}

		array_splice($result, count($result), 0, $left);
		array_splice($result, count($result), 0, $right);

		return $result;
	}

	public static function mergeSort(array $numbers) {
		return self::merge_sort($numbers);
	}

}

$arr = Task3::mergeSort([6, 1, 3, 7, 5, 2]);
echo implode(',', $arr);