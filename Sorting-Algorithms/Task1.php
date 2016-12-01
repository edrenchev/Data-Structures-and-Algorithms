<?php

class Task1 {

	public static function main(array $nums) {

		for ($i = 0; $i < count($nums) - 1; $i++) {
			for ($j = $i + 1; $j < count($nums); $j++) {

				if($nums[$i] > $nums[$j]) {
					$tmp = $nums[$i];
					$nums[$i] = $nums[$j];
					$nums[$j] = $tmp;
				}

			}
		}

		echo implode(', ', $nums);
	}
}

Task1::main([64, 25, 12, 22, 11]);