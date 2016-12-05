<?php

class Task1 {

	public static function linearSearch($needle, array $haystack) {

		$index = false;

		foreach ($haystack as $key=>$value) {
			if($needle == $value) return $key;
		}

		return $index;
	}

}

var_dump(Task1::linearSearch(5, [1,4, 5, 77, 123, 523]));