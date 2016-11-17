<?php

function readline($prompt = null){
	if($prompt){
		echo $prompt;
	}
	$fp = fopen("php://stdin","r");
	$line = rtrim(fgets($fp, 1024));
	fclose($fp);
	return $line;
}

$prompt = 'Enter positive num or empty line for end: ';


$list = new SplDoublyLinkedList();
do {
	$num = readline($prompt);
	$num = (int)$num;
	if($num < 0) {
		print('Error: Num is < 0!');
		continue;
	}
	$list->push($num);
}
while (!empty($num));

/*$nums = [1,2,3,4,5,6];

$list = new SplDoublyLinkedList();
foreach ($nums as $num) {
	$num = (int)$num;
	if($num < 0) {
		print('Error: Num is < 0!');
		continue;
	}
	$list->push($num);
}*/

$list->rewind();

$sum = 0;
while ($list->valid()) {
	$sum += $list->current();
	$list->next();
}

$average = $sum / $list->count();

print ("Sum is: {$sum}\r\n");
print ("Average is: {$average}");
