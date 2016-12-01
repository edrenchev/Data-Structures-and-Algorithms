<?php

class Task2 {

	public static $taken = [];

	public static $n = 3;
	public static $k = 2;

	public static function main() {
		self::variate(0);
	}

	public static function printNum($i) {
		for ($l = 0; $l < $i; $l++) print((self::$taken[$l] + 1). ' ');
		print ("\r\n");
	}

	public static function variate($i) {

		if($i >= self::$k) {self::printNum($i); return; }
		for ($j = 0; $j < self::$n; $j++) {
			self::$taken[$i] = $j;
			self::variate($i + 1);
		}

	}

}

echo Task2::Main();